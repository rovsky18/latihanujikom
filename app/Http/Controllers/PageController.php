<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Jadwal;

class PageController extends Controller
{
    public function index(){
    	return view('layout.index');
    }
}
