<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    }
    public function createAdmin()
    {
        $user = User::create(request(['admin','elRol@gmail.com','Supervisor',bycript('1234567890')]));
        $user = User::create(request(['zavala','zavalaRol@gmail.com','Supervisor',bycript('1234567890')]));
        $user = User::create(request(['adminUser','admiUser@gmail.com','Supervisor',bycript('1234567890')]));
        $user = User::create(request(['SuperMarcos','SuperMarcos@gmail.com','SupervisorUsuario',bycript('1234567890')]));
        $user = User::create(request(['eliasSuperat','eliasSuperat@gmail.com','SupervisorUsuario',bycript('1234567890')]));
        $user = User::create(request(['ElJhon','ElJhon@gmail.com','SupervisorUsuario',bycript('1234567890')]));
        $user = User::create(request(['PabloM','PabloM@gmail.com','SupervisorUsuario',bycript('1234567890')]));
        $user = User::create(request(['AdminAdmin','elRol@gmail.com','admin',bycript('1234567890')]));
        $user = User::create(request(['NicolasZ','theNiky@gmail.com','admin',bycript('1234567890')]));
        $user = User::create(request(['AdminZavala','AdminZavala@gmail.com','admin',bycript('1234567890')]));
        $user = User::create(request(['MarioB','MarioBRol@gmail.com','Supervisor',bycript('1234567890')]));
   

    }
}
