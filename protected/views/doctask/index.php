<?php
/* @var $this DoctaskController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Doctasks',
);

$this->menu=array(
	array('label'=>'Create Doctask', 'url'=>array('create')),
	array('label'=>'Manage Doctask', 'url'=>array('admin')),
);
?>

<h1>Doctasks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
