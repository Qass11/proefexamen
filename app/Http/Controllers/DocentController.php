<?php

namespace App\Http\Controllers;

use App\Models\Docent;
use Illuminate\Http\Request;

class DocentController extends Controller
{
    public function index()
    {
        $docent = Docent::all();
        return view('docent.index')->with('docent', $docent);
    }


    public function create()
    {
        return view('docent.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Docent::create($input);
        return redirect('docent')->with('flash_message', 'docent Addedd!');
    }


    public function show($id)
    {
        $docent = Docent::find($id);
        return view('docent.show')->with('docent', $docent);
    }


    public function edit($id)
    {
        $docent = Docent::find($id);
        return view('docent.edit')->with('docent', $docent);
    }


    public function update(Request $request, $id)
    {
        $docent = Docent::find($id);
        $input = $request->all();
        $docent->update($input);
//        return redirect('docent')->with('flash_message', 'docent Updated!');
        return redirect('/docent')->with('success', 'Update is successful verlopen');

    }


    public function destroy($id)
    {
        Docent::destroy($id);
        return redirect('docent')->with('flash_message', 'docent deleted!');
    }

}
