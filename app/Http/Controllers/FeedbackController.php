<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|max:100',
            'last_name' => 'max:100',
            'email' => 'required|max:255',
            'service' => 'numeric',
            'rating' => 'numeric',
            'opinion' => '',
        ]);

        $data["created_at"] = Carbon::now()->toDateTimeString();
        $data["updated_at"] = Carbon::now()->toDateTimeString();

        Feedback::create($data);

        return redirect()->route('dashboard')->with("fb_success", "Ačiu už atsiliepima!");
    }

    public function list()
    {
        $data = Feedback::all()
            ->reverse();

        return view('feedback_list', compact('data'));
    }
}
