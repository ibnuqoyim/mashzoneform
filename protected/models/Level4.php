<?php

/**
 * This is the model class for table "level5".
 *
 * The followings are the available columns in table 'level5':
 * @property string $id
 * @property string $namaLvl4
 * @property string $idBisnis
 * @property string $idLvl3
 * @property integer $idPic
 * @property integer $progres
 * @property integer $status
 */
class Level4 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'level4';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, namaLvl4, idBisnis, idLvl3, idPic, progres, status', 'required'),
			array('idPic, progres, status', 'numerical', 'integerOnly'=>true),
			array('id, namaLvl4, idBisnis, idLvl3', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, namaLvl4, idBisnis, idLvl3, idPic, progres, status', 'safe', 'on'=>'search'),
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
		    'lvl3' => array(self::BELONGS_TO, 'Level3', 'idLvl3'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'namaLvl4' => 'Produk',
			'idBisnis' => 'Id Bisnis',
			'idLvl3' => 'Id Lvl3',
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
		$criteria->compare('namaLvl4',$this->namaLvl4,true);
		$criteria->compare('idBisnis',$this->idBisnis,true);
		$criteria->compare('idLvl3',$this->idLvl3,true);
		$criteria->compare('idPic',$this->idPic);
		$criteria->compare('progres',$this->progres);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searcha($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;


		$criteria->addCondition('idPic="'.$idp.'"' );
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Level5 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
