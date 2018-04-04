<?php
/* @var $this ProgresController */
/* @var $model Progres */

$this->breadcrumbs=array(
	'Progres'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Progres', 'url'=>array('index')),
	array('label'=>'Create Progres', 'url'=>array('create')),
	array('label'=>'Update Progres', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Progres', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Progres', 'url'=>array('admin')),
);
?>
<div class="container" align="center">
<div class="col-lg-8" align="center">
<h1>View Progres #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
		'id'=>'idMto',
		'label'=>'MTO Type',
		'value'=>$model->mto->nameMto,
		),
		array(
		'id'=>'idItem',
		'label'=>'Item',
		'value'=>$model->item->namaItem,
		),
		array(
		'id'=>'bStart',
		'label'=>'Baseline Start',
		'value'=>$model->bStart,
		),
		array(
		'id'=>'bFinish',
		'label'=>'Baseline Finish',
		'value'=>$model->bFinish,
		),
		
		array(
		'id'=>'idPic',
		'label'=>'PIC',
		'value'=>$model->pic->namePic,
		),
		array(
		
		'label'=>'Kontak PIC',
		'value'=>$model->pic->kontak,
		),
		array(
		
		'label'=>'Start',
		'value'=>$model->p1,
		),
		array(
		
		'label'=>'Progres Tahap 1',
		'value'=>$model->p2,
		),
		array(
		
		'label'=>'Progres Tahap 2',
		'value'=>$model->p3,
		),
		array(
		
		'label'=>'Finish',
		'value'=>$model->p4,
		),
	),
)); ?>
</div></div>
				<br><div align="center">
				<a href="/mashzoneform/index.php/dashboard/">
                        <div  class="btn btn-warning" role="danger"  >
                            
                            <span class="center"> Back</span>
                            <div class="clear"></div>
                        </div>
                        </a></div>