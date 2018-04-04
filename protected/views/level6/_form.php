<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function update_value(){

var id1=	$("#id").val();
var name= $("#name").val();
	var progres= $("#progres").val();



    var url = script_url+"?callback=&progres="+progres+"&name="+name+"&id="+id1+"&action=update";


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
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
	<div class="col-lg-6" >
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'idBisnis',array('class'=>'form-control','readonly'=>true)); ?>
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

	<div class="row buttons" onclick="update_value()">
	<?php echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'id','name'=>'id','value'=>'0'.$model->idBisnis));?>
	<?php echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'progres','name'=>'progres','value'=>$model->progres)); ?>
	<?php echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->lvl5->lvl4->idBisnis)); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Back'); ?> <input type="button" onclick="update_value()" value="Update" />
	</div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form --></section>
