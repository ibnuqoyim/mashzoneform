<?php
/* @var $this DokrejectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dokrejects',
);

$this->menu=array(
	array('label'=>'Create Dokreject', 'url'=>array('create')),
	array('label'=>'Manage Dokreject', 'url'=>array('admin')),
);
?>

<h1>Dokrejects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
