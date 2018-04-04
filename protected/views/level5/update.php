<?php
/* @var $this Level5Controller */
/* @var $model Level5 */

$this->breadcrumbs=array(
	'Level5s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Level5', 'url'=>array('index')),
	array('label'=>'Create Level5', 'url'=>array('create')),
	array('label'=>'View Level5', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Level5', 'url'=>array('admin')),
);
?>

<h1>Update Level5 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>