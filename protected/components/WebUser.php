<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 
  // Store model to not repeat query.
  private $_model;
 
  // Return first name.
  // access it by Yii::app()->user->first_name
//  function getFirst_Name(){
//    $user = $this->loadUser(Yii::app()->user->id);
//    return $user->username;
//  }
 
  // This is a function that checks the field 'role'
  // in the User model to be equal to 1, that means it's admin
  // access it by Yii::app()->user->isAdmin()
    function isAdmin(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Admin';
        return false;
    }
    
    function isKepalaUptAsrama(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Kepala UPT Asrama';
        return false;
    }
    
    function isAdministrator(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Administrator';
        return false;
    }
    
    function isOperatorLapangan(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Operator Lapangan';
        return false;
    }
    
    function isManager(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Manager';
        return false;
    }
    
    function isKasiSaranaPrasarana(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Kasi Sarana dan Prasarana';
        return false;
    }
    
    function isSekretariat(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Sekretariat';
        return false;
    }
    
    function isKoordinator(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Koordinator';
        return false;
    }
    
    function isTutor(){
        $user = $this->loadUser(Yii::app()->user->id);
        if ($user)
           return $user->role=='Tutor';
        return false;
    }
 
  // Load user model.
  protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null)
                $this->_model= User::model()->findByPk($id);
        }
        return $this->_model;
    }
}
?>