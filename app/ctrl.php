<?php


require_once dirname(__FILE__).'/../config.php';


$action = $_REQUEST['action'];

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/calc/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
	break;
	case 'action2' :
	break;

}