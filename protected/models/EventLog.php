<?php
class EventLog extends EMongoDocument {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'test_log';
	}

	public function collectionName() {
        return 'test_log';
    }

	public function rules() {
		return array(
			array('user_id, event_type', 'required'),
            array('user_id, created_at', 'numerical', 'integerOnly'=>true),
            array('event_type, app_version, app_platform', 'safe'),
		);
	}

	public function relations() {
		return array(
		);
    }
    
    public function beforeSave() {
        if($this->isNewRecord)
            $this->created_at = time();
        return parent::beforeSave();
    }
    
    public static function create($attributes) {
        $log = new EventLog;
        $log->attributes = $attributes;
        $log->save();
        return $log;
    }
    
}