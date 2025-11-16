<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Показать профиль текущего пользователя
    public function show()
    {
        $user = Auth::user()->load('certificates');
        return view('user.show', compact('user'));
    }

    // Форма редактирования профиля
    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    // Обновить данные профиля
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
        ]);

        $user->update($request->only('name', 'full_name'));

        return redirect()->route('user.show')->with('success', 'Профиль обновлён!');
    }
}
