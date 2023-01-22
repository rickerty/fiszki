@extends('layouts.app')

@section('content')
<div class="container-fluid text-center ">
    <div class="d-inline-flex card border-0 bs-green" >
        <div class="card-header bs-green">
            <form action="{{ route('words.store') }}" method="POST">
                @csrf
                <div class="m-3">
                    <input class="form-control" name="polishWord" type="text"  placeholder="polskie słowo">
                </div>
                <div class="m-3">
                    <input class="form-control" name="englishWord" type="text"  placeholder="angielskie tłumaczenie">
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-success">Dodaj</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
