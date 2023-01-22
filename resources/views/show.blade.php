@extends('layouts.app')

@section('content')
<div class="container-fluid text-center ">
    <div class="d-inline-flex p-2 bd-highlight">
        <a class="btn btn-primary" href="/words/create" role="button">Dodaj słowo</a>
    </div>
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">{{ $word->id }}</th>
            <th scope="col">{{ $word->polishWord }}</th>
            <th scope="col">{{ $word->englishWord }}</th>

          </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    Statystyka
</div>
@endsection


