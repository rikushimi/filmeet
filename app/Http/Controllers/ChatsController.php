<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChatsController extends Controller
{
    
    public function show($id){
 
       $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $chats = $user->chats()->orderBy('created_at', 'desc')->paginate(10);
            $chat_user = User::find($id);
            $data = [
                'user' => $user,
                'chats' => $chats,
                'chat_user'   => $chat_user,
                'id'  => $id,
            ];
            
            return view('users.chat', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
     
        $request->user()->chats()->create([
            'content' => $request->content,
            'match_id' => $request->match_id,
        ]);
        
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $chat = \App\Chats::find($id);

        if (\Auth::id() === $chat->user_id) {
            $chat->delete();
        }

        return redirect()->back();
    }
}
