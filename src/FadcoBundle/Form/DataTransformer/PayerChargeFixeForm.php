<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GSPBundle\Form\DataTransformer;

/**
 * Description of PayerChargeFixeForm
 *
 * @author crrs
 */
class PayerChargeFixeForm {
    private  $preuve;
    private  $mode;
    
    function getPreuve() {
        return $this->preuve;
    }

    function getMode() {
        return $this->mode;
    }

    function setPreuve($preuve) {
        $this->preuve = $preuve;
    }

    function setMode($mode) {
        $this->mode = $mode;
    }


}
