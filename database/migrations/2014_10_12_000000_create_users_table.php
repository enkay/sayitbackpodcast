<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
						$table->uuid('uuid')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('original_photo')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
						$table->text('tagline')->nullable();
						$table->text('bio')->nullable();
						$table->string('gender')->nullable();
						$table->string('interested_in')->nullable();
						$table->date('birthday')->nullable();
						$table->unsignedTinyInteger('height')->nullable();
						$table->string('ethnicity')->nullable();
						$table->string('body_type')->nullable();
						$table->boolean('has_children')->nullable();
						$table->boolean('previously_married')->nullable();
						$table->string('occupation')->nullable();
						$table->string('education_level')->nullable();
						$table->string('school')->nullable();
						$table->string('religion')->nullable();
						$table->string('city')->nullable();
						$table->string('state')->nullable();
						$table->string('country')->nullable();
						$table->string('exercise')->nullable();
						$table->string('drinks')->nullable();
						$table->string('smokes')->nullable();
						$table->string('weed')->nullable();
						$table->string('drugs')->nullable();
						$table->string('instagram')->nullable();
						$table->string('tiktok')->nullable();
						$table->string('facebook')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('approved_at')->nullable();
						$table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
						$table->softDeletes();
        });
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
