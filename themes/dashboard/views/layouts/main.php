<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/main.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/menu.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <nav class="navbar navbar-default">
            <div class="container">
                <div class="col-lg-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div  id="mainmenu">
                        
                                    
                        <?php 
                            $this->widget('zii.widgets.CMenu',array(
                                'items'=>array(
                                    //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Login', 'url'=>array('/site/loginPenghuni'), 'visible'=>Yii::app()->user->isGuest),
                                    array('label'=>'Dashboard', 'url'=>array('/dashboardPenghuni/index'), 'visible'=>!Yii::app()->user->isGuest),
                                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                ),
                                    'htmlOptions' => array(
                                    'class'=>'nav navbar-nav navbar-right',
                                ),  
                            )); 
                        ?>
<!--                        
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
			</div>
        </nav>
        
  
        <?php echo $content; ?>
            
        <footer>
            <p>Copyright © LAPI ITB</p>
            <p>2018</p>
        </footer>
    <!-- Core Scripts - Include with every page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
