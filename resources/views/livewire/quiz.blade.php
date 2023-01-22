
<div class="container-md">
    
    
        <div class="d-sm-flex card border-0 bs-gray" >
            <div class="card-header bs-red">
                Przetłumacz słowo: 
                    @if ($randomWord === 1)
                        <h2>{{ $question->polishWord }} </h2>
            </div>
                        <form wire:submit.prevent="checkAnswer({{ $question->id }}, 'pol')">
                            <div class="m-3 d-inline-flex">
                                <input class="form-control" type="text" wire:model.defer="answer" placeholder="Twoja odpowiedź">
                            </div>
                    @else
                        <h2>{{ $question->englishWord }}</h2>
            </div>
                        <form wire:submit.prevent="checkAnswer({{ $question->id }}, 'eng')">
                            <div class="m-3 d-inline-flex">
                                <input class="form-control " type="text" wire:model.defer="answer" placeholder="Twoja odpowiedź">
                            </div>
                    @endif
    
        <div class="m-3">
            <button type="submit" class="btn btn-success">Sprawdź</button>
        </div>
        <div class="m-5">
        @if (session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('messageTwo'))
            <div class="alert alert-success ">
                {{ session('messageTwo') }}
            </div>
        @endif
        
        </div>
        <h1>{{ $check }}</h1>
        <h1>{{ $goodAnswer }}</h1>

                </form>
    
</div>
     
</div>


