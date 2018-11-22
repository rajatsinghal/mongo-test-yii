<?php
class EventLogController extends Controller {

	public function actionIndex() {
		if(isset($_GET['EventLog'])) {
			$log = EventLog::create($_GET['EventLog']);
			echo CJSON::encode(['status'=>'SUCCESS', 'id'=>$log->_id]);
		}
	}

}