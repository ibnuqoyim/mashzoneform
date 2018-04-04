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
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'level6-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo '<b>Nama Proses</b>'; ?>
		<?php echo $form->textField($model,'namaLvl6',array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'namaLvl6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'progres'); ?>
		<?php echo $form->textField($model,'progres',array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'progres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class'=>'form-control','readonly'=>true)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons" onclick="reject_value()">
	<?php echo CHtml::tag( 'input',array('type'=>'text','id'=>'id','name'=>'id','value'=>'0'.$model->idBisnis));?>
	<?php echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'progres','name'=>'progres','value'=>$model->progres)); ?>
	<?php echo CHtml::tag( 'input',array('type'=>'text','id'=>'name','name'=>'name','value'=>$model->lvl5->lvl4->idBisnis)); ?>
	
		<?php  echo CHtml::submitButton($model->isNewRecord ? 'Reject' : 'Back'); ?> <input type="button" onclick="reject_value()" value="Update" /> -->
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form --></section>