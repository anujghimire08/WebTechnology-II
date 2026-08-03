<?php
class Book
{

  public function __construct(private string $title, private string $author, private int $ISBN, private string $Status) {}

  public function getBookInfo(): string
  {
    return "Title: $this->title, Author: $this->author, ISBN: $this->ISBN, Status: $this->Status";
  }
}

 $Book1 = new Book("Jeevan Kada ki Phool", "Jhamak Ghimire", 138, "Available");
echo $Book1->getBookInfo();