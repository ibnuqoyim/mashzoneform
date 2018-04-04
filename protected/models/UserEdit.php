<?php

/**
 * This is the model class for table "tb_user".
 *
 * The followings are the available columns in table 'tb_user':
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $enkrip
 */
class UserEdit extends CFormModel
{
	/**
	 * @return string the associated database table name
	 */
        public $password;
        public $enkrip;
//        public $password2;

        /**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('password, enkrip', 'length'),
//                        array('password2', 'length', 'max'=>50, 'min'=>5),
                        //array('password', 'compare','compareAttribute'=>'password2'),
		);
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'password' => 'Password',
			'enkrip' => 'Enkrip',
//                        'password2' => 'Password2',
		);
	}
}