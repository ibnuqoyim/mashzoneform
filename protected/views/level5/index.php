<?php
/* @var $this Level5Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Level5s',
);

$this->menu=array(
	array('label'=>'Create Level5', 'url'=>array('create')),
	array('label'=>'Manage Level5', 'url'=>array('admin')),
);
?>

<h1>Level5s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
