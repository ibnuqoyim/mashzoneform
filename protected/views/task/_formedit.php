<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>

  var script_url = "https://script.google.com/macros/s/AKfycbyOx5IlBBG06B-EaGTb6K4HeGVASYzLtoq9SYIXvZ6tg8gNDrY/exec";

 function update_value(){

    var id1=	$("#id").val();
    var name= $("#name").val();
	var progres= $("#progres").val();
    var link= $("#link").val();


    var url = script_url+"?callback=&progres="+progres+"&link="+link+"&name="+name+"&id="+id1+"&action=update";


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

<?php


$form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  'action'=>Yii::app()->createUrl('task/simpan/'.$_GET['id']),
  'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>



	<?php


  echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo "Level 4 - Produk"; ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->item->namaLvl4));?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'name','name'=>'name','value'=>$model->item->idBisnis));?>
		<?php echo $form->error($model,'idItem'); ?>
	</div>


	<!-- <div class="row">
		<?php echo $form->labelEx($model,'idLevel5'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->lvl5->namaLvl5));?>
		<?php echo $form->error($model,'idLevel5'); ?>
	</div> -->
	<div class="row">
		<?php echo "Proses Level 6"; ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','value'=>$model->lvl6->namaLvl6));?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->lvl6->idBisnis));?>
		<?php echo $form->error($model,'idLevel6'); ?>
	</div>
	<!--  <div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'text','id'=>'status','name'=>'status','value'=>$model->status));?>
		<?php echo $form->error($model,'status'); ?>
	</div> -->

  <?php $link = 'mashzone.iclov.com/attachment/'.$model->attachment ?>
<?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'link','name'=>'link','value'=>$link));?>

<div class="row">
  <?php echo $form->labelEx($model,'progres'); ?>
  <?php echo CHtml::tag( 'input',array('class'=>'form-control','readonly'=>true, 'type'=>'hidden','id'=>'progres','name'=>'progres','value'=>$model->progres));?>
  <?php echo $form->error($model,'progres'); ?>
