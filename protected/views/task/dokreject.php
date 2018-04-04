<header>
		 <div class="info">
				 <div class="container">
						 <div class="col-lg-4 left">
								 <a class="page"><span class="glyphicon glyphicon-briefcase gold" aria-hidden="true"></span> Data Task</a>
						 </div>
						 <div class="col-lg-5 right alamat">



												 <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' (Originator)', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>

						 </div>
						 <div class="clear"></div>
				 </div>
		 </div>
 </header>

 <section class="container">
	 <?php $this->widget('zii.widgets.grid.CGridView', array(
	 	'id'=>'dokreject-grid',
	 	'dataProvider'=>$modal->search($_GET['id']),

	 	'columns'=>array(
			array('name'=>'id',
						 'header' => 'No',
						 'value' => '$row+1',
				 ),
			array('name'=>'idDocTask',
							'header'=>'Document',
							'value'=>'$data->dok->dok->namaDoc',

							),
	 		'alasan',
	 		'lampiran',
			array(
															'class'=>'CButtonColumn',
															'header'=>'Action',
															'template'=>'{update}  &nbsp &nbsp  {download} ',
															'buttons'=>array
															(

																'update' => array
																	(
																			'label'=>'<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>',
																			'imageUrl'=>false,

																			'url'=>'$this->grid->controller->createUrl("/doctask/upload", array("id"=>$data->idDocTask))',
																	),
																	'download' => array
																		(
																				'label'=>'<span class="glyphicon glyphicon-download" aria-hidden="true"></span>',
																				'imageUrl'=>false,

																				'url'=>'yii::app()->request->baseUrl."/dokumentask/".$data->lampiran',
																		),


															 ),
													),
	 	),
		'emptyText' => 'No Task to Show!',
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
 )); ?>
 </section>
 <script>
                    $('#myTab a').click(function (e) {
                        e.preventDefault()
                        $(this).tab('show')
                    })
                </script>
