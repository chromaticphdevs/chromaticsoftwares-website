<?php
  class InquiryModel extends Model
  {
    public $table = 'inquiries';


    public function getByEmail($email)
    {
      $data = [
        $this->table ,
        '*',
        " email = '{$email}'"
      ];

      return $this->dbHelper->resultSet(...$data);
    }
  }
