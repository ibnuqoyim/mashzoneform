<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

    <section class="container">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h2>Error <?php echo $code; ?></h2>
                    <p><?php echo CHtml::encode($message); ?></p>
                </div>
            </div>
        </section>
