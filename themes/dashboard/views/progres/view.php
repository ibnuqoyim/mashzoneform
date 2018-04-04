<?php
/* @var $this ProgresController */
/* @var $model Progres */

$this->breadcrumbs=array(
	'Progres'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Progres', 'url'=>array('index')),
	array('label'=>'Create Progres', 'url'=>array('create')),
	array('label'=>'Update Progres', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Progres', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Progres', 'url'=>array('admin')),
);
?>
<div class="container" align="center">
<div class="col-lg-8" align="center">
<h1>View Progres #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		array(
		'id'=>'idMto',
		'label'=>'MTO Type',
		'value'=>$model->task->mto->nameMto,
		),
		array(
		'id'=>'idItem',
		'label'=>'Item',
		'value'=>$model->task->item->namaItem,
		),
		array(
		'id'=>'bStart',
		'label'=>'Baseline Start',
		'value'=>$model->task->bStart,
		),
		array(
		'id'=>'bFinish',
		'label'=>'Baseline Finish',
		'value'=>$model->task->bFinish,
		),
		
		array(
		'id'=>'idPic',
		'label'=>'PIC',
		'value'=>$model->task->pic->namePic,
		),
		array(
		
		'label'=>'Kontak PIC',
		'value'=>$model->task->pic->kontak,
		),
		array(
		
		'label'=>'Start',
		'value'=>$model->pStart,
		),
		array(
		
		'label'=>'Progres Tahap 1',
		'value'=>$model->pTahap1,
		),
		array(
		
		'label'=>'Progres Tahap 2',
		'value'=>$model->pTahap2,
		),
		array(
		
		'label'=>'Finish',
		'value'=>$model->pFinish,
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