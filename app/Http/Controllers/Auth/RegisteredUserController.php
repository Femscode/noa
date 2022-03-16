<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required'],
            'restaurant_category' => ['required'],
            'opening_hour' => ['required'],
            'phone' => ['required'],
            'closing_hour' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
       
      

        $user = User::create([
            'name' => $request->name,
            'slug' => trim($request->name),
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'opening_hour' => $request->opening_hour,
            'closing_hour' => $request->closing_hour,
            'restaurant_category' => $request->restaurant_category,
            'password' => Hash::make($request->password),
        ]);
       
    

        event(new Registered($user));

        Auth::login($user);

        if($request->restaurant_category == 1 ) {
            Category::create(['name'=> 'Food','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Soft Drinks','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Alcoholic Drinks','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Meat And Roughages','user_id'=>Auth::user()->id]);
        }
        elseif ($request->restaurant_category == 2 ) {
            Category::create(['name'=> 'Small Size Cakes','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Medium Size Cakes','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Ceremonial Cakes','user_id'=>Auth::user()->id]);
         

        }
        elseif ($request->restaurant_category == 3 ) {
            Category::create(['name'=> 'Shawarma','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Pizza','user_id'=>Auth::user()->id]);
            Category::create(['name'=> 'Grills','user_id'=>Auth::user()->id]);
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
