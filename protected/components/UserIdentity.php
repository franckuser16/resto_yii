<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
		/**
		 * Authenticates a user.
		 * The example implementation makes sure if the username and password
		 * are both 'demo'.
		 * In practical applications, this should be changed to authenticate
		 * against some persistent user identity storage (e.g. database).
		 * @return boolean whether authentication succeeds.
		 */
		public function authenticate()
		{
		/*
		$users=array(
			// username => password
			'user'=>'tpinfo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
		 */
				ini_set('display_errors', 'On');
				error_reporting(E_ALL);

				$connection = ldap_connect(Yii::app()->params['ldap_host'], Yii::app()->params['ldap_port']);
				ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
				ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);

				if ($connection) {

						//try catch
						$bind = ldap_bind($connection, $this->username.'@'.Yii::app()->params['ldap_domain'], $this->password);
						if ($bind) {
								$this->errorCode=self::ERROR_NONE;
						} 
						else {
								$this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
						}
				}
				else {
						//a changer pour une erreur LDAP connexion
						$this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
				}

				return !$this->errorCode;

		}
}
