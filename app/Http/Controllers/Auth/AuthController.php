<?php
namespace App\Http\Controllers\Auth;
use Log;
//<<<<<<< HEAD

//=======
//>>>>>>> 71a91ae1695a1be5cab23601fde7f6fcdafc2060
use App\User;
use Validator;
use App\Events\LoginEvent;
use App\LikeNotification;
use App\CommentNotification;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;





class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $user;
    protected $request;
    protected $notifications;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        Log::info('Auth controller constructed executed: ');
        Log::info('Auth controller executed');
        $this->middleware('guest',['only'=>['getLogin','getRegister']]);
        $this->middleware('auth',['only'=>['create','notification']]);
}

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function authenticated($request, $user)
    {
        $this->request=$request;
        $this->user=$user;
        \Log::info("authenticated method in auth controller is called");
        \Log::info($request);
        \Log::info($user);
       
        // dd($this->notifications);
          return redirect("/home");





    }

    public function notification()
    {
          $this->notifications=\Event::fire(new LoginEvent(Auth::user()));


               //  dd($this->notifications);
        //  dd('notification'));
      //  dd(['notification'=>$this->notifications]);


   
      return view('home',['notification'=>$this->notifications]);
       
    }

}
