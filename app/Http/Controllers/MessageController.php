<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    public function showAll() : View {
        return view('home', [
            'title' => 'Home',
            'messages' => Message::all()
        ]);
    }

    public function show(Message $message) : View {
        return view('message', [
            'title' => 'Message',
            'message' => $message
        ]);
    }

    public function create() : View {
        return view('create', [
            'title' => 'Create Message'
        ]);
    }

    public function store(Request $message) : RedirectResponse {
        // TODO: Do some input checking

        $new_message = new Message;
        $new_message->title = $message->title;
        $new_message->body = $message->body;

        $new_message->save();

        return redirect('/');
    }

    public function edit(Message $message) : View {
        return view('edit', [
            'title' => 'Edit Message',
            'message' => $message
        ]);
    }

    public function update(Request $message, $id) : RedirectResponse {
        $target = Message::find($id);

        $target->title = $message->title;
        $target->body = $message->body;

        $target->save();

        return redirect('/');
    }

    // public function delete(Message $message) : View {
    //     return view('confirmDelete', [
    //         'title' => 'Delete Confirmation',
    //         'message' => $message
    //     ]);
    // }

    // public function deleteConfirm(Message $message) : RedirectResponse {
    //     $message->delete();

    //     return redirect('/');
    // }

    public function delete(Request $request) : RedirectResponse {
        $target = Message::find($request->id);
        $target->delete();

        return redirect('/');
    }
}
