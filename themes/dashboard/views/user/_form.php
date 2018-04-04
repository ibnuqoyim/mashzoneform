<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    <div class="col-lg-12">
        <p class="note">Fields with <span class="required">*</span> are requireds.</p>
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <?php echo $form->labelEx($model,'nama'); ?>
            <?php echo $form->textField($model,'nama',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'nama'); ?>
        </div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'alamat'); ?>
            <?php echo $form->textField($model,'alamat',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'alamat'); ?>
        </div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->textField($model,'email',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>

	<div class="form-group">
            <?php echo $form->labelEx($model,'telp'); ?>
            <?php echo $form->textField($model,'telp',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'telp'); ?>
        </div>
    </div>

    <div class="col-lg-6">
	<div class="form-group">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>

	<div class="form-group">
            <?php echo $form->labelEx($model->isNewRecord ? $model : $modeledit,'password'); ?>
            <?php echo $form->passwordField($model->isNewRecord ? $model : $modeledit,'password',array('class'=>'form-control')); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>

        <div class="form-group">
            <?php //echo $form->labelEx($model,'password2'); ?>
            <?php //echo $form->passwordField($model,'password2',array('class'=>'form-control')); ?>
            <?php //echo $form->error($model,'password2'); ?>
        </div>

        <?php
            if(Yii::app()->user->role == 'Admin'){
        ?>

	<div class="form-group">
            <?php echo $form->labelEx($model,'role'); ?>
            <?php
                echo $form->dropDownList(
                    $model,'role',
                    array(
                            'Admin' => 'Admin',
                            'Administrator' => 'Administrator',
                            'Operator Lapangan'=>'Operator Lapangan',
                            'Manager'=>'Manager',
                        ),
                    array('class'=>'form-control')
                );
            ?>
            <?php echo $form->error($model,'role'); ?>
        </div>


        <?php
            }else{
        ?>
        <div class="form-group">
            <?php echo $form->labelEx($model,'role'); ?>
            <?php echo $form->textField($model,'role',array('class'=>'form-control', 'readonly'=>true),array('size'=>60,'maxlength'=>75)); ?>
            <?php echo $form->error($model,'role'); ?>
        </div>

        
        <?php
            }
        ?>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-lg btn-primary right')); ?>
    </div>

<?php $this->endWidget(); ?>
