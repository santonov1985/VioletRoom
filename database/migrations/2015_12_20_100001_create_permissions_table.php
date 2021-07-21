<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('slug')->unique();
            $table->string('resource', 20)->default('System');
            $table->boolean('system')->default(0);
            $table->timestamps();
        });

        if ( Schema::hasTable( 'permissions' )) {
            DB::table('permissions')->insert([

                //IndexPage
                [
                    'name' => 'View IndexPage',
                    'slug' => 'index_page.view',
                    'resource' => 'IndexPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

                //StockPage
                [
                    'name' => 'View StockPage',
                    'slug' => 'stock_page.view',
                    'resource' => 'StockPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

                //CinemaPage
                [
                    'name' => 'View CinemaPage',
                    'slug' => 'cinema_page.view',
                    'resource' => 'CinemaPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

                //ServicesPage
                [
                    'name' => 'View ServicesPage',
                    'slug' => 'services_page.view',
                    'resource' => 'ServicesPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

                //GalleryPage
                [
                    'name' => 'View GalleryPage',
                    'slug' => 'gallery_page.view',
                    'resource' => 'GalleryPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

                //ContactsPage
                [
                    'name' => 'View ContactsPage',
                    'slug' => 'contacts_page.view',
                    'resource' => 'ContactsPage',
                    'system' => true,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

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
        Schema::drop('permissions');
    }
}
