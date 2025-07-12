<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar usuário administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@sistema.com',
            'password' => Hash::make('admin123'),
            'tipo_usuario' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Criar usuário normal
        User::create([
            'name' => 'Usuário Normal',
            'email' => 'usuario@sistema.com',
            'password' => Hash::make('usuario123'),
            'tipo_usuario' => 'normal',
            'email_verified_at' => now(),
        ]);

        echo "Usuários criados com sucesso!\n";
        echo "Admin: admin@sistema.com / admin123\n";
        echo "Usuário: usuario@sistema.com / usuario123\n";
    }
}

