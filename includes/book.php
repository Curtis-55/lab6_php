<?php


class Book {
   public string $image;
   public string $title;
   public string $author;
   public int $rating;
   public float $price;
   public int $quantity;


   public function __construct(string $image, string $title, string $author, int $rating, float $price, int $quantity) {
       $this->image = $image;
       $this->title = $title;
       $this->author = $author;
       $this->rating = $rating;
       $this->price = $price;
       $this->quantity = $quantity;
   }


       public function checkStock(): string {
           if ($this->quantity > 0) {
               return "In Stock";
           } else {
               return "Out of Stock";
           }
       }


       public function displayRating(): string {
           $stars = "";
           for ($i = 0; $i < $this->rating; $i++) {
               $stars .= "<i class='fa fa-star'></i>";
           }
           for ($j = $this->rating; $j < 5; $j++) {
               $stars .= "<i class='fa fa-star-o'></i>";
           }
           return $stars;
       }


       public function buy(): int {
           if ($this->quantity > 0) {
               $this->quantity--;
       }
           return $this->quantity;
       }
}


$books = [new Book("images/hunger-games.jpeg", "The Hunger Games", "Suzanne Collins", 5, 14.99, 1),
         new Book("images/catching-fire.jpeg", "Catching Fire", "Suzanne Collins", 4, 13.99, 3),
         new Book("images/mockingjay.jpeg", "Mockingjay", "Suzanne Collins", 3, 10.99, 5)];




?>

