<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // Для подтверждения пароля должно быть и поле password_confirmation
        ]);

        // Если валидация не пройдена, Laravel автоматически перенаправит вас назад с сообщениями об ошибках.
        return "Validatsiyadan muvaffaqiyatli o'tdi";
    }
}
