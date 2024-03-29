<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;

class API extends Controller
{
    function getAllUsers()
    {
        $users = DB::table('users')->get();
        return response()->json([
            'Result' => $users,
        ], 200);
    }

    function getUserById($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        if(!empty($user) && $user->count()>0){
            return ["Result" => $user];
        } else {
            return response()->json([
                'Result' => 'No user found',
            ], 400);
        } 
    }

    function createUser(Request $request)
    {
        if ($request->username != null && $request->name != null && $request->email != null && $request->password != null) {
            $user = User::create([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);
            $result = $user->save();
            if($result)
            {
                                return response()->json([
                    'Result' => 'Data has been saved',
                ], 200);

            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation failed',
                    
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    
    }

    function updateUser(Request $request)
    {
        $data = User::find($request->id);
        if(!empty($data) && $data->count()>0){
            if ($request->username != null && $request->name != null && $request->email != null && $request->password != null) {
                $data->username = $request->username;
                $data->name = $request->name;
                $data->email = $request->email;
                $data->password = Hash::make($request->password);
                $result = $data->save();
                if($result)
                {
                    return response()->json([
                        'Result' => 'User saved successfully',
                        
                    ], 200);
                }
                else
                {
                    return response()->json([
                        'Result' => 'Operation failed',
                        
                    ], 400);
                }
            } else {
                return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No user found',
                
            ], 400);
        }
    }

    function deleteUser($id)
    {
        $data = User::find($id);
        if(!empty($data) && $data->count()>0){
            $result = $data->delete();
            if($result)
            {
                return response()->json([
                    'Result' => 'Data has been deleted',
                    
                ], 200);
            }
            else
            {
                return response()->json([
                    'Result' => 'Operation failed',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No user found',
                
            ], 400);
        }
    }

    function getAllEvents()
    {
        $events = DB::table('events')->get();
        return $events;
    }
    function getEventById($id)
    {
        $event = DB::table('events')->where('id', $id)->get();
        if(!empty($event) && $event->count()>0){
            return $event;
        } else {
            return response()->json([
                'Result' => 'No user found',
            ], 400);
        }
    }

    function createEvent(Request $request)
    {
        if($request->title != null && $request->description != null && $request->start_time != null && $request->end_time != null && $request->location != null && $request->organizer_id != null && $request->ticket_price != null && $request->tickets_available != null) {
            $event = Event::create([
                'title' => $request->title,
                'description' => $request->description,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'location' => $request->location,
                'organizer_id' => $request->organizer_id,
                'ticket_price' => $request->ticket_price,
                'tickets_available' => $request->tickets_available,
            ]);

            $result = $event->save();
            if($result)
            {
                                return response()->json([
                    'Result' => 'Data has been saved',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function updateEvent(Request $request)
    {
        $data = Event::find($request->id);
        if(!empty($data) && $data->count()>0){
            if($request->title != null && $request->description != null && $request->start_time != null && $request->end_time != null && $request->location != null && $request->organizer_id != null && $request->ticket_price != null && $request->tickets_available != null) {
                $data->title = $request->title;
                $data->description = $request->description;
                $data->start_time = $request->start_time;
                $data->end_time = $request->end_time;
                $data->location = $request->location;
                $data->organizer_id = $request->organizer_id;
                $data->ticket_price = $request->ticket_price;
                $data->tickets_available = $request->tickets_available;
                

                $result = $data->save();
                if($result)
                {
                    return response()->json([
                        'Result' => 'Data has been saved',
                    ], 200);
                }
                else
                {
                                    return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
                }
            } else {
                                return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
            }
        } else {
            return ["Result" => "No event found"];
        }
    }

    function deleteEvent($id){
        $data = Event::find($id);
        if(!empty($data) && $data->count()>0){
            $result = $data->delete();
            if($result)
            {
                return response()->json([
                    'Result' => 'Data has been deleted',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No event found',
            ], 400);
        }
    }


    function getTickets(Request $request){
        $query = $request->input('q');
        
        $ticket = DB::table('tickets')->where('ticket_type', 'like', '%'.$query.'%')->get();
        if(!empty($ticket) && $ticket->count()>0){
            return response()->json([
                'Result' => $ticket,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No tickets found',
            ], 400);
        } 
    }

    function getPosts(Request $request){
        $query = $request->input('q');
        
        $title = DB::table('posts')->where('title', 'like', '%'.$query.'%')->get();
        $content = DB::table('posts')->where('content', 'like', '%'.$query.'%')->get();
        $result = $title->merge($content);
        if(!empty($result) && $result->count()>0){
            return response()->json([
                'Result' => $result,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No posts found',
            ], 400);
        } 
    }

    function getComments(Request $request){
        $query = $request->input('q');
        
        $comment = DB::table('comments')->where('body', 'like', '%'.$query.'%')->get();
        if(!empty($comment) && $comment->count()>0){
            return response()->json([
                'Result' => $comment,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No comments found',
            ], 400);
        } 
    }

    function getEvents(Request $request){
        $query = $request->input('q');
        
        $title = DB::table('events')->where('title', 'like', '%'.$query.'%')->get();
        $desc = DB::table('events')->where('description', 'like', '%'.$query.'%')->get();
        $location = DB::table('events')->where('location', 'like', '%'.$query.'%')->get();
        $result = $title->merge($desc)->merge($location);
        if(!empty($result) && $result->count()>0){
            return response()->json([
                'Result' => $result,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No events found',
            ], 400);
        } 
    }


    function getAllTickets(){
        $tickets = DB::table('tickets')->get();
        return response()->json([
            'Result' => $tickets,
        ], 200);
    }

    function getTicketById($id)
    {
        $user = DB::table('tickets')->where('id', $id)->get();
        return response()->json([
            'Result' => $user,
        ], 200);
    }

    function createTicket(Request $request){
        if($request->event_id != null && $request->user_id != null && $request->ticket_type != null && $request->ticket_price != null && $request->ticket_quantity != null) {
            $ticket = Ticket::create([
                'event_id' => $request->event_id,
                'user_id' => $request->user_id,
                'ticket_type' => $request->ticket_type,
                'ticket_price' => $request->ticket_price,
                'ticket_quantity' => $request->ticket_quantity, 
            ]);

            $result = $ticket->save();
            if($result)
            {
                                return response()->json([
                    'Result' => 'Data has been saved',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function updateTicket(Request $request) {
        if($request->event_id != null && $request->user_id != null && $request->ticket_type != null && $request->ticket_price != null && $request->ticket_quantity != null) {
            $data = Ticket::find($request->event_id);
            if(!empty($data) && $data->count()>0){
                $data->event_id = $request->event_id;
                $data->user_id = $request->user_id;
                $data->ticket_type = $request->ticket_type;
                $data->ticket_price = $request->ticket_price;
                $data->ticket_quantity = $request->ticket_quantity;

                $result = $data->save();
                if($result)
                {
                    return response()->json([
                        'Result' => 'Data has been updated',
                    ], 200);
                }
                else
                {
                                    return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
                }
            } else {
                return response()->json([
                    'Result' => 'No ticket found',
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function deleteTicket($id){
        $data = Ticket::find($id);
        if(!empty($data) && $data->count()>0){
            $result = $data->delete();
            if($result)
            {
                return response()->json([
                    'Result' => 'Data has been deleted',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No tickets found',
            ], 400);
        }
    }

    function getAllPosts(){
        $posts = DB::table('posts')->get();
        if(!empty($posts) && $posts->count()>0){
            return response()->json([
                'Result' => $posts,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No posts found',
            ], 400);
        } 
    }

    function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->get();
        if(!empty($post) && $post->count()>0){
            return response()->json([
                'Result' => $post,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No posts found',
            ], 400);
        } 
    }

    function createPost(Request $request){
        if($request->user_id != null && $request->category_id != null && $request->title != null && $request->content != null){ 
            $post = Post::create([
                'user_id' => $request->user_id,
                'category_id' => $request->category_id,
                'title' => $request->title,
                'content' => $request->content,
            ]);

            $result = $post->save();
            if($result)
            {
                                return response()->json([
                    'Result' => 'Data has been saved',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function updatePost(Request $request) {
        if($request->user_id != null && $request->category_id != null && $request->title != null && $request->content != null) {
            $data = Post::find($request->id);
            if(!empty($data) && $data->count()>0){
                $data->user_id = $request->user_id;
                $data->category_id = $request->category_id;
                $data->title = $request->title;
                $data->content = $request->content;

                $result = $data->save();
                if($result)
                {
                    return response()->json([
                        'Result' => 'Data has been updated',
                    ], 200);
                }
                else
                {
                                    return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
                }
            } else {
                return response()->json([
                    'Result' => 'No posts found',
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function deletePost($id){
        $data = Post::find($id);
        if(!empty($data) && $data->count()>0){
            $result = $data->delete();
            if($result)
            {
                return response()->json([
                    'Result' => 'Data has been deleted',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No posts found',
            ], 400);
        }
    }
    
    function getAllComments(){
        $comments = DB::table('comments')->get();
        if(!empty($comments) && $comments->count()>0){
            return response()->json([
                'Result' => $comments,
            ], 200);
        } else {
            return response()->json([
                'Result' => 'No comments found',
            ], 400);
        } 
    }

    function getCommentById($id)
    {
        $comment = DB::table('comments')->where('id', $id)->get();
        if(!empty($comment) && $comment->count()>0){
            return ["Result" => $comment];
        } else {
            return response()->json([
                'Result' => 'No comment found',
            ], 400);
        } 
    }

    function createComment(Request $request){
        if($request->user_id != null && $request->body != null && $request->commentable_type != null && $request->commentable_id != null) {
            $comment = Comment::create([
                'user_id' => $request->user_id,
                'body' => $request->body,
                'commentable_type' => $request->commentable_type,
                'commentable_id' => $request->commentable_id,
            ]);

            $result = $comment->save();
            if($result)
            {
                                return response()->json([
                    'Result' => 'Data has been saved',
                ], 200);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation failed',
                    
                ], 400);
            }
        } else {
                            return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
        }
    }

    function updateComment(Request $request) {
        $data = Comment::find($request->id);
        if(!empty($data) && $data->count()>0){
            if ($request->user_id != null && $request->body != null && $request->commentable_type != null && $request->commentable_id != null) {
                $data->user_id = $request->user_id;
                $data->body = $request->body;
                $data->commentable_type = $request->commentable_type;
                $data->commentable_id = $request->commentable_id;

                $result = $data->save();
                if($result)
                {
                    return response()->json([
                        'Result' => 'Data has been updated',
                    ], 200);
                }
                else
                {
                                    return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
                }
            } else {
                                return response()->json([
                    'Result' => 'Please fill the fields',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No comment found',
            ], 400);
        }
    }

    function deleteComment($id){
        $data = Comment::find($id);
        if(!empty($data) && $data->count()>0){
            $result = $data->delete();
            if($result)
            {
                return response()->json([
                    'Result' => 'Data has been deleted',
                ], 400);
            }
            else
            {
                                return response()->json([
                    'Result' => 'Operation ',
                    
                ], 400);
            }
        } else {
            return response()->json([
                'Result' => 'No comment found',
            ], 400);
        }
    }

}
