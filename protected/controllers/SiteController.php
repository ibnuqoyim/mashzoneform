<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
	public $err;
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                    'class'=>'CCaptchaAction',
                    'backColor'=>0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                    'class'=>'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $model=new Progres('search');
		$model2=new Task('search');
        $modil3=new Level6('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Progres']))
			$model->attributes=$_GET['Progres'];

		$this->render('index',array(
			'model'=>$model,
			'model2'=>$model2,
            'modil3'=>$modil3,
		));
    }
    public function actionIndexi()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
       $model=new Progres('search');
		$model2=new Task('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Progres']))
			$model->attributes=$_GET['Progres'];

		$this->render('indexi',array(
			'model'=>$model,
			'model2'=>$model2,
		));
    }






    public function actionRegistrasi(){
        $model=new Penghuni;
        $criteria=new CDbCriteria;
        $criteria->condition = "kodeAsrama != 'INT'";
        $asramas = Asrama::model()->findAll($criteria);

        if(isset($_POST['Penghuni']))
        {
            $model->attributes=$_POST['Penghuni'];
            $cek = Penghuni::model()->findByAttributes(array('nomorIdentitas'=>$model->nomorIdentitas));

            $isinya=$this->generateSalt();
            $dua=$model->password;
            $model->enkrip=$isinya;
            $model->password=$this->hashPassword($dua,$isinya);

            //if($cek->nomorIdentitas == $model->nomorIdentitas){
            if(isset($cek)){
                $this->redirect(array('maaf'));
            }else{
                if($model->save()){
                    $this->redirect(array('conf','id'=>$model->id));
                }
            }
        }

        $this->render('registrasi',array(
            'model'=>$model,
            'asramas'=>$asramas,
        ));
    }

    public function actionLoadJurusan()
    {
        $data= Jurusan::model()->findAllByAttributes(array('idFakultas'=>$_POST['id']));
        $data=CHtml::listData($data,'id','jurusan');

        echo "<option value=''>Pilih Jurusan</option>";
        foreach($data as $value=>$idJurusan)
        echo CHtml::tag('option', array('value'=>$value),CHtml::encode($idJurusan),true);
    }

    public function actionConf($id){
        $model = $this->loadPenghuni($id);
        $this->render('regconf',array(
            'model'=>$model,
        ));
    }

    public function actionMaaf(){
        $this->render('maaf');
    }

    public function loadPenghuni($id)
    {
            $model=Penghuni::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }

    public function hashPassword($password,$salt)
    {
        return md5($salt.$password);
    }

    protected function generateSalt()
    {
        return uniqid('',true);
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
                if(Yii::app()->request->isAjaxRequest)
                        echo $error['message'];
                else
                        $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model=new ContactForm;
        if(isset($_POST['ContactForm']))
        {
            $model->attributes=$_POST['ContactForm'];
            if($model->validate())
            {
                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
                $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
                $headers="From: $name <{$model->email}>\r\n".
                        "Reply-To: {$model->email}\r\n".
                        "MIME-Version: 1.0\r\n".
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact',array('model'=>$model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model=new LoginForm;
		$model2=new User;
        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()){
				if(Yii::app()->user->role == 'Manager'){
					$this->redirect(array('task/indem'));
				} else {
                $this->redirect(array('task/index'));}
            }
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }


    public function actionLoginPenghuni()
    {
        $model=new LoginFormPenghuni;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form-penghuni')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginFormPenghuni']))
        {
            $model->attributes=$_POST['LoginFormPenghuni'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()){
                $this->redirect(array('dashboardPenghuni/index'));
            }
            else {
                 $this->render('loginPenghuni',array('model'=>$model , 'err'=>1));
            }
        }
        // display the login form
        $this->render('loginPenghuni',array('model'=>$model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function loadBerita($id)
    {
            $model=Post::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }

    public function bulan($stringbulan)
    {
        $angka=array('01','02','03','04','05','06','07','08','09','10','11','12');
        $huruf=array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des');

        $konversi=str_ireplace($angka,$huruf,$stringbulan);
        return $konversi;
    }
}
