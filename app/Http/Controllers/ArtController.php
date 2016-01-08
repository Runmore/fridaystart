<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Artist;


class ArtController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $artist = Artist::get();
        return view('artist.index', compact('artist'));
    }


    public function create()
    {
        return view('artist.create', compact('artist'));
    }

    public function store(Request $request)
    {
      $input = $request->all();
      $artist = Artist::create([
        'name' => $input['name'],
        'type' => $input['type'],
        'website' => $input['website'],
        'education' => $input['education'],
        'description' => $input['description'],
      ]);

      return redirect('artist');
    }


    public function show($id)
    {
      $art = Artist::find($id);
      return view('artist.show', compact('art'));
    }


    public function edit($id)
    {
        $art= Artist::find($id);
        return view('artist.edit', compact('art'));
    }


    public function update(Request $request, $id)
    {
      $art= Artist::find($id);
      $art->fill($request->input())->save();
        return redirect('artist');
    }

    public function destroy($id)
    {
        return "hello this is destroy page";
    }


}
