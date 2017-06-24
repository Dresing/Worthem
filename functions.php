<?php

//Fetch the autoloader for everythong to work
require $_SERVER['DOCUMENT_ROOT'] . '/Worthem/' . 'vendor/autoload.php';

//Set all variables for the container and setup dependencies
require 'config/bootstrap.php';

//Wordpress specific settings
require 'config/settings.php';

//Include all custom post-types
require 'config/custom_posts.php';









