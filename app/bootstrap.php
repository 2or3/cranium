<?php

require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/Service/models');
$loader->register();
