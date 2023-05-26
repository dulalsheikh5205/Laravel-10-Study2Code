<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        [
            'author'=>'Jane Austen',
            'title'=> 'Pride and Prejudice'
        ],
        [
            'author'=>'F. Scott Fitzgerald',
            'title'=>'The Great Gatsby'
        ],
        [
            'author'=> 'George Orwell',
            'title'=> '1984'
        ],
        [
            'author'=>'J.R.R. Tolkien',
            'title'=> 'The Lord of the Rings'
        ],
        [
            'author'=>'Harper Lee',
            'title'=>'To kill a Mockingbird'
        ]
    ];

    function books(){
        return $this->books;
    }
}
