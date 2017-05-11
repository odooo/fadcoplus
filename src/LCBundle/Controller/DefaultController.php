<?php
namespace LCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LCBundle\Entity\LcUser;
use LCBundle\Entity\LcDiscussion;
use LCBundle\Entity\LcMessage;
use LCBundle\Entity\DernierMessageLu;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{    
    public function newindexAction(){
     
        $user = null;
        $prest = $this->getUser();
        if($prest){
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('LCBundle:LcUser')->findOneByIdoriginal($prest->getId());
            if ($user == null) {
                $user = new LcUser();
                $user->setIdoriginal($prest->getId());
                $d = new \Datetime();
                $user->setDerniereconnexion($d);
                $user->setNom($prest->getNom());
                $user->setPrenom($prest->getPrenom());
                $em->persist($user);
                $em->flush();
            }
            $this->getRequest()->getSession()->set('lcuser', $user);
            return $this->render('LCBundle:Default:home.html.twig',array('cuid' => $user->getIdoriginal(), 'cunom' => $user->getNom(), 'cuprenom' => $user->getPrenom() ));
        }
        return new Response("Connectez vous d'abord", 401);
    }

    private function isPost(){
        return $this->getRequest()->getMethod() == 'POST';
    }

    private function setNoParamError(){
        return array('erreur' => '!PA');
    }

    private function setExceptionError($e){
        return array('erreur' => 'EX', 'ex' => $e->getMessage());
    }

    public function setSucces(){
        return array('ok' => 'OK');
    }

    private function setNoPostError(){
        return array('erreur' => '!P');
    }

    private function setNoSessionError(){
        return array('erreur' => '!S');
    }

    private function lcUserToArray($user, $discAvecId = ""){
        return array(
            'id' => $user->getId(),
            'ido' => $user->getIdoriginal(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'discavecid' => $discAvecId
         );
    }

    private function lcMessageToArray($msg, $currentUserId){
        return array(
            'id' => $msg->getId(),
            'date' => $msg->getDate()->format("d/m/Y à H:i:s"),
            'contenu' => $msg->getContenu(),
            'posteur' => $msg->getPosteur()->getId(),
            'nomposteur' => $msg->getPosteur()->getNom()." ".$msg->getPosteur()->getPrenom(),
            'demandeur' => $currentUserId,
            'discid' => $msg->getDiscussion()->getId(),
            'adeux' => $msg->getDiscussion()->getAdeux(),
            'type'  => $msg->getType(),
            'titredisc' => $msg->getDiscussion()->getTitre(),
            'file' => $msg->getFile()
         );
    }

    private function lcDiscussionToArray($lcd, $currentUserId){
        $a = $lcd->getCreateur();
        $avec = "";
        if(is_null($a)){
            $a = "";
            $arr = $lcd->getIntervenants();
            if(count($arr) == 2) foreach ($arr as $u) {
                if($currentUserId != $u->getId()) $avec = $u->getNom()." ".$u->getPrenom();
            };
        }else {
            $a = $a->getId();
        }
        return array(
            'id' => $lcd->getId(),
            'titre' => $lcd->getTitre(),
            'sujet' => $lcd->getSujet(),
            'createur' => $a,
            'avec' => $avec,
            'usercourant' => $currentUserId
         );
    }

    //-------------------------------------------------------------------------------

    public function lcRegisterAction(){
     
        $user = null;
    	$em = $this->getDoctrine()->getManager();
        $prest = $this->getUser();
    	$user = $em->getRepository('LCBundle:LcUser')->findOneByIdoriginal($prest->getId());
    	if ($user == null) {
            $user = new LcUser();
            $user->setIdoriginal($prest->getId());
            $d = new \Datetime();
            $user->setDerniereconnexion($d);
            $user->setNom($prest->getNom());
            $user->setPrenom($prest->getPrenom());
            $em->persist($user);
            $em->flush();
    	}
        $this->getRequest()->getSession()->set('lcuser', $user);
        
        return new JsonResponse(array("id" => $user->getId()));        
    }
    
    public function lcGetConnectedUserAction(){
        
    	$user = $this->getRequest()->getSession()->get('lcuser');
    	if ($user != null) {
            $pusher = $this->container->get('gos_web_socket.wamp.pusher');
            $pusher->push(["cd" => "cr", "id" => $user->getId()], 'cd_topic');
    	}
        return new JsonResponse("ok");
    }

    public function indexAction($cunom , $cuprenom, $cuid )
    {
    	$user = null;
    	$em = $this->getDoctrine()->getManager();
    	$user = $em->getRepository('LCBundle:LcUser')->findOneByIdoriginal($cuid);
    	if ($user == null) {
            $user = new LcUser();
            $user->setIdoriginal($cuid);
            $d = new \Datetime();
            $user->setDerniereconnexion($d);
            $user->setNom($cunom);
            $user->setPrenom($cuprenom);
            $em->persist($user);
            $em->flush();
    	}
        $this->getRequest()->getSession()->set('lcuser', $user);
        //return $this->render('LCBundle:Default:index.html.twig',array('cuid' => $cuid, 'cunom' => $cunom, 'cuprenom' => $cuprenom ));
    
        return new JsonResponse();
    }

    public function creerNouvelleDiscussionAction(){
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $titre = $request->request->get('titre');
                    $sujet = $request->request->get('sujet');
                    $contacts = $request->request->get('contacts');
                    if($titre == null || $sujet == null || $contacts == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $lcd = new LcDiscussion();
                    $lcd->setTitre($titre);
                    $d = new \Datetime();
                    $lcd->setDate($d);
                    $lcd->setSujet($sujet);

                    $contactsLcUser = $em->getRepository('LCBundle:LcUser')->findLcUserInId($contacts);
                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $message = new LcMessage();
                    $message->setPosteur($user);
                    $message->setDate($d);
                    $message->setContenu("Créée le ".$d->format('d/m/Y à H:i:s'));
                    $message->setType("");

                    foreach($contactsLcUser as $u)
                    {
                        $lcd->addIntervenant($u);

                    }

                    $lcd->setCreateur($user);
                    $message->setDiscussion($lcd);
                    $cmp = 1;
                    $ar[] = array();
                    foreach($contactsLcUser as $u)
                    {
                        
                        $ar[] = new DernierMessageLu();
                        $ar[$cmp]->setUser($u);
                        $ar[$cmp]->setDiscussion($lcd);
                        $ar[$cmp]->setMessage($message);

                        $em->persist($ar[$cmp]);

                        $cmp++;
                    }

                    $ar[] = new DernierMessageLu();
                    $ar[$cmp]->setUser($user);
                    $ar[$cmp]->setDiscussion($lcd);
                    $ar[$cmp]->setMessage($message);

                    $em->persist($ar[$cmp]);

                    $em->persist($lcd);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    foreach($contactsLcUser as $u)
                    {
                        $pusher->push(['cmd' => 'lc', 'route' => 'lccnd', 'msg' => 'Vous êtes ajouté à une nouvelle discussion.'], 'acme_topic', ['userid'=> $u->getId()]);
                    }
                    
                    return new JsonResponse($this->setSucces());
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }

    public function ajouterContactAction(){
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $discid = $request->request->get('discid');
                    $contacts = $request->request->get('contacts');
                    if($discid == null || $contacts == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $lcd = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                    $contactsLcUser = $em->getRepository('LCBundle:LcUser')->findLcUserInId($contacts);
                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    
                    $d = new \Datetime();
                    $message = new LcMessage();
                    $message->setPosteur($user);
                    $message->setDate($d);
                    $message->setContenu("Ajouté(s): ");
                    $message->setType("");

                    foreach($contactsLcUser as $u)
                    {
                        $lcd->addIntervenant($u);
                        $message->setContenu($message->getContenu().$u->getNom()." ".$u->getPrenom().", ");
                    }

                    $message->setDiscussion($lcd);
                    $cmp = 1;
                    $ar[] = array();
                    foreach($contactsLcUser as $u)
                    {                        
                        $ar[] = new DernierMessageLu();
                        $ar[$cmp]->setUser($u);
                        $ar[$cmp]->setDiscussion($lcd);
                        $ar[$cmp]->setMessage($message);

                        $em->persist($ar[$cmp]);

                        $cmp++;
                    }

                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    foreach($contactsLcUser as $u)
                    {
                        $pusher->push(['cmd' => 'lc', 'route' => 'lccnd', 'msg' => 'Vous êtes ajouté à une nouvelle discussion.'], 'acme_topic', ['userid'=> $u->getId()]);
                    }
                    

                    return new JsonResponse($this->setSucces());
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }    
    
    public function getLcUserDiscussionsAction(){

        $user = $this->getRequest()->getSession()->get('lcuser');
        if(is_null($user)){
            return new JsonResponse($this->setNoSessionError());
        }
        else{
            try{
                $em = $this->getDoctrine()->getManager();
                //discussion dont il est créateur
                $lcDiscussions = $em->getRepository('LCBundle:LcDiscussion')->findByCreateur($user);
                $arrayDiscussions[] = array();
                $cmp = count($lcDiscussions);
                for ($i=0; $i < $cmp; $i++) { 
                    $arrayDiscussions[] = $this->lcDiscussionToArray($lcDiscussions[$i], $user->getId());
                }

                //discussion dont il est intervenant
                $u = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                $udisc = $u->getDiscussions();
                
                foreach ($udisc as $d) {
                    $arrayDiscussions[] = $this->lcDiscussionToArray($d, $user->getId());
                }

                return new JsonResponse($arrayDiscussions);
            }
            catch (\Exception $e){                    
                return new JsonResponse($this->setExceptionError($e));
            } 
        }
    }

    public function getLcUsersAction(){

        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $users = null;
                    $em = $this->getDoctrine()->getManager();
                    $users = $em->getRepository('LCBundle:LcUser')->findLcUsers($user->getId());
                    $arrayUsers[] = array();
                    foreach ($users as $lcu) {
                        $discEntreLesDeux = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $lcu->getId());
                        if(count($discEntreLesDeux)>0)
                            $arrayUsers[] = $this->lcUserToArray($lcu, $discEntreLesDeux[0]->getId());
                        else $arrayUsers[] = $this->lcUserToArray($lcu);
                    }
                    return new JsonResponse($arrayUsers);
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                } 
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }
    
    public function getLcUsersAjoutContactAction(){
        
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    
                    $request = $this->getRequest();
                    $discid = $request->request->get('discid');
                    if($discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }
                    
                    $em = $this->getDoctrine()->getManager();
                    $lcDiscussion = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                    
                    $users = $lcDiscussion->getIntervenants();
                    $users->add($user);
                    $usersRestants = $em->getRepository('LCBundle:LcUser')->findNotIn($users);
                    
                    $arrayUsers[] = array();
                    foreach ($usersRestants as $lcu) {
                        $arrayUsers[] = $this->lcUserToArray($lcu);
                    }
                    return new JsonResponse($arrayUsers);
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                } 
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
        
    }

    public function getDiscussionMessagesContactAction(){
     
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $contid = $request->request->get('contid');
                    if($contid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();
                    
                    $userAvec = $em->getRepository('LCBundle:LcUser')->find($contid);
                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    
                    $lcDiscArray = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $userAvec->getId());
                    
                    if(count($lcDiscArray) == 0){
                        return new JsonResponse(array());
                    }else{

                        $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $lcDiscArray
                                [0]);
                        $lcMessages = array();
                        if(count($adml) != 0){                           
                            $lcMessages = $em->getRepository('LCBundle:LcMessage')->getDiscussionAncienMessages($adml[0]);
                        }

                        $arrayMessages[] = array();
                        $cmp = count($lcMessages);
                        for ($i=0; $i < $cmp; $i++) { 
                            $arrayMessages[] = $this->lcMessageToArray($lcMessages[$i], $user->getId());
                        }

                        return new JsonResponse($arrayMessages);                        
                    }
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                } 
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
        
    }
    
    public function getDiscussionMessagesAction(){
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $discid = $request->request->get('discid');
                    if($discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();
                    
                    $lcDiscussion = $em->getRepository('LCBundle:LcDiscussion')->find($discid);

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $lcDiscussion);

                    $dml = null;
                    $lcMessages = array();

                    if(count($adml) != 0){
                        $dml = $adml[0];
                        $lcMessages = $em->getRepository('LCBundle:LcMessage')->getDiscussionAncienMessages($dml);
                    }

                    $arrayMessages[] = array();
                    $cmp = count($lcMessages);
                    for ($i=0; $i < $cmp; $i++) { 
                        $arrayMessages[] = $this->lcMessageToArray($lcMessages[$i], $user->getId());
                    }

                    return new JsonResponse($arrayMessages);
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                } 
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }  
    }

    public function creerNouveauMessageAction(){

        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $contenu = $request->request->get('contenu');
                    $discid = $request->request->get('discid');
                    if($contenu == null || $discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $disc = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                    
                    $message = new LcMessage();
                    $d = new \Datetime();
                    $message->setDate($d);
                    $message->setContenu($contenu);
                    $message->setPosteur($user);
                    $message->setDiscussion($disc);
                    $message->setType("");
                    
                    $em->persist($message);
                    $em->flush();

                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    foreach($disc->getIntervenants() as $u)
                    {
                        if($u->getId() != $user->getId())
                            $pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Un nouveau message reçu du Tchat.', 'post' => $this->lcMessageToArray($message, $u->getId())], 'acme_topic', ['userid'=> $u->getId()]);
                    }
                    
                    if($disc->getCreateur() != null)
                        if($disc->getCreateur()->getId() != $user->getId())$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Un nouveau message reçu du Tchat.', 'post' => $this->lcMessageToArray($message, $disc->getCreateur()->getId())], 'acme_topic', ['userid'=> $disc->getCreateur()->getId()]);
                    
                   
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }

    public function creerNouveauMessageContactAction(){
        
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $contenu = $request->request->get('contenu');
                    $contid = $request->request->get('contid');
                    if($contenu == null || $contid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    $userAvec = $em->getRepository('LCBundle:LcUser')->find($contid);
                    
                    $message = new LcMessage();
                    $d = new \Datetime();
                    $message->setDate($d);
                    $message->setContenu($contenu);
                    $message->setPosteur($user);
                    $message->setType("");
                    
                    $disc = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $userAvec->getId());
                    if(count($disc)>0)$message->setDiscussion($disc[0]);
                    else {
                        $lcd = new LcDiscussion();
                        $lcd->setTitre("");
                        $lcd->setDate($d);
                        $lcd->setSujet("");
                        $lcd->setAdeux($user->getId().",".$userAvec->getId());
                        $lcd->addIntervenant($user);
                        $lcd->addIntervenant($userAvec);
                        $lcd->setCreateur(null);
                        
                        $messageP = new LcMessage();
                        $messageP->setPosteur($user);
                        //$d->sub(new \DateInterval('PT5S'));
                        $messageP->setDate(new \DateTime('2000-01-05 04:50:07'));
                        $messageP->setContenu("Créée le ".$d->format('d/m/Y à H:i:s'));
                        $messageP->setType("");
                   
                        $message->setDiscussion($lcd);  
                        $messageP->setDiscussion($lcd);
                        
                        
                        $ar1 = new DernierMessageLu();
                        $ar1->setUser($user);
                        $ar1->setDiscussion($lcd);
                        $ar1->setMessage($messageP);
                        
                        $ar2 = new DernierMessageLu();
                        $ar2->setUser($userAvec);
                        $ar2->setDiscussion($lcd);
                        $ar2->setMessage($messageP);

                        $em->persist($lcd);
                        $em->persist($ar1);
                        $em->persist($ar2);                        
                        $em->persist($messageP);
                    }
                    
                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    $pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Un nouveau message reçu du Tchat.', 'post' => $this->lcMessageToArray($message, $userAvec->getId())], 'acme_topic', ['userid'=> $userAvec->getId()]);
                   // $pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Un nouveau message reçu du Tchat.', 'post' => $this->lcMessageToArray($message, $user->getId())], 'acme_topic', ['userid'=> $user->getId()]);
                    
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }
    
    public function verificationNouveauxMessagesAction(){
        
        
            try{
                $request = $this->getRequest();
                $oid = $request->request->get('oid');
                if($oid == null){
                    return new JsonResponse($this->setNoParamError());
                }
                
                $em = $this->getDoctrine()->getManager();
                    
                $user = $em->getRepository('LCBundle:LcUser')->findOneByIdoriginal($oid);
                $lesDerniersMessagesLus = $em->getRepository('LCBundle:DernierMessageLu')->findByUser($user);
                $cmpDerniersMessageLus = count($lesDerniersMessagesLus);
                $arrayMessages = array();
                for ($i=0; $i < $cmpDerniersMessageLus; $i++) { 
                    $dml = $lesDerniersMessagesLus[$i];
                    $arTemp = $em->getRepository('LCBundle:LcMessage')->getDiscussionNouveauxMessages($dml);
                    foreach ($arTemp as $value) {
                        $arrayMessages[] = $value;
                    }
                }

                $cmpDerniersMessageLus = count($arrayMessages);
                $mar[] = array();
                $cmp = 0;
                for ($i=0; $i < $cmpDerniersMessageLus; $i++) {
                    $msg = $arrayMessages[$i];
                    if($msg->getPosteur()->getId() != $user->getId()){
                        $cmp++;
                        $mar[] = $msg->getDiscussion()->getId();
                    }
                   // $mar[] = $this->lcMessageToArray($msg, $user->getId());
                }
                
                return new JsonResponse(array('nb' => $cmp, "discids" => $mar ));
                
            }
            catch (\Exception $e){                    
                return new JsonResponse($this->setExceptionError($e));
            } 
        
    }

    public function getNouveauxMessagesAction(){
        
        $user = $this->getRequest()->getSession()->get('lcuser');
        if(is_null($user)){
            return new JsonResponse($this->setNoSessionError());
        }
        else{
            try{

                $em = $this->getDoctrine()->getManager();
                    
                $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                $lesDerniersMessagesLus = $em->getRepository('LCBundle:DernierMessageLu')->findByUser($user);
                $cmpDerniersMessageLus = count($lesDerniersMessagesLus);
                $arrayMessages = array();
                for ($i=0; $i < $cmpDerniersMessageLus; $i++) { 
                    $dml = $lesDerniersMessagesLus[$i];
                    $arTemp = $em->getRepository('LCBundle:LcMessage')->getDiscussionNouveauxMessages($dml);
                    foreach ($arTemp as $value) {
                        $arrayMessages[] = $value;
                    }
                }

                $cmpDerniersMessageLus = count($arrayMessages);
                $mar[] = array();
                for ($i=0; $i < $cmpDerniersMessageLus; $i++) {
                    $msg = $arrayMessages[$i];
                    //if($msg->getPosteur()->getId() != $user->getId())
                        $mar[] = $this->lcMessageToArray($msg, $user->getId());
                }
                
                return new JsonResponse($mar);

                //return new JsonResponse(array('ok' => $cmpDerniersMessageLus));
            }
            catch (\Exception $e){                    
                return new JsonResponse($this->setExceptionError($e));
            } 
        }
    }

    public function marquerLuAction(){

        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $msgid = $request->request->get('msgid');
                    $discid = $request->request->get('discid');
                    if($msgid == null || $discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $disc = $em->getRepository('LCBundle:LcDiscussion')->find($discid);

                    $msg = $em->getRepository('LCBundle:LcMessage')->find($msgid);

                    $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $disc);

                    $dml = null;

                    if(count($adml) != 0) $dml = $adml[0];

                    if($dml == null){
                        $dml = new DernierMessageLu();
                        $dml->setUser($user);
                        $dml->setDiscussion($disc);
                        $dml->setMessage($msg);
                        $em->persist($dml);
                    }
                    else{
                        $dml->setMessage($msg);
                    }

                    $em->flush();

                    return new JsonResponse($this->setSucces());
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }

    }
    
    public function marquerLuContactAction(){

        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $msgid = $request->request->get('msgid');
                    $contid = $request->request->get('contid');
                    if($msgid == null || $contid == null){
                        return new JsonResponse($this->setNoParamError());
                    }

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $disc = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($contid, $user->getId());

                    $msg = $em->getRepository('LCBundle:LcMessage')->find($msgid);

                    $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $disc[0]);

                    $dml = null;

                    if(count($adml) > 0) $dml = $adml[0];

                    if($dml == null){
                        $dml = new DernierMessageLu();
                        $dml->setUser($user);
                        $dml->setDiscussion($disc[0]);
                        $dml->setMessage($msg);
                        $em->persist($dml);
                    }
                    else{
                        $adml[0]->setMessage($msg);
                        $adml[0]->setDiscussion($disc[0]);
                    }

                    $em->flush();

                    return new JsonResponse($this->setSucces());
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }

    }
    
    public  function creerNouveauMessageImageAction(){
        
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $fichier = $request->files->get('file');
                    $discid = $request->request->get('discid');
                    $legende = $request->request->get('legende');
                    
                    if($fichier == null || $discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }
                    
                    if($legende == null) $legende = "";
                    
                    $d = new \DateTime();
                    $filename = $user->getId()."_".$d->format("d_m_Y_H_i_s.").$fichier->getClientOriginalExtension();//nom du fichier
                    $fichier->move(__DIR__."/../../../web/chatimages/", $filename);//deplacer dans ce dossier
                    
                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $disc = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                    
                    $message = new LcMessage();                
                    $message->setDate($d);
                    $message->setContenu($legende);
                    $message->setPosteur($user);
                    $message->setDiscussion($disc);
                    $message->setType($filename);
                    $message->setFile("image");
                    
                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    foreach($disc->getIntervenants() as $u)
                    {
                        if($u->getId() != $user->getId())$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $u->getId())], 'acme_topic', ['userid'=> $u->getId()]);
                    }

                    if($disc->getCreateur() != null)
                        if($disc->getCreateur()->getId() != $user->getId())$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $disc->getCreateur()->getId())], 'acme_topic', ['userid'=> $disc->getCreateur()->getId()]);
                    
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
        
    }
     
    public function creerNouveauMessageImageContactAction(){
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $fichier = $request->files->get('file');
                    $contid = $request->request->get('discid');
                    $legende = $request->request->get('legende');
                    
                    if($fichier == null || $contid == null){
                        return new JsonResponse($this->setNoParamError());
                    }
                    
                    if($legende === null) $legende = "";
                    
                    $d = new \DateTime();
                    $filename = $user->getId()."_".$d->format("d_m_Y_H_i_s.").$fichier->getClientOriginalExtension();//nom du fichier
                    $fichier->move(__DIR__."/../../../web/chatimages/", $filename);//deplacer dans ce dossier

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    $userAvec = $em->getRepository('LCBundle:LcUser')->find($contid);
                    
                    $message = new LcMessage();
                    $d = new \Datetime();
                    $message->setDate($d);
                    $message->setContenu($legende);
                    $message->setPosteur($user);
                    $message->setType($filename);
                    $message->setFile("image");
                    
                    $disc = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $userAvec->getId());
                    if(count($disc)>0)$message->setDiscussion($disc[0]);
                    else {
                        $lcd = new LcDiscussion();
                        $lcd->setTitre("");
                        $lcd->setDate($d);
                        $lcd->setSujet("");
                        $lcd->setAdeux($user->getId().",".$userAvec->getId());
                        $lcd->addIntervenant($user);
                        $lcd->addIntervenant($userAvec);
                        $lcd->setCreateur(null);
                        
                        $messageP = new LcMessage();
                        $messageP->setPosteur($user);
                        //$d->sub(new \DateInterval('PT5S'));
                        $messageP->setDate(new \DateTime('2000-01-05 04:50:07'));
                        $messageP->setContenu("Créée le ".$d->format('d/m/Y à H:i:s'));
                        $messageP->setType("");
                   
                        $message->setDiscussion($lcd);  
                        $messageP->setDiscussion($lcd);
                        
                        
                        $ar1 = new DernierMessageLu();
                        $ar1->setUser($user);
                        $ar1->setDiscussion($lcd);
                        $ar1->setMessage($messageP);
                        
                        $ar2 = new DernierMessageLu();
                        $ar2->setUser($userAvec);
                        $ar2->setDiscussion($lcd);
                        $ar2->setMessage($messageP);

                        $em->persist($lcd);
                        $em->persist($ar1);
                        $em->persist($ar2);                        
                        $em->persist($messageP);
                    }
                    
                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    $pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $userAvec->getId())], 'acme_topic', ['userid'=> $userAvec->getId()]);
                    //$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $user->getId())], 'acme_topic', ['userid'=> $user->getId()]);
                    
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }
    
    public function getNouveauxMessagesDiscussionAction(){
        
        $user = $this->getRequest()->getSession()->get('lcuser');
        if(is_null($user)){
            return new JsonResponse($this->setNoSessionError());
        }
        else{
            try{
                
                $request = $this->getRequest();
                $discid = $request->request->get('discid');                    
                if($discid == null){
                    return new JsonResponse($this->setNoParamError());
                }

                $em = $this->getDoctrine()->getManager();
                $lcDiscussion = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $lcDiscussion);
                
                $dml = null;
                $lcMessages = array();

                if(count($adml) != 0){
                    $dml = $adml[0];
                    $lcMessages = $em->getRepository('LCBundle:LcMessage')->getDiscussionNouveauxMessages($dml);
                }                    

                $cmpDerniersMessageLus = count($lcMessages);
                $mar[] = array();
                for ($i=0; $i < $cmpDerniersMessageLus; $i++) {
                    $msg = $lcMessages[$i];
                        $mar[] = $this->lcMessageToArray($msg, $user->getId());
                }
                
                return new JsonResponse($mar);
            }
            catch (\Exception $e){                    
                return new JsonResponse($this->setExceptionError($e));
            } 
        }
    }
    
    public function getNouveauxMessagesContactAction(){
        
        $user = $this->getRequest()->getSession()->get('lcuser');
        if(is_null($user)){
            return new JsonResponse($this->setNoSessionError());
        }
        else{
            try{
                
                $request = $this->getRequest();
                $contid = $request->request->get('contid');
                if($contid == null){
                    return new JsonResponse($this->setNoParamError());
                }

                $em = $this->getDoctrine()->getManager();
                    
                $userAvec = $em->getRepository('LCBundle:LcUser')->find($contid);
                $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    
                $lcDiscArray = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $userAvec->getId());
                    
                if(count($lcDiscArray) == 0){
                    return new JsonResponse(array());
                }else{

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    $adml = $em->getRepository('LCBundle:DernierMessageLu')->getByUserAndDiscussion($user, $lcDiscArray[0]);
                
                    $dml = null;
                    $lcMessages = array();                                   

                    if(count($adml) != 0){
                        $dml = $adml[0];
                        $lcMessages = $em->getRepository('LCBundle:LcMessage')->getDiscussionNouveauxMessages($dml);
                    }
                    
                    $cmpDerniersMessageLus = count($lcMessages);
                    $mar[] = array();
                    for ($i=0; $i < $cmpDerniersMessageLus; $i++) {
                        $msg = $lcMessages[$i];
                            $mar[] = $this->lcMessageToArray($msg, $user->getId());
                    }
                    
                    return new JsonResponse($mar);
                }
            }
            catch (\Exception $e){                    
                return new JsonResponse($this->setExceptionError($e));
            } 
        }
    }
    
    public  function creerNouveauMessageFichierAction(){
        
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $fichier = $request->files->get('file');
                    $discid = $request->request->get('discid');
                    $legende = $request->request->get('legende');
                    
                    if($fichier == null || $discid == null){
                        return new JsonResponse($this->setNoParamError());
                    }
                    
                    if($legende == null) $legende = "";
                    
                    $d = new \DateTime();
                    $filename = $user->getId()."_".$d->format("d_m_Y_H_i_s.").$fichier->getClientOriginalExtension();//nom du fichier
                    $fichier->move(__DIR__."/../../../web/chatimages/", $filename);//deplacer dans ce dossier
                    
                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());

                    $disc = $em->getRepository('LCBundle:LcDiscussion')->find($discid);
                    
                    $message = new LcMessage();                
                    $message->setDate($d);
                    $message->setContenu($legende);
                    $message->setPosteur($user);
                    $message->setDiscussion($disc);
                    $message->setType($filename);
                    $message->setFile("fichier");
                    
                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    foreach($disc->getIntervenants() as $u)
                    {
                        if($u->getId() != $user->getId())$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $u->getId())], 'acme_topic', ['userid'=> $u->getId()]);
                    }

                    if($disc->getCreateur() != null)
                        if($disc->getCreateur()->getId() != $user->getId())$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $disc->getCreateur()->getId())], 'acme_topic', ['userid'=> $disc->getCreateur()->getId()]);
                    
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
        
    }
     
    public function creerNouveauMessageFichierContactAction(){
        if($this->isPost()){
            $user = $this->getRequest()->getSession()->get('lcuser');
            if(is_null($user)){
                return new JsonResponse($this->setNoSessionError());
            }
            else{
                try{
                    $request = $this->getRequest();
                    $fichier = $request->files->get('file');
                    $contid = $request->request->get('discid');
                    $legende = $request->request->get('legende');
                    
                    if($fichier == null || $contid == null){
                        return new JsonResponse($this->setNoParamError());
                    }
                    
                    if($legende === null) $legende = "";
                    
                    $d = new \DateTime();
                    $filename = $user->getId()."_".$d->format("d_m_Y_H_i_s.").$fichier->getClientOriginalExtension();//nom du fichier
                    $fichier->move(__DIR__."/../../../web/chatimages/", $filename);//deplacer dans ce dossier

                    $em = $this->getDoctrine()->getManager();

                    $user = $em->getRepository('LCBundle:LcUser')->find($user->getId());
                    $userAvec = $em->getRepository('LCBundle:LcUser')->find($contid);
                    
                    $message = new LcMessage();
                    $d = new \Datetime();
                    $message->setDate($d);
                    $message->setContenu($legende);
                    $message->setPosteur($user);
                    $message->setType($filename);
                    $message->setFile("fichier");
                    
                    $disc = $em->getRepository('LCBundle:LcDiscussion')->findDiscussionEntre($user->getId(), $userAvec->getId());
                    if(count($disc)>0)$message->setDiscussion($disc[0]);
                    else {
                        $lcd = new LcDiscussion();
                        $lcd->setTitre("");
                        $lcd->setDate($d);
                        $lcd->setSujet("");
                        $lcd->setAdeux($user->getId().",".$userAvec->getId());
                        $lcd->addIntervenant($user);
                        $lcd->addIntervenant($userAvec);
                        $lcd->setCreateur(null);
                        
                        $messageP = new LcMessage();
                        $messageP->setPosteur($user);
                        //$d->sub(new \DateInterval('PT5S'));
                        $messageP->setDate(new \DateTime('2000-01-05 04:50:07'));
                        $messageP->setContenu("Créée le ".$d->format('d/m/Y à H:i:s'));
                        $messageP->setType("");
                   
                        $message->setDiscussion($lcd);  
                        $messageP->setDiscussion($lcd);
                        
                        
                        $ar1 = new DernierMessageLu();
                        $ar1->setUser($user);
                        $ar1->setDiscussion($lcd);
                        $ar1->setMessage($messageP);
                        
                        $ar2 = new DernierMessageLu();
                        $ar2->setUser($userAvec);
                        $ar2->setDiscussion($lcd);
                        $ar2->setMessage($messageP);

                        $em->persist($lcd);
                        $em->persist($ar1);
                        $em->persist($ar2);                        
                        $em->persist($messageP);
                    }
                    
                    $em->persist($message);
                    $em->flush();
                    
                    //*************************
                    $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                    $pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $userAvec->getId())], 'acme_topic', ['userid'=> $userAvec->getId()]);
                    //$pusher->push(['cmd' => 'lc', 'route' => 'lccnm', 'msg' => 'Une nouvelle image reçue du Tchat.', 'post' => $this->lcMessageToArray($message, $user->getId())], 'acme_topic', ['userid'=> $user->getId()]);
                    
                    //return new JsonResponse($this->setSucces());
                    return new JsonResponse(array('ok' => 'OK', 'msg' => $this->lcMessageToArray($message, $user->getId())));
                }
                catch (\Exception $e){                    
                    return new JsonResponse($this->setExceptionError($e));
                }              
            }
        }
        else{
            return new JsonResponse($this->setNoPostError());
        }
    }
}