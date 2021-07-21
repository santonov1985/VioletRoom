<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('system')->default(0);
            $table->timestamps();
        });

        if (Schema::hasTable('roles')) {
            DB::table('roles')->insert([
                [
                    'name' => 'SuperAdmin',
                    'slug' => 'super_admin',
                    'description' => 'SuperAdmin: роль с полным доступом ко всем модулям системы',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Admin',
                    'slug' => 'admin',
                    'description' => 'Admin: роль с не полным доступом к модулям системы',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]
            ]);
        }
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
