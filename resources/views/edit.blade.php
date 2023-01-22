@extends('layouts.app')

@section('content')
<div class="container-fluid text-center ">
    <div class="d-inline-flex card border-0 bs-green" >
        <div class="card-header bs-green">
            <form action="/words/{{ $word->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="m-3">
                    <input class="form-control" name="polishWord" type="text"  value="{{ $word->polishWord }}">
                </div>
                <div class="m-3">
                    <input class="form-control" name="englishWord" type="text"  value="{{ $word->englishWord }}">
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-success">Dodaj</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
