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
<div class="col-lg-12">
				 <div class="col-lg-5">

				<?php


				$form=$this->beginWidget('CActiveForm', array(
												 'action'=>Yii::app()->createUrl($this->route),
												 'method'=>'get',
								 ));
				?>
					<div class="form-group">
								<label>Object</label>
								<?php echo $form->dropDownList($model,'idItem',CHtml::listData(Level4::model()->findAll(),'id','namaLvl4'), array('prompt'=>'All Object', 'class'=>'form-control')); ?>
					</div>
								<?php echo CHtml::submitButton('Search',array('class'=>'btn-primary')); ?>
								<br>
								<?php $this->endWidget(); ?>
					</div>
	<div class="col-lg-7">


 </div>

									 </div>
		 <?php
		        if(Yii::app()->user->role ==  "Operator Lapangan" ){
     ?>

		  <!-- <div class="col-lg-12">
			 <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Process</th>
        <th>Object</th>
				<th>Status</th>
				<th>Action</th>
      </tr>
    </thead>

    <tbody>
			<?php for($i=1;$i<10;$i++) { ?>
      <tr>
        <td><?php echo $i; ?> </td>
        <td>Doe</td>
        <td>john@example.com</td>
				<td>John</td>
				<td>John</td>
      </tr>
		<?php } ?>
    </tbody>
  </table>


</div> -->

<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Uncomplete" aria-controls="Uncomplete" role="tab" data-toggle="tab">Uncomplete</a></li>
										<li role="presentation"><a href="#Complete" aria-controls="Complete" role="tab" data-toggle="tab">Complete</a></li>
							</ul>
<div class="tab-content top20">
		<div role="tabpanel" class="tab-pane fade in active" id="Uncomplete">
		 <div class="col-lg-12">
				 <?php
				 
				 $path = yii::app()->request->baseUrl.'/attachment';
				 echo "";
						 $form=$this->beginWidget('CActiveForm', array(
								 'id'=>'task-form',
								 //'action'=>array('penghuni/remove'),
								 'enableAjaxValidation'=>false,
						 ));
				 ?>
				 <?php

								 $this->widget('zii.widgets.grid.CGridView', array(
										 'id'=>'task-uncomplete-grid',
										 'dataProvider'=>$model->uncomplete(Yii::app()->user->id),
										 //'filter'=>$model,
										 //'selectableRows'=>2,
										 'columns'=>array(
										 			array(
																 'header' => 'No',
																 'value' => '$row+1',
														 ),

				                 array('name'=>'idLevel6',
				                         'header'=>'Process',
				                         'value'=>'$data->lvl6->namaLvl6',

				                         ),
															array('name'=>'idItem',
		 															'header'=>'Object',
		 															'value'=>'$data->item->namaLvl4',

		 																		),
																				array('name'=>'bFinish',
																						'header'=>'Due Date',
																						'value'=>'$data->bFinish ',

																									),

				                 array('name'=>'status',
				                         'header'=>'Status',
				                         'value'=>'$data->statusa->namaStatus',

				                         ),

				                 array(
				                                         'class'=>'CButtonColumn',
																								 'header'=>'Action',
				                                         'template'=>'{edit}',
				                                         'buttons'=>array
				                                         (

				                                           'edit' => array
				                                             (
																											 'label'=>Yii::app()->controller->widget("ext.ecountdownaction.ECountdownAction",array("seconds"=>9,"action"=>"{alert('hello world'!)}"),true),
																											'imageUrl'=>false,
																											'visible' =>'$data->status == 3 || $data->idLevel6 == 1 || $data->status == 0 ',
				                                                 'url'=>'$this->grid->controller->createUrl("/task/edittask", array("id"=>$data->id))',
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

				                 <?php $this->endWidget();  ?>






	 </div>
		</div>


		<div role="tabpanel" class="tab-pane fade" id="Complete">
		 <div class="col-lg-12">

			 <?php
			 $path = yii::app()->request->baseUrl.'/attachment';
			 echo "";
					 $form=$this->beginWidget('CActiveForm', array(
							 'id'=>'task-form',
							 //'action'=>array('penghuni/remove'),
							 'enableAjaxValidation'=>false,
					 ));
			 ?>
			 <?php

							 $this->widget('zii.widgets.grid.CGridView', array(
									 'id'=>'task-grid',
									 'dataProvider'=>$model->complete(Yii::app()->user->id),
									 //'filter'=>$model,
									 //'selectableRows'=>2,
									 'columns'=>array(
										 array(
														'header' => 'No',
														'value' => '$row+1',
												),

										array('name'=>'idLevel6',
														'header'=>'Process',
														'value'=>'$data->lvl6->namaLvl6',

														),
												 array('name'=>'idItem',
														 'header'=>'Produk',
														 'value'=>'$data->item->namaLvl4',

																	 ),
																	 array('name'=>'bFinish',
																			 'header'=>'Due Date',
																			 'value'=>'$data->bFinish',

																						 ),

										array('name'=>'status',
														'header'=>'Status',
														'value'=>'$data->statusa->namaStatus',

														),

										array(
																						'class'=>'CButtonColumn',
																						'header'=>'Action',
																						'template'=>'{edit}',
																						'buttons'=>array
																						(

																							'edit' => array
																								(
																									'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
																								 'imageUrl'=>false,

																										'url'=>'$this->grid->controller->createUrl("/task/edittask", array("id"=>$data->id))',
																								),

																						 ),
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
						)); ?>

										<?php $this->endWidget();  ?>

		 </div>
	 </div>

</div>
</div>
<?php
}
?>
		 <?php
		        if(Yii::app()->user->role ==  "Manager" ){
     ?>
		 <div role="tabpanel">
		 								<!-- Nav tabs -->
		 								<ul class="nav nav-tabs" role="tablist">
		 										<li role="presentation" class="active"><a href="#Uncomplete" aria-controls="Uncomplete" role="tab" data-toggle="tab">Uncomplete</a></li>
		 										<li role="presentation"><a href="#Complete" aria-controls="Complete" role="tab" data-toggle="tab">Complete</a></li>
		 							</ul>
		 <div class="tab-content top20">
		 		<div role="tabpanel" class="tab-pane fade in active" id="Uncomplete">
		 		 <div class="col-lg-12">
		 				 <?php
		 				 $path = yii::app()->request->baseUrl.'/attachment';
		 				 echo "";
		 						 $form=$this->beginWidget('CActiveForm', array(
		 								 'id'=>'task-form',
		 								 //'action'=>array('penghuni/remove'),
		 								 'enableAjaxValidation'=>false,
		 						 ));
		 				 ?>
		 				 <?php

		 								 $this->widget('zii.widgets.grid.CGridView', array(
		 										 'id'=>'task-uncomplete-grid',
		 										 'dataProvider'=>$model->uncomplete5(Yii::app()->user->id),
		 										 //'filter'=>$model,
		 										 //'selectableRows'=>2,
		 										 'columns'=>array(
		 										 			array(
		 																 'header' => 'No',
		 																 'value' => '$row+1',
		 														 ),

		 				                 array('name'=>'idLevel6',
		 				                         'header'=>'Process',
		 				                         'value'=>'$data->lvl6->namaLvl6',

		 				                         ),
		 															array('name'=>'idItem',
		 		 															'header'=>'Produk',
		 		 															'value'=>'$data->item->namaLvl4',

		 		 																		),

																						array('name'=>'idPic6',
							 		 															'header'=>'Produk',
							 		 															'value'=>'$data->pic6->nama',

							 		 																		),

		 				                 array('name'=>'status',
		 				                         'header'=>'Status',
		 				                         'value'=>'$data->statusa->namaStatus',

		 				                         ),

		 				                 array(
		 				                                         'class'=>'CButtonColumn',
		 																								 'header'=>'Action',
		 				                                         'template'=>'{edit}',
		 				                                         'buttons'=>array
		 				                                         (

		 				                                           'edit' => array
		 				                                             (
		 																											 'label'=>'<span class="glyphicon glyphicon-search" aria-hidden="true"></span>',
		 																											'imageUrl'=>false,

		 				                                                 'url'=>'$this->grid->controller->createUrl("/task/edittask", array("id"=>$data->id))',
		 				                                             ),

		 				                                          ),
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
		 				         )); ?>

		 				                 <?php $this->endWidget();  ?>






		 	 </div>
		 		</div>


		 		<div role="tabpanel" class="tab-pane fade" id="Complete">
		 		 <div class="col-lg-12">

		 			 <?php
		 			 $path = yii::app()->request->baseUrl.'/attachment';
		 			 echo "";
		 					 $form=$this->beginWidget('CActiveForm', array(
		 							 'id'=>'task-form',
		 							 //'action'=>array('penghuni/remove'),
		 							 'enableAjaxValidation'=>false,
		 					 ));
		 			 ?>
		 			 <?php

		 							 $this->widget('zii.widgets.grid.CGridView', array(
		 									 'id'=>'task-grid',
		 									 'dataProvider'=>$model->complete5(Yii::app()->user->id),
		 									 //'filter'=>$model,
		 									 //'selectableRows'=>2,
		 									 'columns'=>array(
												 array(
																'header' => 'No',
																'value' => '$row+1',
														),

												array('name'=>'idLevel6',
																'header'=>'Process',
																'value'=>'$data->lvl6->namaLvl6',

																),
														 array('name'=>'idItem',
																 'header'=>'Produk',
																 'value'=>'$data->item->namaLvl4',

																			 ),

																			 array('name'=>'idPic6',
																					 'header'=>'Produk',
																					 'value'=>'$data->pic6->nama',

																								 ),

												array('name'=>'status',
																'header'=>'Status',
																'value'=>'$data->statusa->namaStatus',

																),

												array(
																								'class'=>'CButtonColumn',
																								'header'=>'Action',
																								'template'=>'{edit}',
																								'buttons'=>array
																								(

																									'edit' => array
																										(
																											'label'=>'<span class="glyphicon glyphicon-search" aria-hidden="true"></span>',
																										 'imageUrl'=>false,

																												'url'=>'$this->grid->controller->createUrl("/task/edittask", array("id"=>$data->id))',
																										),

																								 ),
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
								)); ?>

												<?php $this->endWidget();  ?>

		 		 </div>
		 	 </div>

		 </div>
		 </div> <?php
	 }
     ?>
 </section>
 <script>
                    $('#myTab a').click(function (e) {
                        e.preventDefault()
                        $(this).tab('show')
                    })
                </script>
