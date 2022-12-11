<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Painting;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return Response
     */
    public function create(): Response
    {
        //If there is more than one user, then the registration page is not available
        if (User::count() < 1) {
            return Inertia::render('Auth/Register');
        }
        //The unregistered user is redirected to welcome page
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'paintings' => Painting::all()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     *
     * @return Application|RedirectResponse|Redirector
     *
     * @throws ValidationException
     */
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        //After checking if there is only one user in the database, it will allow the user to register
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));


        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);


    }
}
