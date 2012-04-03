<?php

class SettingsController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index', 'update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' actions
				'actions'=>array('adminSettings'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		$model=new SettingsForm;
		$adminForm = "";

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SettingsForm']))
		{
			print_r(CMap::mergeArray($model->attributes, $_POST['SettingsForm']));
			//$model->attributes=CMap::mergeArray($model->attributes, $_POST['SettingsForm']);
			if($model->save($_POST['SettingsForm']))
			{
				$this->redirect(array('index'));
			}
		}

		$this->render('update',array(
				'model'=>$model,
				'adminForm'=>$adminForm,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new SettingsForm;
		$adminForm = "";

		$this->render('update',array(
				'model'=>$model,
				'adminForm'=>$adminForm,
		));
	}

	/**
	 * show administation settings
	 */
	public function actionAdminSettings()
	{
		$model=new SettingsForm;
		$adminForm = "";

		if(Yii::app()->request->isAjaxRequest)
		{
				$adminForm = $this->renderPartial('_adminForm', array('model'=>$model),true, true);
				$this->renderPartial('_ajaxContent', array('adminForm'=>$adminForm),false, true);
		}
		else
				throw new CHttpException(400,
						Yii::t('app', 'Invalid request. Please do not repeat this request again.'));
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='yii-log-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
