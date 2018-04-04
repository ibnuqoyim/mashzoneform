<?php
/* @var $this PerioderegistrasiController */
/* @var $model Perioderegistrasi */

$this->breadcrumbs=array(
	'Perioderegistrasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perioderegistrasi', 'url'=>array('index')),
	array('label'=>'Create Perioderegistrasi', 'url'=>array('create')),
	array('label'=>'View Perioderegistrasi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Perioderegistrasi', 'url'=>array('admin')),
);
?>

<h1>Update Perioderegistrasi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>