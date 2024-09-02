<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Hash;
use App\Mail\RegMail;
use App\Models\District;
use App\Models\Division;
use App\Models\Religion;
use App\Models\UserSettingField;
// use App\Models\Cast;
use Illuminate\Support\Facades\Mail;
use App\Models\Upazila;
use Session;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
public function test(){

    return view("test");
}
public function aboutUs(){

    return view("aboutUs");
}

public function userLogin(Request $request)
{
    if(!Auth::check()){

        return view('auth.login');
    }
    else{

        return redirect('/');
    }

}

  public function customRegistration(Request $request)
  {



    $request->validate([
      'name' => 'required',
      'full_mobile' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:6',
      'password_confirmation' => 'required_with:password|same:password|min:6'
    ]);

    $latest_user=User::latest()->first();

    $latest_username=$latest_user->username;
    $uyear=substr($latest_user->username, 0, 2);
    if($latest_user)
    {
        if ($uyear== date('y'))
            {
                $un = $latest_username+1;
            }
        else
            {
                $un = date('y')*100000+1;
            }
    }
    else
    {
        $un = date('y')*100000+1;
    }
    // $data['username'] = $un;

// dd($un);

    $data = $request->all();
    // $data['password_temp'] = $request->password;
    // dd($data);
    $user = $this->create($data);
    $user->update([
        'password_temp' => $request->password,
        'username' => $un,
        'active'  => true
    ]);

    $user->registerSmsSend();
    // dd($user->password_temp);

    $details = [
        'title' => "New Registration",
    ];
    // if($user)
    // {
    //     $user->welcomeSmsSend();
    // }
    // dd($user->email);
    // Mail::to($user->email)->send(new RegMail($details));
     Auth::login($user);

    return redirect("/user/incomplete-profile")->with('message', 'Account created successfully');
  }


  public function create(array $data)
  {
    return User::create([
      'name' => $data['name'],
      'mobile' => $data['full_mobile'],
      'email' => $data['email'],
      'password' => Hash::make($data['password'])
    ]);
  }


  public function customLogin(Request $request)
  {
      $request->validate([
          'email' => 'required|email',
          'password' => 'required',
      ]);

      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {

          $user = auth()->user();

          if (!$user->active) {
              Session::flush();
              Auth::logout();
              return redirect('/')->withErrors('Account is inactive.');
          }

          User::where('id', $user->id)->update([
              'loggedin_at' => Carbon::now(),
          ]);

          if (is_null($user->name) || is_null($user->gender) || is_null($user->religion)) {
              return redirect('/user/incomplete-profile')
                  ->withSuccess('Signed in');
          } elseif (!$user->pertnerPreference) {
              return redirect('/user/pertner-preference')->withSuccess('Signed in');
          } else {
              return redirect('/')
                  ->withSuccess('Signed in');
          }
      }

      return redirect("/")->withErrors('Login details are not valid');
  }



  public function signOut()
  {
    Session::flush();
    Auth::logout();

    return Redirect('/');
  }

  public function register()
  {
    $religions=Religion::get();
    // dd($religions);
    $userSettingFields = UserSettingField::all();
    return view('registration', compact('religions', 'userSettingFields'));
  }
  public function physicalAttribute()
  {
    //   dd('ok');

    $userSettingFields = UserSettingField::all();
    return view('registar.physicalAttribute', [
      'userSettingFields'=>$userSettingFields,
    ]);;
  }


  public function socialCulture ()
  {
    //   dd('ok');

    $userSettingFields = UserSettingField::all();
    return view('registar.socialCulture',[
      'userSettingFields'=>$userSettingFields
    ]);
  }

  public function familyInfo()
  {
    //   dd('ok');

    $userSettingFields = UserSettingField::all();
    return view('registar.familyInfo', [
      'userSettingFields'=>$userSettingFields,
    ]);
  }

  public function contactInfo()
  {
    $userSettingFields = UserSettingField::all();
    $divisions = Division::orderBy('name')->get();
    $districts = District::orderBy('name')->get();
            // dd($districts);
    $thanas = Upazila::orderBy('name')->get();
    // dd($divisions, $districts, $thanas  );

    return view('registar.contactInfo', compact('divisions', 'districts', 'thanas','userSettingFields'));
  }

  public function lifestyleInfo()
  {
    //   dd('ok');

    $userSettingFields = UserSettingField::all();
    return view('registar.lifestyleInfo',[
      'userSettingFields'=>$userSettingFields,
    ]);
  }



  public function pertnerForm()
  {
    $userSettingFields = UserSettingField::all();
    $religions=Religion::get();
    return view('pertnerForm', compact('religions','userSettingFields'));
  }
}
