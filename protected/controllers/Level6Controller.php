




<?php

class Level6Controller extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','done','approve','reject'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionDone($id)
	{
            $model=$this->loadModel($id);
            
            $model->status = 'Not Approved';
            $model->progres = '100';
            echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'id','name'=>'id','value'=>$model->id));
            echo CHtml::tag( 'input',array('type'=>'hidden','id'=>'progres','name'=>'progres','value'=>$model->progres));
			 $baseUrl = Yii::app()->baseUrl; 
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'themes/dashboard/assets/js/sheets.js'); 
			
            echo '<script> updateProgres() </script>';
            if($model->save()){
                    $this->redirect(Yii::app()->request->urlReferrer);
            }   
	}

	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model->progres = 100;
		$model->status = "Not Approved";
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Level6;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Level6']))
		{
			$model->attributes=$_POST['Level6'];
			if($model->save())
				$this->redirect(array('level5/view','id'=>$model->idLvl5));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->progres = 100;
		$model->status = "Not Approved";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Level6']))
		{
			$model->attributes=$_POST['Level6'];
			if($model->save())
				$this->redirect(array('dashboard/index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	public function actionApprove($id)
	{
		$model=$this->loadModel($id);
		$model->progres = 100;
		$model->status = "Approved";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Level6']))
		{
			$model->attributes=$_POST['Level6'];
			if($model->save())
				$this->redirect(array('dashboard/index'));
		}

		$this->render('aprove',array(
			'model'=>$model,
		));
	}
	public function actionReject($id)
	{
		$model=$this->loadModel($id);
		$model->progres = 0;
		$model->status = "Rejected";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Level6']))
		{
			$model->attributes=$_POST['Level6'];
			if($model->save())
				$this->redirect(array('dashboard/index'));
		}

		$this->render('reject',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Level6');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Level6('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Level6']))
			$model->attributes=$_GET['Level6'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Level6 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Level6::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Level6 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='level6-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
?>

<div id="loader"></div>
 
<p id="re"></p>