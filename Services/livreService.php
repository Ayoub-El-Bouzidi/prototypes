<?php 
require '../DataAccess/livreDAO.php';

class BookServices{
    public function getBooks(){
        $bookDAO = new BookDAO();
        return $bookDAO->getBooks();
    }
    public function setBooks($books){
        $bookDAO = new BookDAO();
        $bookDAO->setBooks($books);
    }
}
// class BookServices{
//     public function getBooks(){
//         $db = new BookDAO();
//         return $db->getBooks();
//     }
//     public function setBook($book){
//         $bookDAO = new BookDAO();
//         $bookDAO->setBook($book);
//     }
// }