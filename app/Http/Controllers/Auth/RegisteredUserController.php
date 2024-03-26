<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        /*$user = User::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);*/
        $user = new User();
        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');
        $user->telephone = $request->input('telephone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $user->roles()->attach($request->input('roles'));

        event(new Registered($user));

        Auth::login($user);

        if ($request->user()->roles()->where('nom','admin')->exists()) return redirect(RouteServiceProvider::HOMEADMIN);
        if ($request->user()->roles()->where('nom','chauffeur')->exists()) return redirect(RouteServiceProvider::HOMECHAUFFEUR);
        if ($request->user()->roles()->where('nom','passager')->exists()) return redirect(RouteServiceProvider::HOMEPASSAGER);

    }
}