</div>
<br>
<div class="row buttons" onclick="update_value()">
  <?php echo CHtml::submitButton(!($model->isNewRecord) ? 'Save' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

  <br>
  <div class="col-lg-12">
    <div class="col-lg-6">
      <div class="panel panel-default">
        <?php $dokin = new Doctask('search'); ?>
        <div class="panel-heading">Dokumen Input</div>
        <div class="panel-body">

        <?php
        $path = yii::app()->request->baseUrl.'/attachment';
        echo "";
            $form=$this->beginWidget('CActiveForm', array(
                'id'=>'task-form',
                //'action'=>array('penghuni/remove'),
                'enableAjaxValidation'=>false,
            ));
        ?>
        <?php

                $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'task-grid',
                    'dataProvider'=>$dokin->search($model->idItem,$model->idLevel5),
                    //'filter'=>$model,
                    //'selectableRows'=>2,
                    'columns'=>array(
                         array(
                                'header' => 'No',
                                'value' => '$row+1',
                            ),
                            array(
                                'id' => 'idItem',
                                  'header' => 'No',
                                  'value' => '$data->dok->namaDoc',
                              ),
                              array(
                                'id' => 'id',
                                  'header' => 'Source',
                                  'value' => '$data->source',
                              ),

                        array(
                                                'class'=>'CButtonColumn',
                                                'header'=>'Status',
                                                'template'=>'{no}{ok}',
                                                'buttons'=>array
                                                (

                                                      'ok' => array
                                                        (
                                                            'label'=>'<span class="glyphicon glyphicon-ok" style="color:green" aria-hidden="true"></span>',
                                                            'imageUrl'=>false,
                                                            'visible' => '((empty($data->file)) )?false:true;',

                                                        ),
                                                        'no' => array
                                                          (
                                                              'label'=>'<span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>',
                                                              'imageUrl'=>false,
                                                              'visible' => '((empty($data->file)) )?true:false;',

                                                          ),
                                                 ),
                                            ),
                                            array(
                                                                    'class'=>'CButtonColumn',
                                                                    'header'=>'Action',
                                                                    'template'=>' {download}{update} ',
                                                                    'buttons'=>array
                                                                    (
                                                                      'update' => array
                                                                        (
                                                                            'label'=>'<span class="glyphicon glyphicon-upload" aria-hidden="true"></span>',
                                                                            'imageUrl'=>false,
                                                                            'url'=>'$this->grid->controller->createUrl("/doctask/upload", array("id"=>$data->id))',
                                                                            'visible' => '((empty($data->file)) )?true:false;',
                                                                        ),

                                                                        'download' => array
                                                                          (
                                                                              'label'=>'<span class="glyphicon glyphicon-download" aria-hidden="true"></span>',
                                                                              'imageUrl'=>false,
                                                                               'visible' => '((empty($data->file)) )?false:true;',

                                                                              'url'=>'yii::app()->request->baseUrl."/dokumentask/".$data->file',
                                                                          ),

                                                                     ),
                                                                ),

                    ),
                    'emptyText' => 'No Document Input Needed!',
                    'pager'=>array(
                                        'header'         => '',
                                        'firstPageLabel' => '&lt;&lt;',
                                        'prevPageLabel'  => 'Prev',
                                        'nextPageLabel'  => 'Next',
                                        'lastPageLabel'  => '&gt;&gt;',
                                        'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/main.css',
                                    ),
                                    'template'=>'{items} {pager}',
                                    'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                )); ?>

                        <?php $this->endWidget();  ?>





        </div>
      </div>



      </div>
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">Dokumen output</div>
        <?php $dokin = new Doctask('search'); ?>
        <div class="panel-body">

          <?php
          $path = yii::app()->request->baseUrl.'/attachment';
          echo "";
              $form=$this->beginWidget('CActiveForm', array(
                  'id'=>'task-form',
                  //'action'=>array('penghuni/remove'),
                  'enableAjaxValidation'=>false,
              ));
          ?>
          <?php

                  $this->widget('zii.widgets.grid.CGridView', array(
                      'id'=>'task-grid',
                      'dataProvider'=>$dokin->searcho($_GET['id']),
                      //'filter'=>$model,
                      //'selectableRows'=>2,
                      'columns'=>array(
                           array(
                                  'header' => 'No',
                                  'value' => '$row+1',
                              ),
                              array(
                                  'id' => 'idItem',
                                    'header' => 'No',
                                    'value' => '$data->dok->namaDoc',
                                ),
                                array(
                                    'id' => 'idItem',
                                      'header' => 'No',
                                      'value' => '$data->cda($data->deadline)',
                                  ),
                                array(
                                                        'class'=>'CButtonColumn',
                                                        'header'=>'Status',
                                                        'template'=>'{no}{ok}{rej}',
                                                        'buttons'=>array
                                                        (

                                                              'ok' => array
                                                                (
                                                                    'label'=>'<span class="glyphicon glyphicon-ok" style="color:green" aria-hidden="true"></span>',
                                                                    'imageUrl'=>false,
                                                                    'visible' => '((empty($data->file))  )?false:true && $data->needA < 3;',

                                                                ),
                                                                'no' => array
                                                                  (
                                                                      'label'=>'<span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>',
                                                                      'imageUrl'=>false,
                                                                      'visible' => '((empty($data->file)) )?true:false;',

                                                                  ),
                                                                  'rej' => array
                                                                  (
                                                                      'label'=>'<span class="glyphicon glyphicon-eye-open" style="color:red" aria-hidden="true"></span> <i>Rejected</i>',
                                                                      'imageUrl'=>false,
                                                                      'visible' => '((empty($data->file)))?false:true  && $data->needA == 3 ;',
                                                                      'url'=>'$this->grid->controller->createUrl("/task/dokreject", array("id"=>$data->id))',

                                                                  ),
                                                         ),
                                                    ),

                          array(
                                                  'class'=>'CButtonColumn',
                                                  'header'=>'Action',
                                                  'template'=>'{update} {download} {approve}',
                                                  'buttons'=>array
                                                  (

                                                    'update' => array
                                                      (
                                                          'label'=>' <span class="glyphicon glyphicon-upload" aria-hidden="true"></span>',
                                                          'imageUrl'=>false,
                                                          'visible' => 'Yii::app()->user->role == "Operator Lapangan"',
                                                          'url'=>'$this->grid->controller->createUrl("/doctask/upload", array("id"=>$data->id))',
                                                      ),
                                                      'download' => array
                                                        (
                                                            'label'=>'<span class="glyphicon glyphicon-download" aria-hidden="true"></span>',
                                                            'imageUrl'=>false,
                                                            'visible' => '(!(empty($data->attachment)) )?true:false;',
                                                            'url'=>'yii::app()->request->baseUrl."/attachment/".$data->attachment',
                                                        ),
                                                        'approve' => array
                                                          (
                                                              'label'=>'<span class="glyphicon glyphicon-check" aria-hidden="true"></span>',
                                                              'imageUrl'=>false,
                                                              'visible' => 'Yii::app()->user->role == "Manager" && $data->needA == 1',
                                                              'url'=>'$this->grid->controller->createUrl("/doctask/upload", array("id"=>$data->id))',
                                                          ),

                                                   ),
                                              ),

                      ),
                      'emptyText' => 'No Document Output Needed!',
                      'pager'=>array(
                                          'header'         => '',
                                          'firstPageLabel' => '&lt;&lt;',
                                          'prevPageLabel'  => 'Prev',
                                          'nextPageLabel'  => 'Next',
                                          'lastPageLabel'  => '&gt;&gt;',
                                          'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/main.css',
                                      ),
                                      'template'=>'{items} {pager}',
                                      'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                  )); ?>

                          <?php $this->endWidget();  ?>

        </div>
      </div>
      </div>
  </div>

</div>

<div class="form">

<?php

$form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	'enableAjaxValidation'=>false,
  'action'=>Yii::app()->createUrl('task/update/'.$_GET['id']),

)); ?>

<div class="row buttons" onclick="update_value()">
  <?php echo CHtml::submitButton(!($model->isNewRecord) ? 'Complete' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?><!-- form -->
<?php $ida = $_GET['id']; $i = 0; $ni=0;?>
<?php

?>

</section>
