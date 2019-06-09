@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">Ally code</div>
        <div class="card-body">
            <form action="{{ Route('squads-mysquads') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="ally_code" id="ally_code" placeholder="Ally code" value="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
