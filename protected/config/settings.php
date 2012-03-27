<?php

//import the Symfony YAML component
//return a PHP array filed with user specific settings
//to be merged with the one in config/main.php

Yii::import('system.vendors.SymfonyComponents.YAML.*');

return sfYaml::load(dirname(__FILE__).'/config.yml');
