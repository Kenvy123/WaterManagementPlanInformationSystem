<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OperatingUnits;
use Illuminate\Http\Request;

class OperatingUnitController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ou-list|ou-create|ou-edit|ou-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:ou-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:ou-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:ou-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $operatingUnits = OperatingUnits::latest()->paginate(10);
        return view('operating_units.index', compact('operatingUnits'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(OperatingUnits $operatingUnits)
    {
        $operatingUnits = OperatingUnits::all();
        return view('operating_units.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'operating_unit_name' => 'required',
        ]);
    
        // Create the new OperatingUnit using the validated data.
        $operatingUnits = OperatingUnits::create($request->all());
    
        return redirect()->route('operating_units.index')
            ->with('success', 'Operating unit created successfully.');
    }

    public function show(OperatingUnits $operatingUnits)
    {
        return view('operating_units.show', compact('operatingUnits'));
    }

    public function edit($id)
    {
        $operatingUnits = OperatingUnits::find($id);
        return view('operating_units.edit', compact('operatingUnits'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'operating_unit_name' => 'required',
        ]);

        $input = $request->all();
    
        $operatingUnits = OperatingUnits::find($id);
        $operatingUnits->update($input);

    
        return redirect()->route('operating_units.index')
                        ->with('success','Operating Unit updated successfully');
    }

    public function destroy($id)
    {
        $operatingUnits = OperatingUnits::findOrFail($id);
        $operatingUnits->delete();

       return redirect()->route('operating_units.index')
            ->with('success', 'Operating unit deleted successfully');
    }
}
