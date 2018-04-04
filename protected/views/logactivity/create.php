<?php
/* @var $this LogactivityController */
/* @var $model Logactivity */

$this->breadcrumbs=array(
	'Logactivities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Logactivity', 'url'=>array('index')),
	array('label'=>'Manage Logactivity', 'url'=>array('admin')),
);
?>

<h1>Create Logactivity</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>