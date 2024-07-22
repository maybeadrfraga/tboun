<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create', ['roles' => Role::get(['id', 'name'])]);
    }

    public function store()
    {
        // Defina o valor padrão do role_id como 3 se não estiver presente
        $role_id = request()->filled('role_id') ? request()->role_id : 3;

        // Valide os atributos, excluindo role_id das regras de validação
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        // Adicione o role_id no array de atributos
        $attributes['role_id'] = $role_id;

        // Crie o usuário com os atributos validados
        $user = User::create($attributes);

        // Faça login automático do usuário recém-criado
        auth()->login($user);

        // Redirecione para a página de perfil do usuário com uma mensagem de sucesso
        return redirect('/user-profile')->withStatus('User successfully created.');
    }

}
