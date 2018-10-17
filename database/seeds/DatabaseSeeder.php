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
        

        factory(App\Hospital::class, 10)->create()->each(function($hospital) {

                $hospital->departments()->saveMany(
                  factory(App\Department::class, 10)->make(['hospital_id' => null])
                );

                $hospital->comforts()->saveMany(
                  factory(App\Comfort::class, rand(1,20))->make(['hospital_id' => null])
                );

                $hospital->money_matters()->saveMany(
                  factory(App\MoneyMatter::class, rand(1,10))->make(['hospital_id' => null])
                );

                $hospital->foods()->saveMany(
                  factory(App\Food::class, rand(1,5))->make(['hospital_id' => null])
                );

                $hospital->treatment_relateds()->saveMany(
                  factory(App\TreatmentRelated::class, rand(1,15))->make(['hospital_id' => null])
                );

                $hospital->languages()->saveMany(
                  factory(App\Language::class, rand(1,15))->make(['hospital_id' => null])
                );

                $hospital->transportations()->saveMany(
                  factory(App\Transportation::class, rand(1,10))->make(['hospital_id' => null])
                );
            
        });

        // factory(App\Comfort::class, 15)->create();

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
