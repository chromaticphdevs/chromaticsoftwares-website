<?php   

    class AutoProps 
    {
        
        public function __set($property, $value)
        {
            $this->$property= $value;
        }

        public function __get($property)
        {
            $this->$property;
        }
    }