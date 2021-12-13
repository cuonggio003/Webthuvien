<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller implements BaseInterface
{
    function index() {
        return view('backend.home');
    }

    function create()
    {
        // TODO: Implement create() method.
    }

    function destroy($id)
    {
        // TODO: Implement delete() method.
    }
}
