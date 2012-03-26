<?php

/**
 * This is the model class for user settings.
 *
 */
class SettingsForm extends CFormModel
{
	public $components;
	public $params;
	public $name;

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
																	"domain" 	=> $settings['params']['ldap']['domain']),
								);

		$this->name 		=   $settings['name'];
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
			'adminEmail' => 'Adresse email administrateur',
		);
	}

	//methode perso equiv. d'ActiveRecord
	public function save($formSubmission)
	{
			Yii::import('system.vendors.SymfonyComponents.YAML.*');

			//comme dans ActiveRecord
			//$this.validate();

			//for each key in $formSubmission
			//if this.attributes.contains[key]
			//this.attributes[key] = $formSubmission[key];

			print_r($this->attributes);
			print_r(CMap::mergeArray($this->attributes, $formSubmission));
			$this->attributes=CMap::mergeArray($this->attributes, $formSubmission);
			print_r($this->attributes);
			$dumper = new sfYamlDumper();
			$yaml = $dumper->dump(CMap::mergeArray($this->attributes, $formSubmission), 3);
			return file_put_contents('/home/user/Sites/resto_yii/protected/config/config.yml', $yaml);
	}

}
