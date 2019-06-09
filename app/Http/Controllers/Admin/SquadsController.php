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
        $squads = \App\Models\Squad::orderBy('id', 'desc')->get();
        return view('admin/squads/index', compact('characters', 'squads'))->with(['admin' => true]);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $squad = new \App\Models\Squad();
        foreach ($request->selected_characters as $key => $character_id) {
            $squad->{'character_' . ($key + 1) . '_id'} = $character_id;
        }
        if ($squad->save()) {
            return response(['data' => view('admin/squads/partials/squad', compact('squad'))->with(['show_hidden' => true, 'admin' => true])->render()]);
        }
        return response(null, 500);
    }

    public function delete(\Illuminate\Http\Request $request)
    {
        if (\App\Models\Squad::destroy($request->squad_id)) {
            return response(null, 204);
        }
        return response(null, 500);
    }

}
