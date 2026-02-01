<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // If user is logged in, use their name? Or ask for name?
        // Prompt says "your email, your message". 
        // Messages table has 'name'. I'll add 'name' to validation if user not passed, or 'Guest'.
        // Wait, prompt: "create a form ... your email, your message". No name field explicitly mentioned?
        // But table I designed has name. I'll pass "Guest" or Auth user name.
        
        $name = auth()->check() ? auth()->user()->name : 'Guest';

        // SQL Injection Protection:
        // Message::create() uses Eloquent's mass assignment which internally 
        // uses prepared statements. This ensures that the email and message 
        // content are never executed as SQL code.
        Message::create([
            'name' => $name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Email notification removed as per user request


        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
