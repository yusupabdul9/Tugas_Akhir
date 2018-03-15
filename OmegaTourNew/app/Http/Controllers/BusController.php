<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;

class BusController extends Controller
{
  public function ShowBus()
  {
  	$buses = Bus::all();
  	return view('Admin.Page.PageTabel.DataBus', ['buses' => $buses]);
  }

}
