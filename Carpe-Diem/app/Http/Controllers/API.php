<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;

class API extends Controller
{
    function getAllUsers()
    {
        $users = DB::table('users')->get();
        return $users;
    }

    function getUserById($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return $user;
    }

    function createUser(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        $result = $user->save();
        if($result)
        {
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function updateUser(Request $request)
    {
        $data = User::find($request->id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $result = $data->save();
        if($result)
        {
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function deleteUser($id)
    {
        $data = User::find($id);
        $result = $data->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return ["Result" => "Operation failed"];
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
        return $event;
    }

    function createEvent(Request $request)
    {
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
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function updateEvent(Request $request)
    {
        $data = Event::find($request->id);
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
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function deleteEvent($id){
        $data = Event::find($id);
        $result = $data->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function getAllTickets(){
        $tickets = DB::table('tickets')->get();
        return $tickets;
    }

    function getTicketById($id)
    {
        $user = DB::table('tickets')->where('id', $id)->get();
        return $user;
    }

    function createTicket(Request $request){
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
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function updateTicket(Request $request) {
        $data = Ticket::find($request->event_id);
        $data->event_id = $request->event_id;
        $data->user_id = $request->user_id;
        $data->ticket_type = $request->ticket_type;
        $data->ticket_price = $request->ticket_price;
        $data->ticket_quantity = $request->ticket_quantity;

        $result = $data->save();
        if($result)
        {
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function deleteTicket($id){
        $data = Ticket::find($id);
        $result = $data->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function getAllPosts(){
        $posts = DB::table('posts')->get();
        if(!empty($posts) && $posts->count()>0){
            return ["Result" => $posts];
        } else {
            return ["Result" => "No posts found"];
        } 
    }

    function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->get();
        if(!empty($post) && $post->count()>0){
            return ["Result" => $post];
        } else {
            return ["Result" => "No post found"];
        } 
    }

    function createPost(Request $request){
        $post = Post::create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        $result = $post->save();
        if($result)
        {
            return ["Result" => "Data has been saved"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function updatePost(Request $request) {
        $data = Post::find($request->id);
        $data->user_id = $request->user_id;
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->content = $request->content;

        $result = $data->save();
        if($result)
        {
            return ["Result" => "Data has been updated"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }

    function deletePost($id){
        $data = Post::find($id);
        $result = $data->delete();
        if($result)
        {
            return ["Result" => "Data has been deleted"];
        }
        else
        {
            return ["Result" => "Operation failed"];
        }
    }
    



}
