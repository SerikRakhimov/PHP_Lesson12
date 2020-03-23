<?php


namespace Step\Controllers;

use Klein\Request;
use Step\Core\Hash;
use Step\Models\Book;
use Step\Models\User;

class SiteController
{
    function index() {

        $books = Book::all();
        $books = array_reverse($books);
        $books = array_slice($books, 0, 3);

        //  Этот код выполнить один раз при запуске программы
//        $user = new User();
//        $user->username = 'admin';
//        $user->password = Hash::make('admin');
//        $user->admin = 1;
//        $user->save();


        return view('index', [
            'title' => 'Главная',
            'books' => $books
        ]);
    }
}
