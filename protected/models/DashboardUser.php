<?php

/**
 * This is the model class for table "dashboard_user".
 *
 * The followings are the available columns in table 'dashboard_user':
 * @property integer $id
 * @property string $nama
 * @property string $instansi
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $enkrip
 * @property string $role
 */
class DashboardUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $password2;
        public function tableName()
	{
		return 'dashboard_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, instansi, email, username, role', 'required'),
                        array('password, password2', 'required', 'on' => 'create'),
                        array('password', 'compare','compareAttribute'=>'password2','on' => 'create'),
			array('nama, instansi, email, username, password', 'length', 'max'=>100),
			array('enkrip', 'length', 'max'=>50),
			array('role', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, instansi, email, username, password, enkrip, role', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'instansi' => 'Instansi',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
                        'password2' => 'Password Verification',
			'enkrip' => 'Enkrip',
			'role' => 'Role',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('instansi',$this->instansi,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('enkrip',$this->enkrip,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DashboardUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function validatePassword($password)
        {
            return $this->hashPassword($password,$this->enkrip)===$this->password;
        }
        
        public function hashPassword($password,$salt)
        {
            return md5($salt.$password);
        }
        
//        public function beforeSave()
//        {
//            $isinya=$this->generateSalt();
//            $dua=$this->password;
//            $this->enkrip=$isinya;
//            $this->password=$this->hashPassword($dua,$isinya);
//            return true;
//        }
        protected function generateSalt()
        {
            return uniqid('',true);
        }
}
