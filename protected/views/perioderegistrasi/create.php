<?php
/* @var $this PerioderegistrasiController */
/* @var $model Perioderegistrasi */

$this->breadcrumbs=array(
	'Perioderegistrasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perioderegistrasi', 'url'=>array('index')),
	array('label'=>'Manage Perioderegistrasi', 'url'=>array('admin')),
);
?>

<h1>Create Perioderegistrasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>