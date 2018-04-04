<?php
/* @var $this ProgresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Progres',
);

$this->menu=array(
	array('label'=>'Create Progres', 'url'=>array('create')),
	array('label'=>'Manage Progres', 'url'=>array('admin')),
);
?>

<h1>Progres</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'progres-grid',
	'dataProvider'=> $model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		array (
			'name'=>'IdTask',
			'header'=>'Item',
			'value'=>'$data->task->item->namaItem',
			),
		array (
			'name'=>'IdTask',
			'header'=>'MTO Type',
			'value'=>'$data->task->mto->nameMto',
			),
		
		'pStart',
		'pTahap1',
		'pTahap2',
		'pFinish',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
                    
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id'=>'progres-grid',
                            'dataProvider'=>$model->search(),
                            //'filter'=>$model,
                            'columns'=>array(
		'Id',
		array (
			'name'=>'IdTask',
			'header'=>'Item',
			'value'=>'$data->task->item->namaItem',
			),
		array (
			'name'=>'IdTask',
			'header'=>'MTO Type',
			'value'=>'$data->task->mto->nameMto',
			),
		
		'pStart',
		'pTahap1',
		'pTahap2',
		'pFinish',
		array(
			'class'=>'CButtonColumn',
		),
	),
                            'pager'=>array(
                                'header'         => '',
                                'firstPageLabel' => '&lt;&lt;',
                                'prevPageLabel'  => 'Prev',
                                'nextPageLabel'  => 'Next',
                                'lastPageLabel'  => '&gt;&gt;',
                                'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/main.css',
                            ),
                            'template'=>'{items} {pager}',
                            'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        )); 
                    
                ?>
