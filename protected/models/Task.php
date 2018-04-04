<?php

/**
 * This is the model class for table "task".
 *
 * The followings are the available columns in table 'task':
 * @property integer $id
 * @property integer $idLevel6
 * @property integer $idPic6
 * @property integer $idLevel5
 * @property integer $idPic5
 * @property integer $idItem
 * @property string $bStart
 * @property string $bFinish
 * @property string $status
 * @property integer $progres
 */
class Task extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'task';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLevel6', 'required'),
			array('idLevel6, idPic6, idLevel5, idPic5, idItem, progres', 'numerical', 'integerOnly'=>true),
			array('status,attachment', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idLevel6, idPic6, idLevel5, idPic5, idItem, bStart, bFinish, status, progres, attachment', 'safe', 'on'=>'search'),
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
			'lvl5' => array(self::BELONGS_TO, 'Level5', 'idLevel5'),
			'lvl6' => array(self::BELONGS_TO, 'Level6', 'idLevel6'),
			'item' => array(self::BELONGS_TO, 'Level4', 'idItem'),
			'pic6' => array(self::BELONGS_TO, 'User', 'idPic6'),
			'pic5' => array(self::BELONGS_TO, 'User', 'idPic5'),
			'statusa' => array(self::BELONGS_TO, 'Status', 'status'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idLevel6' => 'Id Level6',
			'idPic6' => 'Id Pic6',
			'idLevel5' => 'Id Level5',
			'idPic5' => 'Id Pic5',
			'idItem' => 'Id Item',
			'bStart' => 'B Start',
			'bFinish' => 'B Finish',
			'status' => 'Status',
			'progres' => 'Progres',
			'attachment' =>'Attachment',
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
	public function search($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idLevel6',$this->idLevel6);
		$criteria->compare('idPic6',$this->idPic6);
		$criteria->compare('idLevel5',$this->idLevel5);
		$criteria->compare('idPic5',$this->idPic5);

		$criteria->compare('bStart',$this->bStart,true);
		$criteria->compare('bFinish',$this->bFinish,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('progres',$this->progres);
		$criteria->compare('attachment',$this->attachment);
		$criteria->addCondition('idPic6="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	public function uncomplete($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idItem',$this->idItem);
		$criteria->addCondition('idPic6="'.$idp.'"' );
		$criteria->addCondition('status < 5' );

		$criteria->order = 'idLevel6 ASC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function complete($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;


		$criteria->addCondition('idPic6="'.$idp.'"' );
		$criteria->addCondition('status="5"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function uncomplete5($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idItem',$this->idItem);
		$criteria->addCondition('idPic5="'.$idp.'"' );
		$criteria->addCondition('status < 5' );

		$criteria->order = 'idLevel6 ASC';
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function complete5($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;


		$criteria->addCondition('idPic5="'.$idp.'"' );
		$criteria->addCondition('status="5"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	


	public function searchi($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idLevel6',$this->idLevel6);
		$criteria->compare('idPic6',$this->idPic6);
		$criteria->compare('idLevel5',$this->idLevel5);
		$criteria->compare('idPic5',$this->idPic5);
		$criteria->compare('idItem',$this->idItem);
		$criteria->compare('bStart',$this->bStart,true);
		$criteria->compare('bFinish',$this->bFinish,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('progres',$this->progres);
		$criteria->compare('attachment',$this->attachment);
		$criteria->addCondition('idPic5="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Task the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
