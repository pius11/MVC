<?php

class Mahasiswa_model{

private $dbh; //database handler
private $stmt;


public function __construct() {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
        $this->dbh=new PDO($dsn,'root','');

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}



    // private $mhs = [
    //     [
    //         "nama"=> "i wayan pius wiprajana samita",
    //         "nim"=>"2315354034",
    //         "prodi"=>"D4 TRPL"
    //     ],
    //     [
    //         "nama"=> "i komang emo wijaya",
    //         "nim"=>"2315354078",
    //         "prodi"=>"D4 MI"
    //     ],
    //     [
    //         "nama"=> "santo evorius jeho",
    //         "nim"=>"2315354008",
    //         "prodi"=>"D2 JARINGAN"
    //     ]
    //     ];


        public function getAllMahasiswa() {
            $this->stmt = $this->dbh->prepare('select*from mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}