<?php
/* @var $this LogactivityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Logactivities',
);

$this->menu=array(
	array('label'=>'Create Logactivity', 'url'=>array('create')),
	array('label'=>'Manage Logactivity', 'url'=>array('admin')),
);
?>

<h1>Logactivities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
