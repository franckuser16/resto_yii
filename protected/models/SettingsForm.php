<?php

/**
 * This is the model class for user settings.
 *
 */
class SettingsForm extends CFormModel
{
	public $connectionString;
	public $emulatePrepare;
	public $username;
	public $password;
	public $charset;

	function __construct()
	{
		parent::__construct();
		Yii::import('system.vendors.SymfonyComponents.YAML.*');
		$settings = sfYaml::load(/*Yii::app()->params['basePath'].*/'/home/user/Sites/resto_yii/protected/config/config.yml');
		$this->connectionString = $settings['components']['db']['connectionString'];
		$this->emulatePrepare   = $settings['components']['db']['emulatePrepare'];
		$this->username         = $settings['components']['db']['username'];
		$this->password         = $settings['components']['db']['password'];
		$this->charset          = $settings['components']['db']['charset'];
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('connectionString, emulatePrepare, username, password, charset', 'required'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
			return array(
			'connectionString' => 'Connection string',
		);
	}

}

