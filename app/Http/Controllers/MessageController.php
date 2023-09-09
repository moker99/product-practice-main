<?php

namespace App\Http\Controllers;

use App\Models\Messagenew;
use App\Models\Messagereply;
use App\Services\FileService;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Reply;

class MessageController extends Controller
{
    // 
    // public function index()
    // {
    //     $messages = Message::with('replies')->whereNull('parent_id')->orderBy('created_at', 'desc')->get();
    //     return view('product_type.messageBoard', compact('messages'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         // 'name' => 'required',
    //         'content' => 'required',
    //     ]);

    //     Message::create([
    //         // 'name' => $request->input('name'),
    //         'content' => $request->input('content'),
    //     ]);

    //     return redirect()->route('messages.index')->with('success', '留言已發布！');
    // }

    // public function reply(Request $request, $parentId)
    // {
    //     $request->validate([
    //         'reply' => 'required',
    //     ]);

    //     Reply::create([
    //         'name' => '回覆者', // 根據需要更改回覆者的名字
    //         'content' => $request->input('reply'),
    //         'message_id' => $parentId,
    //     ]);

    //     return redirect()->route('messages.index')->with('success', '回覆已發布！');
    // }

    // public function edit(Request $request, $id)
    // {
    //     $request->validate([
    //         'edited_reply' => 'required',
    //     ]);

    //     $message = Message::findOrFail($id);
    //     $message->update(['content' => $request->input('edited_reply')]);

    //     return redirect()->route('messages.index')->with('success', '回覆已編輯！');
    // }

    // public function destroy($id)
    // {
    //     $message = Message::findOrFail($id);
    //     $message->delete();

    //     return redirect()->route('messages.index')->with('success', '回覆已刪除！');
    // }

    // public function replyEdit(Request $request, $id)
    // {
    //     $request->validate([
    //         'edited_reply' => 'required',
    //     ]);

    //     $reply = Reply::findOrFail($id);
    //     $reply->update(['content' => $request->input('edited_reply')]);

    //     return redirect()->route('messages.index')->with('success', '回覆已編輯！');
    // }

    // public function replyDestroy($id)
    // {
    //     $reply = Reply::findOrFail($id);
    //     $reply->delete();

    //     return redirect()->route('messages.index')->with('success', '回覆已刪除！');
    // }



    public function index()
    {
        $messages = Message::with('replies')->whereNull('parent_id')->orderBy('created_at', 'desc')->get();
        return view('product_type.messageBoard', compact('messages'));
    }

    public function create()
    {
        // 顯示新增留言的表單，通常不需要具體的程式碼，除非有自訂的邏輯。
        return view('your_create_view');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Message::create([
            'content' => $request->content,
        ]);


        return redirect()->route('messages.index')->with('success', '留言已發布！');
    }
    // public function show(string $id)
    // {
    //     //
    // }


    // public function edit($id)
    // {
    //     // 顯示編輯留言的表單，通常不需要具體的程式碼，除非有自訂的邏輯。
    //     return view('your_edit_view', ['message' => Message::findOrFail($id)]);
    // }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edited_reply' => 'required',
        ]);

        $message = Message::find($id);
        $message->update(['content' => $request->edited_reply]);

        $request->validate([
            'reply' => 'required',
        ]);

        Reply::create([
            // 'name' => '回覆者', // 根據需要更改回覆者的名字
            'content' => $request->reply,
            'message_id' => $id,
        ]);


        return redirect()->route('messages.index')->with('success', '回覆已編輯！');
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        foreach ($message->replies as $item) {
            $item->delete();
        }
        // $reply = Reply::find($id);
        // dd( $message-> replies);
        $message->delete();
        // $reply->delete();

        return redirect()->route('messages.index')->with('success', '回覆已刪除！');
    }


    public function reply(Request $request, $messageId)
    {
        $request->validate([
            'reply' => 'required',
        ]);

        Reply::create([
            // 'name' => '回覆者', // 根據需要更改回覆者的名字
            'content' => $request->reply,
            'message_id' => $messageId,
        ]);

        return redirect()->route('messages.index')->with('success', '回覆已發布！');
    }

    // 編輯回覆
    public function replyEdit(Request $request, $replyId)
    {
        $request->validate([
            'edited_reply' => 'required',
        ]);

        $reply = Reply::find($replyId);
        $reply->update(['content' => $request->edited_reply]);

        return redirect()->route('messages.index')->with('success', '回覆已編輯！');
    }

    // 刪除回覆
    public function replyDestroy($replyId)
    {
        $reply = Reply::find($replyId);
        $reply->delete();

        return redirect()->route('messages.index')->with('success', '回覆已刪除！');
    }
}
