<?php

class DataBase {
    public $books = [];
    private $filePath;

    public function __construct($filePath="../DB/txt.txt") {
        $this->filePath = $filePath;
        $this->getData();
    }

    public function getData() {
        if (file_exists($this->filePath)) {
            $content = file_get_contents($this->filePath);
            
            // Check if the content is empty or not unserializable
            if (!empty($content)) {
                $data = unserialize($content);
                
                // Check if unserialization was successful and if $data has the 'books' property
                if ($data && isset($data->books)) {
                    $this->books = $data->books;
                } else {
                    // If unserialization fails, initialize an empty books array
                    $this->books = [];
                }
            }
        }
    }

    public function setData() {
        // Serialize the current object and save it to the file
        $data = serialize($this);
        file_put_contents($this->filePath, $data);
    }

    public function saveData($book) {
        // Add the new book to the books array
        $this->books[] = $book;

        // Save the updated books array to the file
        $this->setData();
    }
}























// class DataBase{
//     public $books = [];
//     private $filePath;

//     public function __construct($filePath="../DB/db.txt"){
//         $this->filePath=$filePath;
        
//     }
//     public function retrievdata(){
//         if (file_exists($this->filePath)) {
//             $content = file_get_contents($this->filePath);
//             $data = unserialize($content);
//             $this->books= $data->books;
//         }
//     }
//     public function storData(){
//         $tempfilpath = $this->filePath;
//         $data = serialize($this);
//         file_put_contents($tempfilpath, $data);
//     }
//     public function saveData(){
//         $this->storData();
//     }
// }