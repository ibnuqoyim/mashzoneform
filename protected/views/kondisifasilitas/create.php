<?php
/* @var $this KondisifasilitasController */
/* @var $model Kondisifasilitas */

$this->breadcrumbs=array(
	'Kondisifasilitases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kondisifasilitas', 'url'=>array('index')),
	array('label'=>'Manage Kondisifasilitas', 'url'=>array('admin')),
);
?>

<h1>Create Kondisifasilitas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>