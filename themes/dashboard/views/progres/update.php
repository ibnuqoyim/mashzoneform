<?php
/* @var $this ProgresController */
/* @var $model Progres */

$this->breadcrumbs=array(
	'Progres'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Progres', 'url'=>array('index')),
	array('label'=>'Create Progres', 'url'=>array('create')),
	array('label'=>'View Progres', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Progres', 'url'=>array('admin')),
);
?>

<h1 align="center">Update Progres <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_formu', array('model'=>$model)); ?>