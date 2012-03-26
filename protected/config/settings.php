<?php

//fusion du tableau PHP de config/main.php
//avec le tableau PHP issu du fichier YAML config/config.yml
//contenant les param utilisateur (administrateur)
//pour que ce fichier soit appelé il doit remplacer config/main.php
//dans index.php

//importation du composant Symfony YAML
Yii::import('system.vendors.SymfonyComponents.YAML.*');

return sfYaml::load(dirname(__FILE__).'/config.yml');
