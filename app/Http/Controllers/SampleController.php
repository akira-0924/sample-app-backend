<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SampleRequest;

class SampleController extends Controller
{
    public function index(SampleRequest $request)
    {
        dd($request);
    }
}
