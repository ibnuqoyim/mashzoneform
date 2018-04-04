<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/fungsi.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<style>
        table, th, td 
        {
            margin:10px 0;
            border:solid 1px #333;
            padding:2px 4px;
            font:15px Verdana;
        }
        th {
            font-weight:bold;
        }
		
#loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  visibility:hidden;
}
 
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}
 
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
		
    </style>
<?php
/* @var $this ProgresController */
/* @var $model Progres */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'progres-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'Id'); ?>
		<?php echo $form->textField($model,'Id',array('readonly'=>true,'value'=>$_GET['id'])); ?>
		<?php echo $form->error($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdTask'); ?>
		<?php echo $form->textField($model,'IdTask',array('readonly'=>true,'value'=>$_GET['id'])); ?>
		<?php echo $form->error($model,'IdTask'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pStart'); ?>
		<?php echo $form->textField($model,'pStart', array('readonly'=>true,'value'=> '0')); ?>
                                    
		<?php echo $form->error($model,'pStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pTahap1'); ?>
		<?php echo $form->textField($model,'pTahap1',array('readonly'=>true,'value'=> 0)); ?>
		<?php echo $form->error($model,'pTahap1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pTahap2'); ?>
		<?php echo $form->textField($model,'pTahap2',array('readonly'=>true,'value'=> 0)); ?>
		<?php echo $form->error($model,'pTahap2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pFinish'); ?>
		<?php echo $form->textField($model,'pFinish',array('readonly'=>true,'value'=> 0)); ?>
		<?php echo $form->error($model,'pFinish'); ?>
	</div>

	<div class="row buttons" onclick="update_value()" value="Update">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	<input type="button" onclick="update_value()" value="Update" />
	

<?php $this->endWidget(); ?>
<div id="loader"></div>
	<p id="re"></p>
</div><!-- form -->


	