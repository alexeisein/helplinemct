<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LocationsTableSeeder::class);
        // $this->call(HospitalsTableSeeder::class);
        // $this->call(TreatmentsTableSeeder::class);
        
        factory(App\Location::class, 5)->create();

        // factory(App\Speciality::class, 1)->create();

        factory(App\Treatment::class, 3)->create();

        // factory(App\Facility::class, 1)->create();

        factory(App\Hospital::class, 1)->create();

        factory(App\Department::class, 1)->create();

        // factory(App\Doctor::class, 1)->create();

        

        factory(App\Hospital::class, 9)->create()->each(function($hospital) {
             factory(App\Facility::class, 3)->make()->each(function($facility) use ($hospital) {
                  $hospital->facilities()->save($facility);
            });
             factory(App\Department::class, 2)->make()->each(function($dept) use ($hospital) {
                  $hospital->departments()->save($dept);
            });
        });

        factory(App\Doctor::class, 50)->create()->each(function($doctor) {
          factory(App\Treatment::class, 5)->make()->each(function($treatment) use ($doctor) {
                  $doctor->treatments()->save($treatment);
          });
          factory(App\Speciality::class, 6)->make()->each(function($speciality) use ($doctor) {
                  $doctor->specialities()->save($speciality);
          });
             
        });


    }
}
