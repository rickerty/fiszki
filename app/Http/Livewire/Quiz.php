<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fiszki;

class Quiz extends Component
{
    public $check;

    public $answer;

    public $lang;

    public $goodAnswer;
    
    public function checkAnswer($questionId, $lang)
    {
        $fiszek = Fiszki::find($questionId);
            
            if ($lang == "pol"){
                
                if($fiszek->englishWord == $this->answer){
                    session()->flash('messageTwo', 'Prawidłowo!');
                    $this->goodAnswer = "";
                }
                else
                {
                    
                    $goodAnswer = $fiszek->englishWord;
                    session()->flash('message', 'Błędna odpowiedź. Prawidłowa odpowiedź to: '.$goodAnswer);
                    
                }
            }
            else{
                if($fiszek->polishWord == $this->answer){
                    session()->flash('messageTwo', 'Prawidłowo!');
                    $this->goodAnswer = "";
                }
                else
                {
                    $goodAnswer = $fiszek->polishWord;
                    session()->flash('message', 'Błędna odpowiedź. Prawidłowa odpowiedź to: '.$goodAnswer);
                }
            }
            $this->answer = "";
            



        
    }
    
    public function render( )
    {
        $lastNumber = Fiszki::orderBy('id', 'desc')->first()->id;
        $randomId = rand(1, $lastNumber);
        $question = Fiszki::where('id', $randomId)->first();
        $randomWord = rand(1, 2);
        return view('livewire.quiz', ["question" => $question, "randomWord" => $randomWord]);
    }
}
