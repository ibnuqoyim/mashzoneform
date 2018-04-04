<?php
/* @var $this DokumenController */
/* @var $model Dokumen */

$this->breadcrumbs=array(
	'Dokumens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokumen', 'url'=>array('index')),
	array('label'=>'Create Dokumen', 'url'=>array('create')),
	array('label'=>'View Dokumen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dokumen', 'url'=>array('admin')),
);
?>

<h1>Update Dokumen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>