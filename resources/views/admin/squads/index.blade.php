@extends('layouts.app')

@section('external_styles')
<script src="{{ asset('css/admin/dragula.min.css') }}" defer></script>
@endsection

@section('content')
<div class="row">
    <div class="col-7">
        <div class="w-100 mb-4">
            <div class="input-group">
                <div class="position-relative flex-fill">
                    <input placeholder="search" class="form-control" id="search_character">
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-danger" id="search_clear" type="button"><i class="fa fa-times"></i></button>
                </div>
            </div>        </div>        
        <div id="characters" class="w-100">
            @foreach ($characters as $character)
            <div class="char-wrapper" data-base_id="{{ $character->base_id }}">
                <div class="char-portrait">
                    <div class="char-portrait-image">
                        <img class="char-portrait-img" src="{{ $character->image }}">
                    </div>
                </div>
                <div class="char-name text-center">
                    <span data-name="{{ strtolower($character->name) }}">
                        {{ $character->name }}
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-5">
        <div class="row mb-5">
            <div class="card w-100">
                <div class="card-header">
                    New squad
                </div>
                <div id="right-copy" class="card-body new-squad">

                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-success save-new-squad">Save</a>
                </div>
            </div>
        </div>
        <div class="row squads">
            <div class="card w-100">
                <div class="card-body">
                    <div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div>
                    <div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div>
                    <div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100">
                <div class="card-body">
                    <div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div><div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div><div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div><div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div><div class="char-wrapper" data-base_id="BOSSK">
                        <div class="char-portrait">
                            <div class="char-portrait-image">
                                <img class="char-portrait-img" src="//swgoh.gg/static/img/assets/tex.charui_bossk.png">
                            </div>
                        </div>
                        <div class="char-name text-center">
                            Bossk
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100">
                <div class="card-body">
                    squad12
                </div>
            </div>
            <div class="card w-100">
                <div class="card-body">
                    squad12
                </div>
            </div>
            <div class="card w-100">
                <div class="card-body">
                    squad12
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
