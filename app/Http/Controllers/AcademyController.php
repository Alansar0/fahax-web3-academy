<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function index()
    {
        $academies = Academy::all();
        return view('academies.index', compact('academies'));
    }

    public function create()
    {
        return view('academies.create');

    }

    public function store(Request $request)
    {
        $academy = new Academy();
        $academy->name = $request->name;
        $academy->expertise = $request->expertise;
        $academy->description = $request->description;
        $academy->experience = $request->experience;
        $academy->save();

        return redirect()->route('academies.index');
    }

    public function show($id)
    {
        $academy = Academy::findOrFail($id);
        return view('academies.show', compact('academy'));
    }
    public function edit(Academy $academy)
    {
        return view('academies.edit', compact('academy'));
    }

    public function update(Request $request, Academy $academy)
    {
        $academy->name = $request->name;
        $academy->expertise = $request->expertise;
        $academy->description = $request->description;
        $academy->experience = $request->experience;
        $academy->save();

        return redirect()->route('academies.index');
    }

    public function destroy(Academy $academy)
    {
        $academy->delete();
        return redirect()->route('academies.index');
    }
}
