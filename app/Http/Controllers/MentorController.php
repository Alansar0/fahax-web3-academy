<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor; // Create a Mentor model

class MentorController extends Controller
{
    public function getMentorData($id)
    {
        $mentor = Mentor::find($id); // Fetch from database
        if ($mentor) {
            return response()->json($mentor);
        } else {
            return response()->json(['error' => 'Mentor not found'], 404);
        }
    }
}
