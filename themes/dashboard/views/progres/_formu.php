<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/fungsi.js" ></script>
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

	

	<?php echo $form->errorSummary($model); ?>
	<div class="col-lg-12 top20">
	<div class="col-lg-6">
	<div class="row">
		<?php echo $form->labelEx($model,'Id'); ?>
		<?php echo $form->hiddenField($model,'Id',array('readonly'=>true)); ?>
		<input type="text" value="<?php echo $model->task->mto->nameMto ?>" class='form-control' readonly >
		<?php echo $form->error($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdTask'); ?>
		<input type="text" value="<?php echo $model->task->item->namaItem ?>" class='form-control' readonly >
		<?php echo $form->hiddenField($model,'IdTask',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'IdTask'); ?>
	</div>
	</div>
	
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Tahap</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $form->labelEx($model,'pStart'); ?></td>
        <td><?php 
                                        echo $form->dropDownList(
                                            $model,'pFinish',
                                            array(
                                                    '0' => 'Not Yet',
                                                    '1' => 'Done',
                                                ),
                                            array('class'=>'form-control')
                                        ); 
                                    ?></td>
        
      </tr>
      <tr>
        <td><?php echo $form->labelEx($model,'pTahap1'); ?></td>
        <td><?php 
                                        echo $form->dropDownList(
                                            $model,'pTahap1',
                                            array(
                                                    '0' => 'Not Yet',
                                                    '1' => 'Done',
                                                ),
                                            array('class'=>'form-control')
                                        ); 
                                    ?></td>
        
      </tr>
      <tr>
        <td><?php echo $form->labelEx($model,'pTahap2'); ?></td>
        <td><?php 
                                        echo $form->dropDownList(
                                            $model,'pTahap2',
                                            array(
                                                    '0' => 'Not Yet',
                                                    '1' => 'Done',
                                                ),
                                            array('class'=>'form-control')
                                        ); 
                                    ?></td>
        
      </tr>
	  <tr>
        <td><?php echo $form->labelEx($model,'pFinish'); ?></td>
        <td><?php 
                                        echo $form->dropDownList(
                                            $model,'pFinish',
                                            array(
                                                    '0' => 'Not Yet',
                                                    '1' => 'Done',
                                                ),
                                            array('class'=>'form-control')
                                        ); 
                                    ?></td>
        
      </tr>
    </tbody>
  </table>
	
</div></div>
	
	
	
	<div align="center">
					<a href="/mashzoneform/index.php/dashboard">
                        <div  class="btn btn-warning" role="danger" >
                            <!-- <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> -->
                            <span class="center"> Back</span>
                            <div class="clear"></div>
                        </div>
                        </a>
						<div class="button" onclick="update_value()" value="Update">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Send' , array('class' => 'btn btn-success')); ?>
	</div> </div>

<?php $this->endWidget(); ?>
<div id="loader"></div>
	<p id="re"></p>
</div><!-- form -->


	