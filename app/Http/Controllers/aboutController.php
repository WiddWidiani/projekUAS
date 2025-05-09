<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;


class aboutController extends Controller
{
    public function index()
    {
        $about = about::latest()->first();

        return view('about', compact('about'));
    }
}
