<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use App\Http\Requests\StoreDictionaryRequest;
use App\Http\Requests\UpdateDictionaryRequest;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Dictionary::all();
        return view('livewire.dictionary')->with('words', $words);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livewire.createword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDictionaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDictionaryRequest $request)
    {
        $input = $request->all();
        Dictionary::create($input);
        return redirect('words');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function show(Dictionary $word)
    {
    
        return view('show')->with('word', $word);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function edit(Dictionary $word)
    {
        return view("edit")->with('word', $word);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDictionaryRequest  $request
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDictionaryRequest $request, $dictionary)
    {
        
        $input = Dictionary::find($dictionary);
        $input->update($request->all());
        return redirect('words');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dictionary  $dictionary
     * @return \Illuminate\Http\Response
     */
    public function destroy($dictionary)
    {
        Dictionary::destroy($dictionary);
        return redirect('words');
    }
}
