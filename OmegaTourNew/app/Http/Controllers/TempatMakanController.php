<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempatMakan;

class TempatMakanController extends Controller
{
  public function ShowTempatMakan()
  {
  	$temp_makan = TempatMakan::all();
  	return view('Admin.Page.PageTabel.DataTempatMakan', ['temp_makan' => $temp_makan]);
  }
}
