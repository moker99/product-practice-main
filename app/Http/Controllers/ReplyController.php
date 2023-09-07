<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReplyToMessage;

class ReplyController extends Controller
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
        //
        // dd($request->all());
        // ReplyToMessage::create([
        //     'replay_message' => $request->reply,
        // ]);
        // return redirect(route('messageIndex'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reply = ReplyToMessage::find($id);

        $reply->update([
            'replay_message' => $request->reply ?? '',
        ]);

        return redirect(route('messageIndex'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reply = ReplyToMessage::find($id);
        $result = 'success';
        
        if ($reply) {
            $reply->delete();
        } else {
            $result = 'fail';
        }

        return $result;
    }
}
