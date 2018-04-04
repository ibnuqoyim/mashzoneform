<?php
/* @var $this Level5Controller */
/* @var $model Level5 */

$this->breadcrumbs=array(
	'Level5s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Level5', 'url'=>array('index')),
	array('label'=>'Manage Level5', 'url'=>array('admin')),
);
?>

<h1>Create Level5</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>