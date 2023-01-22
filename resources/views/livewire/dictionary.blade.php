@extends('layouts.app')

@section('content')
<div class="container-fluid text-center ">
    <div class="d-inline-flex p-2 bd-highlight">
        <a class="btn btn-primary" href="/words/create" role="button">Dodaj słowo</a>
    </div>
    <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Polskie Słowo</th>
            <th scope="col">Angielskie słowo</th>
            <th scope="col">Edycja</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($words as $word)
            <tr>
                <th scope="row">{{ $word->id }}</th>
                <td>{{ $word->polishWord }}</td>
                <td>{{ $word->englishWord }}</td>
                <td>
                    <div class="d-inline-flex"><a class="btn btn-primary btn-sm" href="/words/{{ $word->id }}" role="button">Zobacz</a></div>
                    <div class="d-inline-flex"><a class="btn btn-warning btn-sm" href="/words/{{ $word->id }}/edit" role="button">Edytuj</a></div>
                    <div class="d-inline-flex"><form action="/words/{{ $word->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm">Usuń</button></td>
                    </form>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


