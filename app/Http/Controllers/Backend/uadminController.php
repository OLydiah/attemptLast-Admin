<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\tbl_experiences;
use Illuminate\Http\Request;

class uadminController extends Controller
{
    public function index(){
        $experiences =tbl_experiences::all();
        return view('uadmin.index', compact('experiences'));
    }
}
