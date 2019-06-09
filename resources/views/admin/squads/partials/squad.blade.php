<div class="card w-100 @if (isset($show_hidden)) start_hidden @endif">
    <div class="card-body">
        @foreach ($squad->getSquadCharacters() as $key => $character)
        @if ($character)
        <div class="char-wrapper @if (!$squad->{"is_character_" . ($key + 1)}) not-in-stock @endif"  data-base_id="{{ $character->base_id }}" data-id="{{ $character->id }}">
            <div class="char-portrait">
                <div class="char-portrait-image">
                    <img class="char-portrait-img" src="https://swgoh.gg{{ $character->image }}">
                </div>
            </div>
            <div class="char-name text-center">
                <span data-name="{{ strtolower($character->name) }}">{{ $character->name }}</span>
            </div>
        </div>
        @endif
        @endforeach
        @if ($admin)
        <button class="btn btn-outline-danger btn-sm delete-squad border-0 position-absolute top-right" data-id="{{ $squad->id }}"><i class="fa fa-times"></i></button>
        @endif
    </div>
</div>
