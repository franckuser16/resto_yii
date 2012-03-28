<?php

class ActionsController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('@'),
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
	/*public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}*/

	/**
	 * Save a Computer/Partition to an Image
	 */
	public function actionSave()
	{
	}

	/**
	 * Restore a Computer/Room from an Image
	 */
	public function actionRestore()
	{
	}

	/**
	 * Lists all Computers.
	 */
	public function actionIndex()
	{
		$model=new Computers('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Computers']))
			$model->attributes=$_GET['Computers'];

		$this->render('index',array(
			'model'=>$model,
		));
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
