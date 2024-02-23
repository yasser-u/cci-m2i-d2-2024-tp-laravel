<?php

namespace App\Http\Controllers;

use App\Models\Associate;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class AssocierController extends Controller
{
    public function index(Request $request): View
    {
        return view('associates.index', ['associates' => Associate::all()]);
    }
}
