<?php

namespace App\Http\Controllers\Admin;

/**
 * Description of SquadsController
 *
 * @author alitak
 */
class SquadsController extends \App\Http\Controllers\Controller
{

    public function index()
    {
        $characters = \App\Models\Character::all();
        return view('admin/squads/index', compact('characters'));
    }

}
