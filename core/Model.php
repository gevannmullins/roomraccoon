<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:../app/database.db');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}