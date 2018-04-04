<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CUserBehavior
 *
 * @author Rian Andrian
 */
class CUserBehavior extends CActiveRecordBehavior {
    //put your code here
    public function beforeSave($event) {
        parent::beforeSave($event);
        if($this->Owner->isNewRecord)
        {
            //$this->Owner->password = md5($this->Owner->password);
            $isinya=$this->generateSalt();
            $dua=$this->Owner->password;
            $this->Owner->enkrip=$isinya;
            $this->Owner->password=$this->hashPassword($dua,$isinya);
        }
    }
    
    public function hashPassword($password,$salt)
    {
        return md5($salt.$password);
    }
    protected function generateSalt()
    {
        return uniqid('',true);
    }
}

?>
