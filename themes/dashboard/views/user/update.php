        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Update Profile User</a>
                    </div>
                    <div class="col-lg-5 right alamat">

                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>



        <section class="container">
            <div class="col-lg-12 data">
                <?php
                    $this->widget('zii.widgets.CDetailView', array(
                            'data'=>$model,
                            'attributes'=>array(
                                    'nama',
                                    'alamat',
                                    'email',
                                    'telp',
                                    'role',
                                    
                            ),
                            'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                    ));
                ?>
            </div>
            <div class="col-lg-12">
                <h2>Update Form</h2>
            </div>
            <?php $this->renderPartial('_form', array('model'=>$model, 'modeledit'=>$modeledit)); ?>
        </section>
