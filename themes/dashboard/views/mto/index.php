<?php
/* @var $this MtoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mtos',
);

$this->menu=array(
	array('label'=>'Create Mto', 'url'=>array('create')),
	array('label'=>'Manage Mto', 'url'=>array('admin')),
);
?>

<h1>Mtos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
