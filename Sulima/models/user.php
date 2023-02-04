<?php
    class User{
    // DB stuff
    private $con;
    private $table = 'user';

    // Post Properties
    public $id;
    public $email;
    public $pass;
    public $key;

    // Constructor with DB
    public function __construct($db)
    {
        $this->con = $db;
    }    

    // Get Users
    public function read()
    {
        // Create query
        $query ='SELECT 
                      e.email as email,
                      u.id,
                      u.pass,
                      u.key
                  FROM
                      '.$this->table.' u
                  LEFT JOIN 
                        
                    ';
    }

}

    

