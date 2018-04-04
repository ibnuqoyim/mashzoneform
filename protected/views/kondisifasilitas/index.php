<?php
/* @var $this KondisifasilitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kondisifasilitases',
);

$this->menu=array(
	array('label'=>'Create Kondisifasilitas', 'url'=>array('create')),
	array('label'=>'Manage Kondisifasilitas', 'url'=>array('admin')),
);
?>

<h1>Kondisifasilitases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
