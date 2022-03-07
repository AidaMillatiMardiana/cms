<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Hi! Selamat Datang";
        }
    public function about() {
        echo "Nama : Aida Millati Mardiana";
        echo "NIM : 2041720071";
    }
    public function articlepage($id='1') {
        echo "Halaman Articles dengan ID" . $id;
        }
}
