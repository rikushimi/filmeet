<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ChatsController extends Controller
{
    
    public function show($id){
 
       $data = [];
        if (\Auth::check()) {
            $chats = array();
            $myId = \Auth::id();
            $user = \Auth::user();
            $chats = \DB::table('chats')
                    ->Where(function ($query)use($id,$myId) {
                          $query->where('user_id',$id)
                                ->where('match_id',$myId);
                      })
                    ->orWhere(function ($query)use($myId,$id) {
                          $query->where('user_id',$myId)
                                ->where('match_id',$id);
                            })
                    ->orderby('created_at','asc')
                    ->select('content','created_at','user_id','id')
                    ->paginate(10);
                    
            $chat_user = User::find($id);

            
            $data = [
                'user' => $user,
                'chats' => $chats,
                'chat_user'  => $chat_user,
                'id'  => $id,
                'myId' => $myId,
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
