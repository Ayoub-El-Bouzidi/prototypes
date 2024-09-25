<?php
class Book{
    private $id;
    private $title;
    private $ISBN;
    public function __construct($title,$ISBN){
        $this->id = time();
        $this->title = $title;
        $this->ISBN = $ISBN;
    }
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getISBN(){
        return $this->ISBN;
    }
    public function setID( $id ){
        $this->id = $id;
    }
    public function setTitle( $title ){
        $this->title = $title;
    }
    public function setISBN( $ISBN ){
        $this->ISBN = $ISBN;
    }
}
// class Book{
//     private $id;
//     private $title;
//     private $ISBN;

//     public function __construct($id, $title, $ISBN){
//         $this->id = $id;
//         $this->title = $title;
//         $this->ISBN = $ISBN;
//     }
//     public function getId(){
//         return $this->id;
//     }
//     public function setId($id){
//         $this->id = $id;
//     }
//     public function getTitle(){
//         return $this->title;
//     }
//     public function setTitle($title){
//         $this->id = $title;
//     }
//     public function getISBN(){
//         return $this->ISBN;
//     }
//     public function setISBN($ISBN){
//         $this->id = $ISBN;
//     }
// }