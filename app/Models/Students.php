<?php

namespace App\Models;

use PDO; // sans cela, PDO serait interprété comme \App\Models\PDO
use \Illuminate\Support\Facades\DB;


class Students{
    public static function getStudents(){
        $pdo = DB::getPdo();
        $students = $pdo->query("select *
                                    from students
                                    ORDER BY id;")->fetchAll();
        return $students;
    }

    public static function addStudent($id, $firstName, $lastName){
        DB::table('Students')->insert([
            'id' => $id,
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }

    public static function deleteStudent($id) {
        DB::table('students')->where('id', '=', $id)->delete();
    }
    
}