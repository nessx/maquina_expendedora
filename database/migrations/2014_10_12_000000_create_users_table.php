<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('saldo')->default('500');
            $table->string('password');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('users')->insert(

            Array([
                'name' => 'Administrador',
                'email' => 'admin@machine.com',
                'saldo' => 1500,
                'password' => Hash::make('1234')
            ],
            [
                'name' => 'user',
                'email' => 'user@machine.com',
                'saldo' => 500,
                'password' => Hash::make('1234')
            ])
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
