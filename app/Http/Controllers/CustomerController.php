<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewSubscriberNotification;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Customer::all();
        $user_count = Customer::count();
        return view('admin.user.index', compact('users', 'user_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function newsletter(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
            ]);
        } catch (ValidationException $e) {
            if ($e->errors()['email']) {
                return redirect()->back()->withErrors(['email' => 'It seems you forgot to enter your email address.']);
            }
        }

        try {
            $request->validate([
                'email' => 'max:255|email:rfc,dns',
            ]);
        } catch (ValidationException $e) {
            if ($e->errors()['email']) {
                return redirect()->back()->withErrors(['email' => 'Please enter a valid email address.']);
            }
        }

        $existingEmail = Newsletter::where('email', $request->email)->exists();

        if ($existingEmail) {
            return redirect()->back()->withErrors(['email' => 'This email is already subscribed to our newsletter.']);
        }

        // Save the email to the database
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Send notification email to the owner
        Mail::to(env('MAIL_TO_EMAIL'))->send(new NewSubscriberNotification($request->email));

        return redirect()->back()->with('message', 'You have successfully subscribed to our newsletter!');
    }
}
