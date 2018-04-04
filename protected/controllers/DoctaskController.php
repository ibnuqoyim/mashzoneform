<?php

class DoctaskController extends Controller
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
				'actions'=>array('create','update','approve','Reject','upload'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
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
		$model=new Doctask;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Doctask']))
		{
			$model->attributes=$_POST['Doctask'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	public function actionUpload($id)
	{
		$model=$this->loadModel($id);


		$old = $model->file;
		$val = FALSE;
		if(isset($_POST['Doctask']))
		{
			$model->attributes=$_POST['Doctask'];
												$model->file = CUploadedFile::getInstance($model, 'file');
												if ($model->needA != 0){
													$model->needA = 1;
													$model->deadline=date('Y-m-d H:i:s', strtotime('+3 Days'));
													$model->save();
												}
												if (empty($model->file)) {
														$model->file = $old;
												} else {
														$val = TRUE;
												}
												if ($model->validate()) {
														if ($val) {
																$path = Yii::getPathOfAlias("webroot"). '/dokumentask/'.$model->file;
																$del = Yii::getPathOfAlias("webroot"). '/dokumentask/'.$old;

																if (is_file($del)) {
																		unlink($del);
																}
																$model->file->saveAs($path);
														}

														$model->save();
														$this->redirect(array('task/edittask/'.$model->task->id));
												}
		}

		$this->render('upload',array(
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Doctask']))
		{
			$model->attributes=$_POST['Doctask'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionApprove($id)
	{
		$model=$this->loadModel($id);
		$idtask = $model->outfrom;
		$task=Task::model()->findByPk($idtask);
		$task->status = 5;
		$task->save();
        $odo = $idtask + 1;
        $taska=Task::model()->findByPk($odo);
        $taska->status = 3;
		$taska->save();
		$model->needA=2;
		$model->save();


		$this->render('approve',array(
			'model'=>$model,
		));
	}

	public function actionReject($id)
	{
		$model=$this->loadModel($id);
		$dr=New Dokreject;
		$idtask = $model->outfrom;
		$task=Task::model()->findByPk($idtask);
		$task->status = 6;
		$task->save();
        $model->file="";
		$model->needA=1;
		$model->save();
        if(isset($_POST['Doctask']))
		{
			$dr->attributes=$_POST['Doctask'];
			if($dr->save())
				$this->redirect(array('task/indem'));
		}

		$this->render('reject',array(
			'model'=>$model,
			'dr'=>$dr,
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
		$dataProvider=new CActiveDataProvider('Doctask');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Doctask('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Doctask']))
			$model->attributes=$_GET['Doctask'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Doctask the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Doctask::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Doctask $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='doctask-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
