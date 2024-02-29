<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public $data = [];
    public function index(){
       $this->data['title'] = "View của table";
        return view('table',$this->data);
    }
}
