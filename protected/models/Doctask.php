<?php

/**
 * This is the model class for table "doctask".
 *
 * The followings are the available columns in table 'doctask':
 * @property integer $id
 * @property integer $idDoc
 * @property integer $forinput4
 * @property string $forinput5
 * @property integer $outfrom
 * @property string $file
 */
class Doctask extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'doctask';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idDoc, forinput4, forinput5, outfrom, file', 'required'),
			array('idDoc, forinput4, outfrom', 'numerical', 'integerOnly'=>true),
			array('forinput5, file', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idDoc, forinput4, forinput5, outfrom, file', 'safe', 'on'=>'search'),
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
			'lvl4' => array(self::BELONGS_TO, 'Level4', 'forinput4'),
			'lvl5' => array(self::BELONGS_TO, 'Level5', 'forinput5'),
			'dok' => array(self::BELONGS_TO, 'Dokumen', 'idDoc'),
			'task' => array(self::BELONGS_TO, 'Task', 'outfrom'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idDoc' => 'Id Doc',
			'forinput4' => 'Forinput4',
			'forinput5' => 'Forinput5',
			'outfrom' => 'Outfrom',
			'file' => 'File',
		);
	}
	public function test($id){
		$model = Doctask::Model()->findByPk($id);
		$model->needA = 2;
		$model->save();
	}
	public function cda($deadline){
		if($deadline != "0000-00-00 00:00:00.000000"){
	echo '
	<script>

	var countDownDate = new Date("Apr 2, 2018 21:50:25").getTime();


	var x = setInterval(function() {


	  var now = new Date().getTime();


	  var distance = countDownDate - now;


	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


	  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	  + minutes + "m " + seconds + "s ";


	  if (distance < 0) {

	    clearInterval(x);
	    document.getElementById("demo").innerHTML = "'.$this->test($this->id).'";
	  }
	}, 1000);
	</script>
	<p id="demo"></p>
	' ; }


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
	public function search($idItem,$idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idDoc',$this->idDoc);
		$criteria->compare('forinput4',$this->forinput4);
		$criteria->compare('forinput5',$this->forinput5,true);
		$criteria->compare('outfrom',$this->outfrom);
		$criteria->compare('file',$this->file,true);
		$criteria->addCondition('forinput5 <="'.$idp.'"' );
		$criteria->addCondition('untilinput5 >="'.$idp.'"' );
		$criteria->addCondition('forinput4 ="'.$idItem.'"' );



		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                        'pageSize'=>50,
                )
		));
	}

	public function searcho($idp)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idDoc',$this->idDoc);
		$criteria->compare('forinput4',$this->forinput4);
		$criteria->compare('forinput5',$this->forinput5,true);
		$criteria->compare('outfrom',$this->outfrom);
		$criteria->compare('file',$this->file,true);
		$criteria->addCondition('outfrom ="'.$idp.'"' );


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                        'pageSize'=>50,
                )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Doctask the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
