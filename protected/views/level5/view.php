

        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> User</a>
                    </div>
                    <div class="col-lg-5 right alamat">
                       
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        
                        
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>



        <?php
				
                if(Yii::app()->user->role == "Operator Lapangan"  ){
         ?>
        <section class="container">
           
            <div class="col-lg-12" align="center">
                <?php 
				
                    $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'level6view-form',
                        'enableAjaxValidation'=>false,
                    )); 
                ?>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
            /*'type'=>'striped bordered condensed',*/
            
            'dataProvider'=>$model2->searchi($_GET['id']),
            //'filter'=>'$data->task->pic->id',
            
            'columns'=>array(
                array('name'=>'id', 
                        'header'=>'ID',
                        'value'=>'$data->id',
                        
                        ),
                array('name'=>'namaLvl6', 
                        'header'=>'Item',
                        'value'=>'$data->namaLvl6',
                        
                        ),
                array('name'=>'progres', 
                        'header'=>'Progres',
                        'value'=>'$data->progres',
                        
                        ),
                array('name'=>'status', 
                        'header'=>'Status',
                        'value'=>'$data->status',
                        
                        ),
                            
                array(
                                        'class'=>'CButtonColumn',
                                        
                                        'template'=>'{update}',
                                        'buttons'=>array
                                        (
                                          
                                          'update' => array
                                            (
                                                'label'=>'<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>',
                                                'imageUrl'=>false,
                                                'url'=>'$this->grid->controller->createUrl("/level6/update", array("id"=>$data->id))',
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
                if(Yii::app()->user->role == "Manager" ){
         ?>
        <section class="container">
           
            <div class="col-lg-12" align="center">
                <?php 
                    $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'level6view-form',
                        'enableAjaxValidation'=>false,
                    )); 
                ?>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
            /*'type'=>'striped bordered condensed',*/
            
            'dataProvider'=>$model2->searcha($_GET['id']),
            //'filter'=>'$data->task->pic->id',
            
            'columns'=>array(
                
                array('name'=>'namaLvl6', 
                        'header'=>'Proses',
                        'value'=>'$data->namaLvl6',
                        
                        ),
                array('name'=>'progres', 
                        'header'=>'Progres',
                        'value' => '$data->progres ',
                        
                        ),
                array('name'=>'status', 
                        'header'=>'Status',
                        'value'=>'$data->status',
                        
                        ),
				array('name'=>'idPic', 
                        'header'=>'PIC',
                        'value'=>'$data->pic->nama',
                        
                        ),
                            
                array(
                                        'class'=>'CButtonColumn',
                                        'deleteConfirmation'=>"js:'Berikan approval untuk pekerjaan ini?'",
                                        'template'=>'{aproved}{reject}',
                                        'buttons'=>array
                                        (
                                          
                                          'aproved' => array
                                            (
                                            	'options' => array(
                                                                    'confirm' => 'Beri approval untuk pekerjaan ini?',
                                                               ),
                                                'label'=>'<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>',
                                                'imageUrl'=>false,
                                                'url'=>'$this->grid->controller->createUrl("/level6/approve", array("id"=>$data->id))',
                                            ),
                                            'reject' => array
                                            (	
                                            	'options' => array(
                                                                    'confirm' => 'Reject pekerjaan ini?',
                                                               ),
                                                'label'=>' <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                                                'imageUrl'=>false,
                                                'url'=>'$this->grid->controller->createUrl("/level6/reject", array("id"=>$data->id))',
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
