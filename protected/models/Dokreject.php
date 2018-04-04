<?php

/**
 * This is the model class for table "dokreject".
 *
 * The followings are the available columns in table 'dokreject':
 * @property integer $id
 * @property integer $idDocTask
 * @property string $alasan
 * @property string $lampiran
 */
class Dokreject extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dokreject';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idDocTask, alasan, lampiran', 'required'),
			array('id, idDocTask', 'numerical', 'integerOnly'=>true),
			array('lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idDocTask, alasan, lampiran', 'safe', 'on'=>'search'),
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
			'dok' => array(self::BELONGS_TO, 'Doctask', 'idDocTask'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idDocTask' => 'Id Doc Task',
			'alasan' => 'Alasan',
			'lampiran' => 'Lampiran',
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
		$criteria->compare('idDocTask',$this->idDocTask);
		$criteria->compare('alasan',$this->alasan,true);
		$criteria->compare('lampiran',$this->lampiran,true);
        $criteria->addCondition('idDocTask="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dokreject the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
