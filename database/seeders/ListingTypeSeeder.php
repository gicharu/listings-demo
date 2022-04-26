<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings_type')->insert([
                                               [
                                                   'name' => 'Apartment'
                                               ],
                                               [
                                                   'name' => 'House'
                                               ],
                                               [
                                                   'name' => 'Land'
                                               ],
                                               [
                                                   'name' => 'Villa'
                                               ],

                                           ]);
    }
}
