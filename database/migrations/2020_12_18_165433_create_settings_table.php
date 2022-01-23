<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover1')->nullable();
            $table->string('cover2')->nullable();
            $table->string('cover3')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert(
            array(
                
                'title' => 'REZA Lifestyle',
                'logo' => 'logo.png',
                'cover1' => 'cover1.jpg',
                'cover2' => 'cover2.jpg',
                'cover3' => 'cover3.jpg',
                'phonenumber' => '+8801733000689',
                'email' => 'admin@rezalifestyle.com',
                'address' => 'Dhaka, Bangladesh',    
                'facebook' => 'https://facebook.com/rezalifestyle',
                'twitter' => 'https://twitter.com/rezalifestyle',
                'instagram' => 'https://www.instagram.com/rezalifestyle/',
                'linkedin' => 'https://linkedin.com/rezalifestyle',            
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
        Schema::dropIfExists('settings');
    }
}
