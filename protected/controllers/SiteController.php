<?php
class SiteController extends Controller {
	
	public function actionIndex() {
		echo CJSON::encode(['status' => 'Hola! Wecome to the test..']);
	}

}