<?php
namespace FadcoBundle\Controller;

use Ddeboer\Imap\Exception\AuthenticationFailedException;
use Ddeboer\Imap\Server;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use FadcoBundle\Entity\MailsEnvoyes;

class MailsEnvoyesController extends BaseController
{

    /***
     *  Action d'authentification des utilisateurs
     */
    public function authAction(Request $request)
    {
        /**
         * Afficher directement le mail list de l'utilisateur s'il est déjà enregistré dans la base
         * de données. Sinon, l'enregistré d'abord.
         */
        $em = $this->getDoctrine()->getManager();
        if ($this->getRequest()->getMethod() == 'POST') {
            $form = $request->get("box_mails_auth");
            $json = new JsonResponse();
            $res = array(
                'status' => "success",
                'message' => "Connexion réussie"
            );

            $email = $form['email'];
            $password = $form['password'];

            /**
             *  Test de validité des renseignements envoyés par formulaire
             *  email doit être terminé par '@globalserviceplus.com'
             */
            if (!preg_match("#.*@fadcoplus.com$#", $email)) {
//                $res['status'] = 'danger';
//                $res['message'] = "L'adresse mail entré, n'est pas un mail professionnel de Global Service Plus ou est invalide";
//                return $json->setData($res);
                /**
                 * Ajouter la suite pour former la nouvelle adresse valide
                 */
                $email = $email . "@fadcoplus.com";
            }

            /** On tente la connexion pour voir si les paramètres sont corrects
             * **/
            $server = new Server($this->getParameter('mailer_host'));

            try{
                // $connection is instance of \Ddeboer\Imap\Connection
                $connection = $server->authenticate($email, $password);
            }catch (AuthenticationFailedException $e){
                $res['status'] = 'danger';
                $res['message'] = "Impossible de se connecter. Veillez vérifiez vos paramètres de connexion et s'assurez-vous que vous avez accès à internet";
                return $json->setData($res);
            }


            /**
             * Si la variable de session n'existe pas, on la crée en mettant en session
             *  le mot de passe et l'email de l'utilisateur
             **/
            // récupérer la session
            $userMail = $this->get('session')->get('userMail');
            $userPassword = $this->get('session')->get('userPassword');

            if (!isset($userMail) or !isset($userPassword)) {
                $this->get('session')->set('userMail', $email);
                $this->get('session')->set('userPassword', $password);
            }

            /***
             * A la fin, on fait le retour du tableau JSON
             */
            return $json->setData($res);
        }
    }

    /**
     * Récupère tous les mails et les affiches
     *
     */
    public function indexAction()
    {
        /**
         * Toujours vérifier si la session est disponible
         */
        if ($this->hasMailSession()) {
            return $this->render('@Fadco/MailsEnvoyes/index.html.twig');
        } else {
            return $this->redirect($this->generateUrl('fadco_home'));
        }

    }

    public function newAction()
    {
        /**
         * Toujours vérifier si la session est disponible
         */
        if ($this->hasMailSession()) {
            return $this->render('@Fadco/MailsEnvoyes/index.html.twig');
        } else {
            return $this->redirect($this->generateUrl('fadco_home'));
        }
    }

    public function deconnexionAction()
    {
        $this->get('session')->remove('userMail');
        $this->get('session')->remove('userPassword');
        return $this->redirect($this->generateUrl('fadco_home'));
    }
    
    public function envoimailsAction(Request $request)
    {
        
     if($request->getMethod()=='POST'){ 
         
         
        $mailsenvoyes= new MailsEnvoyes();
         $date = new \DateTime(); 
         
        $mailsenvoyes->setObjet($_POST['subject']);
        
        $expediteur= $this->get('session')->get('userMail');
    
        $mailsenvoyes->setContenuHTML($_POST['body']);
        $mailsenvoyes->setDestinataire($_POST['to']);
        $mailsenvoyes->setDate($date);
        $mailsenvoyes->setFlag('INBOX');
        $mailsenvoyes->setState('1');
        $mailsenvoyes->setMailFrom($expediteur);
        $mailsenvoyes->setUserEmail($expediteur);
        
        //upload du fichier 
        
        if(isset($_FILES['piece']))
        { 
            $dossier = 'C:/Mails/';
            //$dossier='home/Fichiers';
            $fichier=$_FILES['piece']['name'];
            //echo $fichier;
            if(move_uploaded_file($_FILES['piece']['tmp_name'], $dossier.$fichier )) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                $mailsenvoyes->setFichier($dossier.$fichier);
            }
        }

        if(($_FILES['piece']!=null)){   
            //pieces jointes 
            $attachement = "------\n"; 
            $attachement .= "Content-Type: application/pdf; name=\"$dossier.$fichier\"\n"; 
            $attachement .= "Content-Transfer-Encoding: base64\n"; 
            $attachement .= "Content-Disposition: attachment; filename=\"$dossier.$fichier\"\n\n";

            $fichierrecupere   = fopen($dossier.$fichier, "r");   //on ouvre le fichier en lecture seule.

            $attachement = fread($fichierrecupere , filesize($dossier.$fichier)); //on lit l'ensemble du fichier avec la fonction fread.

            fclose($fichierrecupere); //on ferme le fichier.
            $attachement = chunk_split(base64_encode($attachement));
            $attachement .= "\n\n\n------\n";
                
         }
        
        $headers = "From: \"FADCO+";
        $headers .=  "Reply-to: <";
        $headers .= $expediteur;
        $headers .=$_POST['subject'];
        $headers .= "Content-Type: multipart/mixed; charset=\"iso-8859-1\"";
        
        $contenu =$_POST['body'];
        $contenu .="Content-Type: multipart/mixed; charset=\"ISO-8859-1\"";
        
        $em=$this->getDoctrine()->getManager();
        $em->persist($mailsenvoyes);
        $em->flush();
            
        if( mail($_POST['to'],$_POST['subject'],$contenu,$headers)){
        $em->persist($mailsenvoyes);
        $em->flush();
        
        }
    
        return $this->redirect($this->generateUrl('box_mails_compose'));
     }
    }

    public function sessionStorageAction(){
        $json = new JsonResponse();
        $res = array(
            'status' => $this->hasMailSession(),
        );
        return $json->setData($res);
    }

}
