<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodatasController extends Controller
{
    public function tampil()
    {
        $biodata = Biodata::all();
        return view('biodata',compact('biodata'));
    }
}
