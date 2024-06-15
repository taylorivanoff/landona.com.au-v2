<?php

namespace App\Http\Controllers;

use App\Models\Matter;
use Illuminate\Http\Request;

class MatterController extends Controller
{
    public function index(Request $request)
    {
        $columns = ['ID', 'Internal ID', 'Type', 'User Info'];

        $rows = Matter::with(['purchase', 'sale', 'user'])->paginate(10);

        return view('models.matters.index', compact('columns', 'rows'));
    }
    public function store(Request $request)
    {
        $request->validate(['type' => 'required|string|max:255',]);

        Matter::create($request->all());

        return redirect()->route('models.matters.index')->with('success', 'Matter created successfully.');
    }

    public function create()
    {
        return view('models.matters.create');
    }

    public function edit(Matter $matter)
    {
        return view('models.matters.edit', compact('matter'));
    }

    public function update(Request $request, Matter $matter)
    {
        $request->validate(['type' => 'required|string|max:255', 'status' => 'required|string|max:255',]);

        $matter->update($request->all());

        return redirect()->route('models.matters.index')->with('success', 'Matter updated successfully.');
    }

    public function destroy(Matter $matter)
    {
        $matter->delete();

        return redirect()->route('models.matters.index')->with('success', 'Matter deleted successfully.');
    }

    public function nextStatus(Matter $matter)
    {
        $statuses = config('matter_statuses.' . strtolower($matter->type));
        $currentStatusIndex = array_search($matter->status, $statuses);

        if ($currentStatusIndex !== false && $currentStatusIndex < count($statuses) - 1) {
            $matter->status = $statuses[$currentStatusIndex + 1];
            $matter->save();
        }

        return redirect()->route('models.matters.index')->with('success', 'Matter status updated successfully.');
    }
}
