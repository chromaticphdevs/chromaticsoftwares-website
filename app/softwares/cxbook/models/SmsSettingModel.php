<?php   

    class SmsSettingModel extends Model
    {
        public $table  = 'cb_sms_settings';

        public function getByAccount($account_id)
        {
            $data = [
                $this->table,
                '*',
                "account_id = '{$account_id}'"
            ];

            return $this->dbHelper->single(...$data);
        }
    }