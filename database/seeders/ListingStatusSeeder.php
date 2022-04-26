<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings_status')->insert([
                                               [
                                                   'name' => 'For sale'
                                               ],
                                               [
                                                   'name' => 'For rent'
                                               ],
                                               [
                                                   'name' => 'Lease'
                                               ],
                                               [
                                                   'name' => 'Auction'
                                               ],[
                                                   'name' => 'Sold'
                                               ],

                                           ]);
    }
}
