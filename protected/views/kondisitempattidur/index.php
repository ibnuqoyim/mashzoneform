<?php
/* @var $this KondisitempattidurController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kondisitempattidurs',
);

$this->menu=array(
	array('label'=>'Create Kondisitempattidur', 'url'=>array('create')),
	array('label'=>'Manage Kondisitempattidur', 'url'=>array('admin')),
);
?>

<h1>Kondisitempattidurs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
