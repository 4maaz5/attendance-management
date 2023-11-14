<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchQuery = $request->input('search_value');

        // Perform the database search
        $result = Attendance::where('rollno', 'like', '%' . $searchQuery . '%')->get();

        return view('viewrecord', compact('result'));
    }
}
