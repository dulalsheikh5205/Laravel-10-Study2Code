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

    function getBook($id){
        // return $id;
        $bookId = $id - 1;
        return $this->books[$bookId];
    }
    function getBookField($id, $field){ // আমরা route এর মধ্যে যত parameter ধরবো, ঠিক তেমনি function এর মধ্যে তত parameter argument হিসেবে ধরতে হবে
        $bookId = $id - 1;
        $book = $this->books[$bookId];
        return $book[$field];
    }

    // function getBookAuthor($id){
    //     // return $id;
    //     $bookId = $id - 1;
    //     return $this->books[$bookId]['author'];
    // }

    // function getBookTitle($id){
    //     // return $id;
    //     $bookId = $id - 1;
    //     return $this->books[$bookId]['title'];
    // }

    function createBook(Request $request){
        // return "new post request";
         /* laravel এ যখন একটা নতুন post request তৈরি করবেন, তখন laravel কে বলে দিতে হবে- Insomnia or Postman, বাহিরে থেকে post করেন বা javascript থেকে post করেন ajax দিয়ে, তাহলে বলে দিতে হবে - এখানে csrf token check করবে না, csrf হচ্ছে special mechanism- laravel এটা দিয়ে check করে যে, আসলে আপনার request টা website থেকে আসলে কিনা, আমরা যখন javascript, api দিয়ে পাঠাচ্ছি অথবা postman বা Insomnia এ ধরনের tool দিয়ে request করতেছি, তখন তো request টা website তৈরি হচ্ছে না, বাহিরে থেকে আসতেছে, ওই সময় যাতে csrf token যাতে laravel check না করে,এটা specially বলে দিতে হয়, csrf হচ্ছে এক ধরনের  ciber attack prevent করার একটা technic,
            so, app=>HTTP=>middleware=>VerifyCsrfToken.php
            or ctrl+p = VerifyCsrfToken.php

            তারপর route এর url এর নাম single quotation দিয়ে দিলেই হবে।
             protected $except = [
            'books'
            ];
         */

            $author = $request->get('author'); // get method এঁর মধ্যে 'author' or 'title' html form এঁর field থেকে data আসবে বা ধরবে
            $title = $request->get('title');

            return "Author = {$author} and Title = {$title}";
    }

}
