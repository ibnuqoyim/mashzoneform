<?php
/* @var $this KondisitempattidurController */
/* @var $model Kondisitempattidur */

$this->breadcrumbs=array(
	'Kondisitempattidurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kondisitempattidur', 'url'=>array('index')),
	array('label'=>'Manage Kondisitempattidur', 'url'=>array('admin')),
);
?>

<h1>Create Kondisitempattidur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>