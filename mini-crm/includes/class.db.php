<?php

class Db
{
    private $host = "localhost";
    private $database = "minicrm";
    private $user = "root";
    private $password = "password";

    private $dsn;
    protected $db;

    public function __construct()
    {
        $this->dsn = "mysql:dbname={$this->database};host={$this->host}";
        $db = new PDO($this->dsn, $this->user, $this->password);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->db = $db;
    }

    public function getAllUsers()
    {
        $q = $this->db->query("SELECT * FROM users");
        return $q->fetchAll();
    }
    public function insertUser($fname, $sname, $dob)
    {
        $sql = 'INSERT INTO users(firstname, lastname, dob) VALUES(:fname, :sname, :dob)';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['fname' => $fname, 'sname' => $sname, 'dob' => $dob]);
    }
}
