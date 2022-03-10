<?php
namespace App\Model;

use App\Database\Db;

class Student extends Db {

    public function getAllStudents() {
        $sql ="
            SELECT * FROM tb_directer
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>