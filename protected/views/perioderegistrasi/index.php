<?php
/* @var $this PerioderegistrasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perioderegistrasis',
);

$this->menu=array(
	array('label'=>'Create Perioderegistrasi', 'url'=>array('create')),
	array('label'=>'Manage Perioderegistrasi', 'url'=>array('admin')),
);
?>

<h1>Perioderegistrasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
