<?php

namespace App\Http\Controllers;

use App\Models\Messagenew;
use App\Models\Messagereply;
use App\Services\FileService;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct(protected FileService $fileService)
    {
    }

    public function index()
    {
        $types = Messagenew::get();
        return view('product_type.messageBoard', compact('types'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // if msgid
        // $type
        $type = Messagenew::create([
            'text' => $request->newdesc,
            'new_desc' => $request->newdesc,
            'reply_desc' => $request->replydesc,
        ]);

       
        Messagereply::create([
            'text_2' => $request->replydesc,
            'message_text_id' => $type->id,
        ]);

        // dd($request->all());
        return redirect(route('message.index'));
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        // $type =  Messagenew::find($id);
        // return view('message.index', compact('type'));
    }

    public function update(Request $request, string $id)
    {
        dd($request->id);
        $type = Messagenew::find($id);
        $type->update([
            'text' => $request->newdesc,
            'new_desc' => $request->newdesc,
            'reply_desc' => $request->replydesc,
        ]);

        return redirect(route('message.index'));
    }

    public function destroy(string $id)
    {
        dd("ASD");
        //
    }
}
