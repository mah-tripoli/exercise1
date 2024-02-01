<?php

namespace App\Data;

class BookData
{
    public static function getBooks()
    {
        $books = [
            [
                "id" => 1,
                "title" => "To Kill a Mockingbird",
                "author" => "Harper Lee",
                "publication_year" => 1960,
                "isbn" => "978-0-06-112008-4",
            ],
            [
                "id" => 2,
                "title" => "1984",
                "author" => "George Orwell",
                "publication_year" => 1949,
                "isbn" => "978-0-452-28423-4"
            ],
            [
                "id" => 3,
                "title" => "The Great Gatsby",
                "author" => "F. Scott Fitzgerald",
                "publication_year" => 1925,
                "isbn" => "978-0-7432-7356-5"
            ],
            [
                "id" => 4,
                "title" => "Pride and Prejudice",
                "author" => "Jane Austen",
                "publication_year" => 1813,
                "isbn" => "978-0-521-82436-1"
            ],
            [
                "id" => 5,
                "title" => "The Catcher in the Rye",
                "author" => "J.D. Salinger",
                "publication_year" => 1951,
                "isbn" => "978-0-316-76948-1"
            ]
        ];

        // Add a 'available' property to each book
        foreach ($books as $k => $book) {
            $books[$k]['available'] = random_int(0, 1);
        }

        return $books;
    }
}
