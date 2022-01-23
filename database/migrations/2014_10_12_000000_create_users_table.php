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
            $table->string('userpic')->default('default.png');
            $table->string('name')->nullable();
            $table->string('phonenumber')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'userpic' => 'default.png',
                'name' => 'Khaled Hassan',
                'phonenumber' => '01733000689',
                'email' => 'khaledbubt@gmail.com',
                'address' => 'Dhaka, Bangladesh',
                'password' => Hash::make('11@22@33'),
                'is_admin' => '1',   
            )
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
