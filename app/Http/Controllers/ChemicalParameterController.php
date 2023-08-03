<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ChemicalParameter;
use Illuminate\Http\Request;

class ChemicalParameterController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:cm-list|cm-create|cm-edit|cm-delete', ['only' => ['index','show']]);
         $this->middleware('permission:cm-create', ['only' => ['create','store']]);
         $this->middleware('permission:cm-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:cm-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $chemicalParameters = ChemicalParameter::paginate(10);
        return view('chemical_parameter.index', compact('chemicalParameters'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create(ChemicalParameter $chemicalParameters)
    {
        $chemicalParameters = ChemicalParameter::all();
        return view('chemical_parameter.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'chemical_parameter_name' => 'required',
        ]);
    
       
        $chemicalParameters = ChemicalParameter::create($request->all());
    
        return redirect()->route('chemical_parameter.index')
            ->with('success', 'Chemical parameter added successfully.');
    }

    public function show(ChemicalParameter $chemicalParameters)
    {
        return view('chemical_parameter.show', compact('chemicalParameters'));
    }


    public function edit($id)
    {
        $chemicalParameters = ChemicalParameter::find($id);
        return view('chemical_parameter.edit', compact('chemicalParameters'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'chemical_parameter_name' => 'required',
        ]);

        $input = $request->all();
    
        $chemicalParameters = ChemicalParameter::find($id);
        $chemicalParameters->update($input);

    
        return redirect()->route('chemical_parameter.index')
                        ->with('success','Chemical parameter edited successfully');
    }

    public function destroy($id)
    {
        $chemicalParameters = ChemicalParameter::findOrFail($id);
        $chemicalParameters->delete();
        return redirect()->route('chemical_parameter.index')
             ->with('success', 'Chemical parameter deleted successfully');
    }
}
