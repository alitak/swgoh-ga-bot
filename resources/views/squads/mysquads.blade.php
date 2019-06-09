@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h1>{{ $player->data->name }}</h1>
            <div class="row">
                <h2 class="col-md-6">{{ $player->data->galactic_power }} GP</h2>
                <h2 class="col-md-6 text-right">{{ $player->data->guild_name }}</h2>
            </div>

        </div>
        <div class="card-body">
            <div class="row squads">
                @foreach ($squads as $squad)
                <div class="col-md-6 mb-3">
                    @include('admin/squads/partials/squad', ["admin" => false])
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<div class="w-100"></div>
<div class="col-md-8"></div>
@endsection
