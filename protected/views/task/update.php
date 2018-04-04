<header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-pencil gold" aria-hidden="true"></span> Update Progres</a>
                    </div>
                    <div class="col-lg-5 right alamat">

                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' (Originator)', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>


                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
<section class="container">
            <div class="col-lg-12 data">
<h1>Status Progress <?php echo $model->lvl6->namaLvl6; ?></h1>
</div>
<?php $this->renderPartial('_formedit', array('model'=>$model, 'dokinput'=>$dokinput,)); ?></section>
