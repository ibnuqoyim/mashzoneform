<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function reject_value(){

var id1=	$("#id").val();
	var name= $("#name").val();
	var progres= $("#progres").val();


    var url = script_url+"?callback=&progres="+progres+"&name="+name+"&id="+id1+"&action=reject";


    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });


  }






</script>
<section>

<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

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



	<div class="row">

		<?php echo $form->hiddenField($dr,'idDocTask',array('class'=>'form-control','value'=>$model->id)); ?>

	</div>


	<div class="row">
		<?php echo $form->labelEx($dr,'alasan'); ?>
		<?php echo $form->textArea($dr,'alasan',array('class'=>'form-control'));?>
		<?php echo $form->error($dr,'alasan'); ?>
	</div>

	<div class="form-group">
	            <?php echo $form->labelEx($dr,'lampiran'); ?>
	            <?php echo $form->fileField($dr,'lampiran',array('class'=>'form-control')); ?>
	            <?php echo $form->error($dr,'lampiran'); ?>
		</div>

	<div class="row buttons" onclick="reject_value()">


		<?php  echo CHtml::submitButton($dr->isNewRecord ? 'Reject' : 'Reject'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form --></section>
