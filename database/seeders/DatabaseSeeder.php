<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Route;
use App\Models\Stop;
use App\Models\Town;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $town1 = Town::create(['name' => 'Town A']);
       $town2 = Town::create(['name' => 'Town B']);
       $town3 = Town::create(['name' => 'Town C']);

       $bus1 = Bus::create(['name' => 'No. 1']);
       $bus2 = Bus::create(['name' => 'No. 2']);
       $bus3 = Bus::create(['name' => 'No. 3']);

       $route1 = Route::create(['bus_id' => $bus1->id, 'town_id' => $town1->id, 'name' => 'Route A']);
       $route2 = Route::create(['bus_id' => $bus2->id, 'town_id' => $town2->id, 'name' => 'Route B']);
       $route3 = Route::create(['bus_id' => $bus3->id, 'town_id' => $town3->id, 'name' => 'Route C']);

       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 1A']);
       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 2A']);
       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 3A']);
       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 1B']);
       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 2B']);
       Stop::create(['route_id' => $route1->id, 'town_id' => $town1->id, 'name' => 'Stop 3B']);
    }
}
