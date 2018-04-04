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



        <section class="container">
            <div class="col-lg-12">
                <h1>View User #<?php echo $model->id; ?></h1>
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
        </section>
