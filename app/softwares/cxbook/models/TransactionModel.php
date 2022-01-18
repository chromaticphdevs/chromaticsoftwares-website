<?php

  class TransactionModel extends Model
  {

    public $table = 'cb_transactions';


    public function getAll($customer_id)
    {
      $data = [
        $this->table,
        '*',
        "customer_id = '$customer_id'"
      ];
      
      return $this->dbHelper->resultSet(...$data);
    }
  }
