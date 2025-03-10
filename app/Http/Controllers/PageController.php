<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
    } 
 
    public function about() { 
        return '2341760147 - Mochamad Zacky Yudha A'; 
    } 
 
    public function articles($articleID) { 
        return 'Halaman Artikel dengan ID ' .$articleID;
    }
}
