<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password, $password_confirmation;

    // Definir las reglas de validación
    protected $rules = [
        'name' => 'required|string|min:3|max:50',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ];

    // Mensajes personalizados de validación (opcional)
    protected $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El email es obligatorio.',
        'email.unique' => 'Este correo ya está registrado.',
        'password.required' => 'La contraseña es obligatoria.',
    ];

    // Función que se ejecuta al enviar el formulario
    public function submit()
    {
        // Validar los datos de entrada
        $this->validate();

        // Crear el usuario en la base de datos
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Enviar un mensaje de éxito
        session()->flash('message', 'Usuario creado exitosamente.');

         // Reset fields
         $this->reset(['name', 'email', 'password']);
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
