<?php

namespace App\Http\Controllers;

use App\Dummy;
use Illuminate\Http\Request;

class DummyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dummy = Dummy::orderBy('id', 'ASC')->paginate(6);

        return $dummy->toJson(JSON_PRETTY_PRINT);

    }
}
