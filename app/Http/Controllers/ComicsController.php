<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;


class ComicsController extends Controller{
    private $validationArray = [
        "title" => "required|max:255",
        "description" => "required|string|min:20",
        "thumb" => "string|url",
        "series" => "required|max:255",
        "price" => "required|int",
        "sale_date" => "required|date"

    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->validated();
        // $data = $request->all();
        // $comic = new Comic();
        // $comic->title = $data["title"];
        // $comic->save();
        $comic = Comic::create($data);
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->validated();
        // $comic = Comic::findOrFail($id);
        // $comic->upade($data);
        // qui va inserito il redirect per rimandare l'utente dove vogliamo
        // non per forza nell'index.
        $comic->update($data);
        return redirect()->route("comics.index,$comic->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        // anche qui va inserito il redirect dopo aver cancellato l'elemento
        return redirect()->route("comics.index");
    }
    private function validation($data){
        $result = Validator::make($data, [
            "title" => "required|max:255",
            "description" => "required|string",
            "thumb" => "string|url",
            "series" => "required|max:255",
            "price" => "required|int",
            "sale_date" => "required|date"
        ], [
                "title.required" => "Inserisci il titolo",
                "description.min" => "La descrizione deve contenere minimo 20 caratteri.",
                "series.required" => "Inserisci la serie",
            ])->validate();
        return $result;
    }
}

