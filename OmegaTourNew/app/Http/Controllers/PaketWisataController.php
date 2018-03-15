<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketWisata;

class PaketWisataController extends Controller
{
  public function ShowPaketWisata()
  {
  	$pak_wisata = PaketWisata::all();
  	return view('Admin.Page.PageTabel.DataPaketWisata', ['pak_wisata' => $pak_wisata]);
  }
}
