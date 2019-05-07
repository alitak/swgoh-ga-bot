<?php

namespace App\Http\Controllers;

/**
 * Description of HomeController
 *
 * @author alitak
 */
class HomeController extends Controller
{

    public function index()
    {
        return view('home/index');
    }

}
