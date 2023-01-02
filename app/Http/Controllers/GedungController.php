<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:super administrator|administrator|unit']);
    }

    public function index()
    {

        $this->authorize('read gedung');

        return view('gedung.index');
    }
}
