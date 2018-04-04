<?php

/**
 * This is the model class for table "progres".
 *
 * The followings are the available columns in table 'progres':
 * @property integer $Id
 * @property integer $IdTask
 * @property integer $pStart
 * @property integer $pTahap1
 * @property integer $pTahap2
 * @property integer $pFinish
 */
class Progres extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'progres';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, IdTask, pStart, pTahap1, pTahap2, pFinish', 'required'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, IdTask, pStart, pTahap1, pTahap2, pFinish', 'safe', 'on'=>'search'),
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
		'task' => array(self::BELONGS_TO, 'Task', 'IdTask'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'IdTask' => 'Id Task',
			'pStart' => 'Start',
			'pTahap1' => 'Proses Tahap 1',
			'pTahap2' => 'Proses Tahap 2',
			'pFinish' => 'Finish',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('IdTask',$this->IdTask);
		$criteria->compare('pStart',$this->pStart);
		$criteria->compare('pTahap1',$this->pTahap1);
		$criteria->compare('pTahap2',$this->pTahap2);
		$criteria->compare('pFinish',$this->pFinish);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searcho()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('IdTask',$this->IdTask);
		$criteria->compare('pStart',$this->pStart);
		$criteria->compare('pTahap1',$this->pTahap1);
		$criteria->compare('pTahap2',$this->pTahap2);
		$criteria->compare('pFinish',$this->pFinish);
		$criteria->addCondition($this->task->pic->id == Yii::app()->user->id );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Progres the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
