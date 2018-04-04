<?php
/* @var $this Level6Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Level6s',
);

$this->menu=array(
	array('label'=>'Create Level6', 'url'=>array('create')),
	array('label'=>'Manage Level6', 'url'=>array('admin')),
);
?>

<h1>Level6s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
