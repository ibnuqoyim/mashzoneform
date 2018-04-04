<?php
/* @var $this Level6Controller */
/* @var $model Level6 */

$this->breadcrumbs=array(
	'Level6s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Level6', 'url'=>array('index')),
	array('label'=>'Create Level6', 'url'=>array('create')),
	array('label'=>'Update Level6', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Level6', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Level6', 'url'=>array('admin')),
);
?>

<h1>View Level6 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'namaTahap',
		'idLvl5',
		'ket',
	),
)); ?>
