<?php

/**
 * This is the model class for user settings.
 *
 */
class SettingsForm extends CFormModel
{
	public $components;
	public $params;

	function __construct()
	{
		parent::__construct();
		Yii::import('system.vendors.SymfonyComponents.YAML.*');
		$settings = sfYaml::load(/*Yii::app()->params['basePath'].*/'/home/user/Sites/resto_yii/protected/config/config.yml');

		$this->components 	= 	array( 	"db" => array( 	"connectionString" 	=> $settings['components']['db']['connectionString'],
														"emulatePrepare" 	=> $settings['components']['db']['emulatePrepare'],
														"username" 			=> $settings['components']['db']['username'],
														"password" 			=> $settings['components']['db']['password'],
														"charset" 			=> $settings['components']['db']['charset']
												),
								);
		
		$this->params 		= 	array( 	"adminEmail" 	=> $settings['params']['adminEmail'],
										"ldap" 			=> array( 	"host" 		=> $settings['params']['ldap']['host'],
																	"port" 		=> $settings['params']['ldap']['port'],
																	"domain" 	=> $settings['params']['ldap']['domain'])
								);
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('connectionString, emulatePrepare, username, password, charset, adminEmail', 'required'),
			array('adminEmail', 'email'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
			return array(
			'connectionString' => 'Connection string',
			'adminEmail' => 'adresse email administrateur',
		);
	}

}
