<?php
class Book {
    private $title;
    private $ISBN;

    public function __construct($title, $ISBN) {
        $this->title = $title;
        $this->ISBN = $ISBN;
    }

    // Optionally, implement a method to return the properties if needed
    public function settitle($title) {
         $this->title = $title;
    }

    public function setISBN($ISBN) {
         $this->ISBN = $ISBN;
    }
    public function gettitle() {
        return $this->title;
    }

    public function getISBN() {
        return $this->ISBN;
    }
    public function Display() {
    return "title : " . $this->title ." ISBN : ". $this->ISBN;
    }
}

$title = readline("donne title :");
$ISBN = readline("donne ISBN :");

$book = new Book($title,$ISBN);

$serializedData = serialize($book);

// // Specify the file path
$filePath = 'user.txt';

// // Write the serialized data to a text file
file_put_contents($filePath, $serializedData);
$serializedDataFromFile = file_get_contents($filePath);

// Unserialize the data to get the original object
$retrievedUser = unserialize($serializedDataFromFile);
echo $retrievedUser->Display();






?>  