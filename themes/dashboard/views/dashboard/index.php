


				        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Dashboard</a>
                    </div>
                    <div class="col-lg-5 right alamat">

                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>


                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

		 <?php
                if(Yii::app()->user->role == "Admin" ){
         ?>
        <section class="container">

            <div class="col-lg-12" align="center">
                <?php
                    $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'progres-form',
                        'enableAjaxValidation'=>false,
                    ));
                ?>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
			/*'type'=>'striped bordered condensed',*/

			'dataProvider'=>$model->search(),
			//'filter'=>'$data->task->pic->id',

			'columns'=>array(
				array('name'=>'id',
						'header'=>'ID TASK',
						'value'=>'$data->id',

						),
				array('name'=>'namaItem',
						'header'=>'Item',
						'value'=>'$data->item->namaItem',

						),


				array(
                                        'class'=>'CButtonColumn',

                                        'template'=>'{view}{update}',
                                        'buttons'=>array
                                        (
                                          'view' => array
                                            (
                                                'label'=>'View Task',
                                                'url'=>'$this->grid->controller->createUrl("/task/view", array("id"=>$data->id))',
                                            ),
										  'update' => array
                                            (
                                                'label'=>'Update Progres',
                                                'url'=>'$this->grid->controller->createUrl("/task/update", array("id"=>$data->id))',
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

        </section>
		 <?php
                }
         ?>

		 <?php
                if(Yii::app()->user->role == "Admin" || Yii::app()->user->role == "Administrator" ){
         ?>
        <section class="container">
			Administrator
			<div class="col-lg-4 left">
                <?php
                    echo CHtml::link('
                        <div class="btn btn-success width100 big" role="alert">
                            <span class="glyphicon glyphicon-user left" aria-hidden="true"></span>
                            <span class="right">User</span>
                            <div class="clear"></div>
                        </div>
                        ', array('user/admin'));
                ?>
            </div>
            <div class="col-lg-4 left">
                <?php
                    echo CHtml::link('
                        <div class="btn btn-warning width100 big" role="alert">
                            <span class="glyphicon glyphicon-hdd left" aria-hidden="true"></span>
                            <span class="right">Upload Database</span>
                            <div class="clear"></div>
                        </div>
                        ', array('induk'));
                ?>
            </div>
		</section>
		 <?php
                }
         ?>
