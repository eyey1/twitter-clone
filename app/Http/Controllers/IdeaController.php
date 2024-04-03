<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\idea;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $idea = idea::create(
            [
                'content' => request()->get('content', '')
            ]
        );

        return redirect()->route('index.idea')->with('success', 'Idea was created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        $editing = true;

        return view('ideas.show', compact('idea', 'editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|min:3|max:240'
        ]);

        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', "Idea has been edited!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $id)
    {
        $id->delete();     

        return redirect()->route('index.idea')->with('success', 'Idea was successfully deleted!');
    }
}
