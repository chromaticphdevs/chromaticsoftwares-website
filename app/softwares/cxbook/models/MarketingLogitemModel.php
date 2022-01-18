<?php

    class MarketingLogitemModel extends Model
    {
        public $table = 'cb_marketing_log_items';

        public function getByLog($log_id)
        {
            $this->db->query(

                "SELECT log_items.* , customers.id as customer_id ,
                    concat(first_name , ' ', last_name) as full_name
                    FROM $this->table as log_items
                    LEFT JOIN cb_customers as customers
                        ON customers.id = log_items.customer_id
                    WHERE log_id = '{$log_id}'"
            );

            return $this->db->resultSet();
        }
    }
