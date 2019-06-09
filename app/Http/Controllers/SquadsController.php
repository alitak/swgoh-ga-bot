<?php

namespace App\Http\Controllers;

class SquadsController extends Controller
{

    public function index()
    {
        return view('squads/index');
    }

    public function mysquads(\Illuminate\Http\Request $request)
    {
        $url = str_replace('-', '', config('swgoh.api.base') . config('swgoh.api.player') . $request->ally_code);
        $player = json_decode(url_get_contents($url));

        if (!$player) {
            die('not found');
        }

        $player_characters = [];
        $characters = \App\Models\Character::all()->pluck('id', 'base_id');
        foreach ($player->units as $pc) {
            if (isset($characters[$pc->data->base_id])) {
                $player_characters[$characters[$pc->data->base_id]] = $pc;
            }
        }

        $squads_found = [];
        foreach (\App\Models\Squad::all() as $squad) {
            $squads_found[$squad->id] = $squad;
            for ($i = 1; $i < 6; $i++) {
                if ($squad->{'character_' . $i . '_id'} && isset($player_characters[$squad->{'character_' . $i . '_id'}])) {
                    $squads_found[$squad->id]['is_character_' . $i] = true;
                }
            }
        }
//        dd($squads_found);
        return view('squads/mysquads', [
            'squads' => $squads_found,
            'player' => $player,
            'characters' => $characters,
        ]);
    }

}
