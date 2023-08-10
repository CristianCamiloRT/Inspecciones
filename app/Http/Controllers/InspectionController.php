<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index()
    {
        $inspections = Inspection::paginate();

        return view('inspection.index', compact('inspections'))
            ->with('i', (request()->input('page', 1) - 1) * $inspections->perPage());
    }

    public function create()
    {
        $inspection = new Inspection();
        return view('inspection.create', compact('inspection'));
    }

    public function store(Request $request)
    {
        request()->validate(Inspection::$rules);

        $request->request->add(['user_id' => auth()->id()]);
        
        $inspection = Inspection::create($request->all());

        return redirect()->route('inspections.index')
            ->with('success', 'Inspection created successfully.');
    }

    public function show($id)
    {
        $inspection = Inspection::find($id);

        return view('inspection.show', compact('inspection'));
    }

    public function edit($id)
    {
        $inspection = Inspection::find($id);

        return view('inspection.edit', compact('inspection'));
    }

    public function update(Request $request, Inspection $inspection)
    {
        request()->validate(Inspection::$rules);

        $inspection->update($request->all());

        return redirect()->route('inspections.index')
            ->with('success', 'Inspection updated successfully');
    }

    public function destroy($id)
    {
        $inspection = Inspection::find($id)->delete();

        return redirect()->route('inspections.index')
            ->with('success', 'Inspection deleted successfully');
    }
}
