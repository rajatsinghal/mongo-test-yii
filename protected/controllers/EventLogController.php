<?php
class EventLogController {

	public function actionIndex() {
		if(isset($_POST['EventLog'])) {
			$log = EventLog::create($_POST['EventLog']);
			echo CJSON::encode(['status'=>'SUCCESS', 'id'=>$log->id]);
		}
	}

}