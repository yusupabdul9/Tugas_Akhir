<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatOleh2;

class PusatOleh2Controller extends Controller
{
  public function ShowTempatOleh2()
  {
  	$temp_oleh2 = TempatOleh2::all();
  	return view('Admin.Page.PageTabel.DataPusatOleh2', ['temp_oleh2' => $temp_oleh2]);
  }
}
