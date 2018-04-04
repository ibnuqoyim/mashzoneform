<?php
/* @var $this Level6Controller */
/* @var $model Level6 */

$this->breadcrumbs=array(
	'Level6s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Level6', 'url'=>array('index')),
	array('label'=>'Manage Level6', 'url'=>array('admin')),
);
?>

<h1>Create Level6</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>