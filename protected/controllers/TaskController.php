<?php

class TaskController extends Controller
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
				'actions'=>array('index','indem','view','approve','reject','load','coba','edittask','dokreject','simpan'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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
	public function actionCoba(){

        $dp = new CActiveDataProvider('Task', array(
            'sort'=>array(
                'attributes'=>array(
                      'idPic6',
                 ),
                 'defaultOrder' => 'idPic6',
            ),
            'pagination' => array(
              'pagesize' => 30,
            ),
        ));

        $this->render('coba', array('dp' => $dp));

	}

	public function actionLoadproduk()
        {

        }
				public function actionLoad()
							{
									$this->render('load');
							}
				public function actionSimpan($id)
			        {
								$model=$this->loadmodel($id);
								$fileada = Yii::app()->db->createCommand("SELECT COUNT(file) FROM doctask where forinput5 ='".$model->idLevel5."' AND forinput4 ='".$model->idItem."' AND file != '' ")->queryScalar();
							  $jumlahfile = Yii::app()->db->createCommand("SELECT COUNT(file) FROM doctask where forinput5 ='".$model->idLevel5."'AND forinput4 ='".$model->idItem."'")->queryScalar();
							  $hasil = $jumlahfile - $fileada;

								if($hasil == 0){
									$model->status = $model->status + 1;
								}

								$model->save();
								$this->redirect(array('task/index',array(

								)));
			        }
	public function actionEdittask($id)
				{
					$model=$this->loadModel($id);
					$dokinput = new Doctask();

					$old = $model->attachment;
			    $val = FALSE;
					if(isset($_POST['Task']))
					{
						$model->attributes=$_POST['Task'];
			                        $model->attachment = CUploadedFile::getInstance($model, 'attachment');
			                        if (empty($model->attachment)) {
			                            $model->attachment = $old;
			                        } else {
			                            $val = TRUE;
			                        }
			                        if ($model->validate()) {
			                            if ($val) {
			                                $path = Yii::getPathOfAlias("webroot"). '/attachment/'.$model->attachment;
			                                $del = Yii::getPathOfAlias("webroot"). '/attachment/'.$old;
			                                if (is_file($del)) {
			                                    unlink($del);
			                                }
			                                $model->attachment->saveAs($path);
			                            }

			                            $model->save();
			                            $this->redirect(array('task/index'));
			                        }
					}

					$this->render('update',array(
						'model'=>$model,
						'dokinput'=>$dokinput,
					));
				}


	public function actionUpdate($id)
	{
		$modal=$this->loadModel($id);
		$i = 0;
		$dok = Doctask::Model()->findAll('outfrom=:outfrom',array(':outfrom'=>$id));
	 foreach ($dok as $doc) {

	 $na =  $doc->needA;
	 $i = $i+$na;
	 }

	 if($i == 0){
		 $modal->progres = 100;
		 $modal->status = 5;
		 $modal->save();
		 $ia = $id + 1;
		 $next=$this->loadmodel($ia);
		 $next->status = 3;
		 $next->save();


	 }
	else {
	    $modal->progres = 100;
		$modal->status = 4;
		$modal->save();

	}
	$model=$this->loadModel($id);

	$this->render('load',array(
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

		if(isset($_POST['Task']))
		{
			$model->attributes=$_POST['Task'];
			if($model->save())
				$this->redirect(array('task/index'));
		}

		$this->render('aprove',array(
			'model'=>$model,
		));
	}

	public function actionReject($id)
	{
		$model=$this->loadModel($id);
		$modal=Doctask::model()->findByPk($id);
		$dr=New Dokreject ();
		$model->progres = 0;
		$model->status = "Rejected";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Task']))
		{
			$model->attributes=$_POST['Task'];
			if($model->save())
				$this->redirect(array('task/index'));
		}

		$this->render('reject',array(
			'model'=>$model,
			'dr'=>$dr,
			'modal'=>$modal,
		));
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */

	public function actionDokreject()
	{
	    $modal= New Dokreject('search');
			$this->render('dokreject',array(
			'modal'=>$modal,
		));
	}

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
		$model=new Task;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Task']))
		{
			$model->attributes=$_POST['Task'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	public function actionUpdatew($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Task']))
		{
			$model->attributes=$_POST['Task'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
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
		$model=new Task('search');

		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Task']))
			$model->attributes=$_GET['Task'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	public function actionIndem()
	{
		$model=new Task('search');
	/*	$task=new CActiveDataProvider('Task', array(
				 'criteria' => array(
						'idPic6' => array(
							'asc' => 'idPic6 ASC, idLevel6 ASC',
							'desc' => 'idPic6 DESC, idLevel6 ASC',
						)
				 ),
				'defaultOrder' => 'idPic6, idLevel6',

			'pagination' => array(
				 'pagesize' => 30,
			),
	)); */
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Task']))
			$model->attributes=$_GET['Task'];

		$this->render('indem',array(
			'model'=>$model,

		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Task('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Task']))
			$model->attributes=$_GET['Task'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Task the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Task::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Task $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='task-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
