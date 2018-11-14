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
        
        factory(Hmct\Location::class, 5)->create();

        // Populate the tables
        // factory(Hmct\Department::class, 10)->create();
        factory(Hmct\Department::class, 20)->create();

        

        factory(Hmct\Hospital::class, 10)->create()->each(function($hospital) {

                $hospital->comforts()->saveMany(
                  factory(Hmct\Comfort::class, rand(1,20))->make(['hospital_id' => null])
                );

                $hospital->money_matters()->saveMany(
                  factory(Hmct\MoneyMatter::class, rand(1,10))->make(['hospital_id' => null])
                );

                $hospital->foods()->saveMany(
                  factory(Hmct\Food::class, rand(1,5))->make(['hospital_id' => null])
                );

                $hospital->treatment_relateds()->saveMany(
                  factory(Hmct\TreatmentRelated::class, rand(1,15))->make(['hospital_id' => null])
                );

                $hospital->languages()->saveMany(
                  factory(Hmct\Language::class, rand(1,15))->make(['hospital_id' => null])
                );

                $hospital->transportations()->saveMany(
                  factory(Hmct\Transportation::class, rand(1,10))->make(['hospital_id' => null])
                );
            
        });

        factory(Hmct\Treatment::class, 100)->create();

        factory(Hmct\Speciality::class, 40)->create();

        factory(Hmct\Doctor::class, 50)->create();

// Get all the collection
        $treatments = (Hmct\Treatment::all());
        $specialities = (Hmct\Speciality::all());
        $doctors = (Hmct\Doctor::all());
        
// Populate the pivot Tables for doctor and treatment
        $doctors->each(function ($doctor) use ($treatments) { 
            $doctor->treatments()->attach(
                $treatments->random(rand(1, 10))->pluck('id')->toArray()
            );
        });
// Populate the pivot Tables for doctor and specialities
        $doctors->each(function ($doctor) use ($specialities) { 
            $doctor->specialities()->attach(
                $specialities->random(rand(1, 15))->pluck('id')->toArray()
            ); 
        });
// Populate the pivot Tables for hospital and department
        $hospitals = (Hmct\Hospital::all());
        $departments = (Hmct\Department::all());
        $hospitals->each(function ($hospital) use ($departments) { 
            $hospital->departments()->attach(
                $departments->random(rand(1, 9))->pluck('id')->toArray()
            ); 
        });
    }
}
