<?php

    use classes\Customer;

    appLoad('classes/Customer.php');

    class CustomerModel extends Model
    {
        public $table = 'cb_customers';

        public function __construct()
        {
            parent::__construct();

            $this->contact = appModel('ContactModel');
        }

        public function get($id)
        {
            $data = [
                $this->table ,
                '*',
                " id = '{$id}'"
            ];

            $results = $this->dbHelper->single(...$data);

            $customer = new Customer();

            $customer->id = $results->id;
            $customer->status = $results->status;
            $customer->account_id = $results->account_id;
            $customer->last_name = $results->last_name;
            $customer->first_name = $results->first_name;
            $customer->address = $results->address;
            $customer->company_name = $results->company_name;
            $customer->industry = $results->industry;
            $customer->notes = $results->notes;
            $customer->created_at = $results->created_at;
            $customer->contacts = $this->contact->all($results->id);

            return $customer;
        }


        public function all($where =null , $order_by = null , $limit = null)
        {
            $returnData = [];

            $data = [
                $this->table,
                '*',
                null,
                "first_name asc"
            ];

            $results = $this->dbHelper->resultSet(...$data);

            foreach($results as $key => $res)
            {
                $customer = new Customer();

                $customer->id = $res->id;
                $customer->status = $res->status;
                $customer->account_id = $res->account_id;
                $customer->last_name = $res->last_name;
                $customer->first_name = $res->first_name;
                $customer->address = $res->address;
                $customer->company_name = $res->company_name;
                $customer->industry = $res->industry;
                $customer->notes = $res->notes;
                $customer->created_at = $res->created_at;
                $customer->contacts = $this->contact->all($res->id);

                array_push($returnData , $customer);
            }


            return $returnData;
        }


        public function getAccountCustomersParams($account_id , $params = array())
        {

        }

        public function getAccountCustomersWithEmail($account_id)
        {
          $returnData = [];

          /*GET CUSTOMERS WITH EMAIL*/
          $this->db->query(
            "SELECT * FROM $this->table as c
              WHERE id in
              (SELECT cc.customer_id
                FROM cb_customer_contacts as cc
                WHERE type = 'email' and value !='' ORDER BY cc.id)
                AND c.account_id = '$account_id'
                ORDER BY c.first_name asc"
          );

          $results = $this->db->resultSet();

          foreach($results as $key => $res)
          {
              $customer = new Customer();

              $customer->id = $res->id;
              $customer->status = $res->status;
              $customer->account_id = $res->account_id;
              $customer->last_name = $res->last_name;
              $customer->first_name = $res->first_name;
              $customer->address = $res->address;
              $customer->company_name = $res->company_name;
              $customer->industry = $res->industry;
              $customer->notes = $res->notes;
              $customer->created_at = $res->created_at;
              $customer->contacts = $this->contact->all($res->id);

              array_push($returnData , $customer);
          }


          return $returnData;
        }
        public function getAccountCustomers($account_id)
        {
            $returnData = [];

            $results = $this->dbHelper->resultSet(...[
                $this->table,
                '*',
                " account_id = '{$account_id}'"
            ]);

            foreach($results as $key => $res)
            {
                $customer = new Customer();

                $customer->id = $res->id;
                $customer->status = $res->status;
                $customer->account_id = $res->account_id;
                $customer->last_name = $res->last_name;
                $customer->first_name = $res->first_name;
                $customer->address = $res->address;
                $customer->company_name = $res->company_name;
                $customer->industry = $res->industry;
                $customer->notes = $res->notes;
                $customer->created_at = $res->created_at;
                $customer->contacts = $this->contact->all($res->id);

                array_push($returnData , $customer);
            }


            return $returnData;
        }
    }
