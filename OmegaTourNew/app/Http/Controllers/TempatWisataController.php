<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatWisata;

class TempatWisataController extends Controller
{
  public function ShowTempatWisata()
  {
  	$temp_wisata = TempatWisata::all();
  	return view('Admin.Page.PageTabel.DataTempatWisata', ['temp_wisata' => $temp_wisata]);
  }

}
