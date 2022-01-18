<?php
    class MarketingLogModel extends Model
    {
        public $table = 'cb_marketing_logs';

        public function __construct()
        {
            parent::__construct();

            $this->logItem = appModel('MarketingLogitemModel');
        }
        public function getByAccount($account_id)
        {
            $returnData = [];

            $logs = $this->dbHelper->resultSet(...[
                $this->table,
                '*',
                " account_id = '{$account_id}'"
            ]);

            foreach($logs as $key => $log) {

                
                $log->items = $this->logItem->getByLog($log->id);

                array_push($returnData , $log);
            }

            return $returnData;
        }
    }