<?php


namespace App\Http\Controllers;




use Illuminate\Http\Request;

interface BaseInterface
{
    function index();
    function create();
    function destroy($id);
//    public function search(Request $request);
//    public function edit($id);


}
