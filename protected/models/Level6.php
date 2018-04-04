<?php

/**
 * This is the model class for table "level6".
 *
 * The followings are the available columns in table 'level6':
 * @property string $id
 * @property string $namaLvl6
 * @property string $idBisnis
 * @property string $idLvl5
 * @property string $idPic
 * @property integer $progres
 * @property string $status
 */
class Level6 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'level6';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, namaLvl6, idBisnis, idLvl5, progres, status', 'required'),
			array('progres', 'numerical', 'integerOnly'=>true),
			array('id, namaLvl6, idBisnis, idLvl5, idPic, status', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, namaLvl6, idBisnis, idLvl5, idPic, progres, status', 'safe', 'on'=>'search'),
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
			'pic' => array(self::BELONGS_TO, 'User', 'idPic'),
			'lvl5' => array(self::BELONGS_TO, 'Level5', 'idLvl5'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'namaLvl6' => 'Nama Level 6',
			'idBisnis' => 'Id Bisnis',
			'idLvl5' => 'Id Lvl5',
			'idPic' => 'Id Pic',
			'progres' => 'Progres',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('namaLvl6',$this->namaLvl6,true);
		$criteria->compare('idBisnis',$this->idBisnis,true);
		$criteria->compare('idLvl5',$this->idLvl5,true);
		$criteria->compare('idPic',$this->idPic,true);
		$criteria->compare('progres',$this->progres);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchi($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('id',$this->id,true);
		//$criteria->compare('namaLvl6',$this->namaLvl6,true);
		//$criteria->compare('idBisnis',$this->idBisnis,true);
		//$criteria->compare('idLvl5',$this->idLvl5,true);
		//$criteria->compare('idPic',$this->idPic,true);
		//$criteria->compare('progres',$this->progres);
		//$criteria->compare('status',$this->status,true);
		$criteria->addCondition('idPic="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		)); }

		public function searcha($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		//$criteria->compare('id',$this->id,true);
		//$criteria->compare('namaLvl6',$this->namaLvl6,true);
		//$criteria->compare('idBisnis',$this->idBisnis,true);
		//$criteria->compare('idLvl5',$this->idLvl5,true);
		//$criteria->compare('idPic',$this->idPic,true);
		//$criteria->compare('progres',$this->progres);
		//$criteria->compare('status',$this->status,true);
		$criteria->addCondition('idLvl5="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		)); }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Level6 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
