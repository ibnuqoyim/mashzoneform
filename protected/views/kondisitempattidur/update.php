<?php
/* @var $this KondisitempattidurController */
/* @var $model Kondisitempattidur */

$this->breadcrumbs=array(
	'Kondisitempattidurs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kondisitempattidur', 'url'=>array('index')),
	array('label'=>'Create Kondisitempattidur', 'url'=>array('create')),
	array('label'=>'View Kondisitempattidur', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kondisitempattidur', 'url'=>array('admin')),
);
?>

<h1>Update Kondisitempattidur <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>