<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentityPenghuni extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
        private $_id;
        private $nomorIdentitas;
	public function authenticate()
	{
//            $user= Penghuni::model()->find('LOWER(nomorIdentitas)=?',array(strtolower($this->nomorIdentitas)));
            $user= Penghuni::model()->findByAttributes(array('nomorIdentitas'=>$this->username));
            if($user===null)
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            else if(!$user->validatePassword($this->password))
                $this->errorCode=self::ERROR_PASSWORD_INVALID; 
            else
            {
                $this->_id=$user->id;      
                $this->nomorIdentitas=$user->nomorIdentitas;
                $this->setState('nama', $user->nama);
                $this->errorCode=self::ERROR_NONE;
            }
            return $this->errorCode==self::ERROR_NONE;
	}
        
        public function getId()
        {
            return $this->_id;
        }
        
}