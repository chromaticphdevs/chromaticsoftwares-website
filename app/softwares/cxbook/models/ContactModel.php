<?php   

    class ContactModel extends Model
    {
        public $table = 'cb_customer_contacts';

        public function addMultiple(array $contacts , $customer_id)
        {

            $sql = " INSERT INTO $this->table(customer_id , type , value) VALUES";

            $types = array_values($contacts['type']);

            $values = $contacts['value'];

            $counter = 0 ;
            
            foreach($types as $key => $row) 
            {
                $value = $values[$key];

                if($counter < $key) {
                    $sql .= ",";
                    $counter++;
                }

                $sql .= "('$customer_id' , '$row' , '$value')";
            }

            $this->db->query($sql);
            return $this->db->execute();
        }


        public function all($customer_id = null, $order_by = null , $limit = null)
        {
            return $this->dbHelper->resultSet(...[
                $this->table,
                '*',
                " customer_id = '{$customer_id}'"
            ]);
        }


        public function updateContact($contacts , $customer_id)
        {
            $hasError = false;

            foreach($contacts as $key => $row) 
            {
                $res = $this->update([
                    'type'  => $row['type'],
                    'value' => $row['value']
                ] , $row['id']);

                if(!$res)
                    $hasError = true;
            }
            //return false if error occured
            if($hasError)
                return false;
            return true;
        }


        public function clean($contacts)
        {
            $types = $contacts['type'];
            $values = $contacts['value'];

            foreach($types as $key => $type) 
            {
                if($type == 'email') {
                    $values[$key] = str_to_email($values[$key]); 
                }

                if($type == 'mobile') {
                    $values[$key] = str_to_mobile($values[$key]); 
                }

                if($type == 'tel') {
                    $values[$key] = trim($values[$key]); 
                }
            }

            return [
                'type' => $types,
                'value' => $values
            ];

        }

        public function getContacts(array $contacts)
        {
            if(empty($contacts))
                return FALSE;
            

            $cleanContacts = [];
            foreach($contacts as $key => $row) {
                if(!empty($row))
                    $cleanContacts[] = $row;
            }

            $implodedContacts = implode("','" , $cleanContacts);

            return parent::all(" value in('{$implodedContacts}')");
        }
    }