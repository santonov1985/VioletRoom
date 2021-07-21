<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->constrained()->cascadeOnDelete();
            $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        if (Schema::hasTable('permission_role')) {

            $permissions = DB::table('permissions')->get();

            foreach ($permissions as $permission) {
                DB::table('permission_role')->insert([
                    'permission_id' => $permission->id,
                    'role_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }

            //Admin
            $filteredPermissions = $permissions->filter(function ($value, $key) {
                return $value->id > 9;
            });

            foreach ($filteredPermissions as $permission) {
                DB::table('permission_role')->insert([
                    'permission_id' => $permission->id,
                    'role_id' => 2,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ]);
            }
        }

    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('permission_role');
    }
}
