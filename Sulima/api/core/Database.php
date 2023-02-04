<?php
    class DAtabase{
        //DB Params:
        private $host = 'localhost';
        private $db_name = 'sulima';
        private $username = 'root';
        private $password = '';
        private $con;

        // DB Connect:
        public  function connect()
        {
            $this->con = null;

                try{
                    $this->con = new PDO('mysqli:host='.$this->host.';db_name'.$this->db_name,$this->username,$this->password);
                    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo 'Connection Error: ' . $e->getMessage();
                }
                return $this->con;
        }
    }