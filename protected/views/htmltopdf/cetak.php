        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Generate Kontrak</a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>
        
        <section class="container">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Generate Kontrak Penghuni</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'Alokasi-form',
                                //'action'=>Yii::app()->createUrl('/Htmltopdf/pdf'),
                                'enableAjaxValidation'=>false,
                            )); 
                        ?>
                            <fieldset>
                                <div class="form-group">
                                    <label>Nomor Kontrak</label>
                                    <?php echo $form->textField($model,'nomorSurat',array('class'=>'form-control')); ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kontrak</label>
                                    <?php 
                                        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                               'model'=>$model,
                                               'attribute'=>'tanggal',
                                               'options'=>array( 
                                                           'showAnim'=>'fadeIn', 
                                                           'dateFormat'=>'yy-mm-dd',
                                                           'changeMonth'=>true,
                                                           'changeYear'=>true,
                                                           'minDate'=>'1950-01-01',
                                                           'yearRange' => '-200:+25',
                                                           //'maxDate'=>'2015-01-01',
                                                           ),
                                               'htmlOptions'=>array('class' => "form-control", 'value'=>isset($_SESSION["tanggal"])?$_SESSION["tanggal"]:'')
                                           )
                                       );
                                   ?>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Asrama</label>
                                    <?php echo $form->dropDownList($model,'kodeAsrama',CHtml::listData(Asrama::model()->findAll(),'kodeAsrama','namaAsrama'), array('prompt'=>'Pilih Asrama:','class'=>'form-control')); ?>
                                </div>
                                <div class="text-center">
                                    <label>Periode Huni</label>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'startDate'); ?>
                                    <?php 
                                        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                               'model'=>$model,
                                               'attribute'=>'startDate',
                                               'options'=>array( 
                                                           'showAnim'=>'fadeIn', 
                                                           'dateFormat'=>'yy-mm-dd',
                                                           'changeMonth'=>true,
                                                           'changeYear'=>true,
                                                           'minDate'=>'2014-01-01',
                                                           'yearRange' => '-200:+25',
                                                           'maxDate'=>'2030-01-01',
                                                           ),
                                               'htmlOptions'=>array('class' => "form-control", 'value'=>isset($_SESSION["startDate"])?$_SESSION["startDate"]:'')
                                           )
                                       );
                                   ?>
                                    <?php //echo $form->textField($model,'startDate',array('value'=>$reg->startDate ,'class'=>'form-control','readOnly'=>'readonly')); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'endDate'); ?>
                                    <?php 
                                        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                               'model'=>$model,
                                               'attribute'=>'endDate',
                                               'options'=>array( 
                                                           'showAnim'=>'fadeIn', 
                                                           'dateFormat'=>'yy-mm-dd',
                                                           'changeMonth'=>true,
                                                           'changeYear'=>true,
                                                           'minDate'=>'2014-01-01',
                                                           'yearRange' => '-200:+25',
                                                           'maxDate'=>'2030-01-01',
                                                           ),
                                               'htmlOptions'=>array('class' => "form-control",'value'=>isset($_SESSION["endDate"])?$_SESSION["endDate"]:'')
                                           )
                                       );
                                   ?>
                                    <?php //echo $form->textField($model,'endDate',array('value'=>$reg->endDate ,'class'=>'form-control','readOnly'=>'readonly')); ?>
                                </div>
                                <?php echo CHtml::submitButton('Generate Kontrak',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
                            </fieldset>
                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
    </section>