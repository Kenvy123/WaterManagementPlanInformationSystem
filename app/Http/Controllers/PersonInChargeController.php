<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PersonInCharge;
use Illuminate\Http\Request;

class PersonInChargeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:pic-list|pic-create|pic-edit|pic-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:pic-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:pic-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:pic-delete', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $pic = PersonInCharge::latest()->paginate(10);
        return view('pic.index', compact('pic'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(PersonInCharge $pic)
    {
        $pic = PersonInCharge::all();
        return view('pic.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'pic_name' => 'required',
        ]);
    
        
        $pic = PersonInCharge::create($request->all());
    
        return redirect()->route('pic.index')
            ->with('success', 'Person in charge created successfully.');
    }

    public function show(PersonInCharge $pic)
    {
        return view('pic.show', compact('pic'));
    }

    public function edit($id)
    {
        $pic = PersonInCharge::find($id);
        return view('pic.edit', compact('pic'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pic_name' => 'required',
        ]);

        $input = $request->all();
    
        $pic = PersonInCharge::find($id);
        $pic->update($input);

    
        return redirect()->route('pic.index')
                        ->with('success','Person in charge updated successfully');
    }

    public function destroy($id)
    {
        $pic = PersonInCharge::findOrFail($id);
        $pic->delete();

       return redirect()->route('pic.index')
            ->with('success', 'Person in charge deleted successfully');
    }
}
