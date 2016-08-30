<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;
use App\Jobs\SendWelcomEmail;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    
    public function index()
    {
        $users=User::paginate(50);
      
        $arr=['items'=>$users];
        return view('userview.list')->with(compact('arr'));
    }

    /*
     * 
     Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        



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
    public function show(User $user)
    {
       return view('userview.user_profile',compact('user'));
        
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




    public function sendEmail()
    {
       
        //  \Log::info("Request Cycle with Queues Begins");
        //$this->dispatch(new SendWelcomEmail());
        //\Log::info("Request Cycle with Queues Ends");
       \Log::info("Request cycle without Queues started");
        Mail::send('email.view', ['data'=>'data'], function ($message) {
        $message->from('syed.shibli@daffodilsw.com', 'Christian Nwmaba');
        $message->to('mshibli786@gmail.com');
        });
       \Log::info("Request cycle without Queues finished");

    }
}
