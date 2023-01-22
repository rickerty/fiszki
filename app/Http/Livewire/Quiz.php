<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Dictionary;

class Quiz extends Component
{
    public $check;

    public $answer;

    public $lang;

    public $goodAnswer;
    
    public function checkAnswer($questionId, $lang)
    {
        $fiszek = Dictionary::find($questionId);
            
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
        $allIds = Dictionary::where('id', '>', 0)->get('id')->toArray();
        shuffle($allIds);
        $question = Dictionary::where('id', $allIds[0])->first();
        $randomWord = rand(1, 2);
        return view('livewire.quiz', ["question" => $question, "randomWord" => $randomWord]);
    }
}
