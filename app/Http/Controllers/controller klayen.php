<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalayen extends Controller
{
    public function klayen()
    {
        $this->tipe = 'id';
        $this->tipe = 'nama';
        $this->tipe = 'pengalaman';
    } 
}