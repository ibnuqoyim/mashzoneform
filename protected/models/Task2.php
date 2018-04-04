<?php

/**
 * This is the model class for table "task".
 *
 * The followings are the available columns in table 'task':
 * @property integer $id
 * @property integer $idMto
 * @property integer $idItem
 * @property string $bStart
 * @property string $bFinish
 * @property integer $pic
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
			array('id, idMto, idItem, bStart, bFinish, idPic', 'required'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idMto, idItem, bStart, bFinish, idPic, p1, p2, p3, p4', 'safe', 'on'=>'search'),
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
					'mto' => array(self::BELONGS_TO, 'Mto', 'idMto'),
                    'item' => array(self::BELONGS_TO, 'Items', 'idItem'),
                    'pic' => array(self::BELONGS_TO, 'Pic', 'idPic'),
					
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idMto' => 'MTO Type',
			'idItem' => 'Item',
			'bStart' => 'Baseline Start',
			'bFinish' => 'Baseline Finish',
			'idPic' => 'PIC',
			'p1' => 'Start',
			'p2' => 'Proses 1',
			'p3' => 'Proses 2',
			'p4' => 'Finish',
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
		$criteria->compare('idMto',$this->idMto);
		$criteria->compare('idItem',$this->idItem);
		$criteria->compare('bStart',$this->bStart,true);
		$criteria->compare('bFinish',$this->bFinish,true);
		$criteria->compare('idPic',$this->idPic);
		$criteria->compare('p1',$this->p1);
		$criteria->compare('p2',$this->p2);
		$criteria->compare('p3',$this->p3);
		$criteria->compare('p4',$this->p4);
		//$criteria->addCondition('idPic="'. Yii::app()->user->id.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searcho()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idMto',$this->idMto);
		$criteria->compare('idItem',$this->idItem);
		$criteria->compare('bStart',$this->bStart,true);
		$criteria->compare('bFinish',$this->bFinish,true);
		$criteria->compare('idPic',$this->idPic);
		$criteria->compare('p1',$this->p1);
		$criteria->compare('p2',$this->p2);
		$criteria->compare('p3',$this->p3);
		$criteria->compare('p4',$this->p4);
		$criteria->addCondition('idPic="'. Yii::app()->user->id.'"' );
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
