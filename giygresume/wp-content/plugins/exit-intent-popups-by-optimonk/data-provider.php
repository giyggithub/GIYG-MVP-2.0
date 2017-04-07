<?php

require_once dirname(dirname(dirname(__DIR__))) . '/wp-load.php';
require_once 'wc-attributes.php';

WcAttributes::getVariables( urldecode($_POST['url']) );