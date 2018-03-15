<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class PesananController extends Controller
{
  public function ShowPesanan()
  {
  	$pesanans = Pesanan::all();
  	return view('Admin.Page.PageTabel.DataPesanan', ['pesanans' => $pesanans]);
  }
}
