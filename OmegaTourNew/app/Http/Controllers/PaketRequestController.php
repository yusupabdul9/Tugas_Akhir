<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketRequest;

class PaketRequestController extends Controller
{
  public function ShowPaketRequest()
  {
  	$pak_request = PaketRequest::all();
  	return view('Admin.Page.PageTabel.DataPaketRequest', ['pak_request' => $pak_request]);
  }
}
