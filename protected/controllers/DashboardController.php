

<?php

class DashboardController extends Controller
{
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','induk','form'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','loaditem','loadnamaitem','loadinfopic'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionInduk()
    {
        $model=new Task;


        // display the login form
        $this->render('induk',array('model'=>$model));
    }
	public function actionIndex()
	{
		//$model=new Progres('search');
		$task= new Task('search');
		//$model=new Task('search');
		$model3= Pic::model()->findAll();
		$modil3=new Level5('searcha');
		$model2=new Level6('searchi');
		//$model->unsetAttributes();

        //$progres = $kapasitas*100;
			$this->layout='column2';


                $this->render('index',array(

					'task'=>$task,
					'model2'=>$model2,
					'model3'=>$model3,
					'modil3'=>$modil3,
					//'progres'=>$progres
                ));


	}
	public function actionIndexi()
	{
		//$model=new Progres('search');
		$model=new Task('search');
		$model3= Pic::model()->findAll();
		$model->unsetAttributes();

        //$progres = $kapasitas*100;
			$this->layout='column2';


                $this->render('form',array(

					'model'=>$model,
					//'model2'=>$model2,
					'model3'=>$model3,
					//'progres'=>$progres
                ));


	}
	public function actionImport()
	{
		//$model=new Progres('search');


        //$progres = $kapasitas*100;
			$this->layout='column2';


                $this->render('import',array(

					//'model'=>$model,
					//'model2'=>$model2,
					//'model3'=>$model3,
					//'progres'=>$progres
                ));


	}
}
