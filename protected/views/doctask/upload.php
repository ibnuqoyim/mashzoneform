<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function updoc_value(){

    var id1= $("#id").val();
    var name= $("#name").val();
	var progres= $("#progres").val();



    var url = script_url+"?callback=&progres="+progres+"&name="+name+"&id="+id1+"&action=updoc";


    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });


  }
</script>



<header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-cloud-upload gold" aria-hidden="true"></span> Upload File</a>
                    </div>
                    <div class="col-lg-5 right alamat">

                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>


                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
<section class="container">
            <div class="col-lg-12 data">
<h3 align="center">Upload File <?php echo $model->dok->namaDoc; ?> <br> untuk Produk <?php echo $model->lvl4->namaLvl4 ?></h3>
</div>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'doctask-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->lvl4->idBisnis));?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->dok->namaDoc));?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'progres','name'=>'progres','value'=> 1));?>
	<div class="form-group">
	            <?php echo "Silahkan pilih File" ?>
	            <?php echo $form->fileField($model,'file',array('class'=>'form-control')); ?>
	            <?php echo $form->error($model,'file'); ?>
		</div>

	<div class="row buttons" onclick="updoc_value()">
		<?php echo CHtml::submitButton(!($model->isNewRecord) ? 'Upload' : 'Re-Upload'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</section>
