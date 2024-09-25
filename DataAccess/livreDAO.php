<?php
require '../DB/database.php';
// class BookDAO{
//     public function getBooks(){
//         $db = new DataBase();
//         return $db->books;
//     }
//     public function setBook($book){
//         $db = new DataBase();
//         $db->books[]= $book;
//         $db->saveData();
//     }
// }

class BookDAO{
    public function getBooks(){
        $db = new DataBase();
        return $db->books;
    }
    public function setBooks($books){
        $db = new DataBase();
        $db->books[]=$books;
        $db->saveData($books);  
    }
}