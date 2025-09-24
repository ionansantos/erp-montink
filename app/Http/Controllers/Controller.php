<?php

namespace App\Http\Controllers;
use illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct(Request $request)
    {

    }
}
