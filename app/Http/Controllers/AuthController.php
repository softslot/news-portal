<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRecoveryRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\Greeting;
use App\Mail\PasswordRecovery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    public function showRegisterForm(): Response
    {
        return response()->view('auth.register');
    }

    public function showLoginForm(): Response
    {
        return response()->view('auth.login');
    }

    public function showPasswordRecoveryForm(): Response
    {
        return response()->view('auth.password-recovery');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Auth::guard('web')->login($user);
        }

        Mail::to($user)->send(new Greeting());

        return redirect()->to(RouteServiceProvider::HOME);
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->to(RouteServiceProvider::HOME);
    }

    public function passwordRecovery(PasswordRecoveryRequest $request): RedirectResponse
    {
        ['email' => $email] = $request->validated();

        $user = User::query()->where('email', $email)->first();

        if ($user) {
            $newPassword = Str::random(12);

            $user->update([
                'password' => Hash::make($newPassword),
            ]);

            Mail::to($user)->send(new PasswordRecovery($newPassword));
        }

        return redirect()->route('login');
    }
}
