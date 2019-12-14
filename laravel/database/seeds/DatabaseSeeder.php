<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Note;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $faker = Faker::create();
        $kategorija = factory('App\Group')->create()->id;
        $data = [];
        $noteData = [];
       
        $total = User::all()->count();
        
        if($total > 0){
            $j = $total;
        }else{
            $j = 0;
        }
        
        $data3 = [];
        $noteData2 = [];
        
        for($i = 1;$i < 100; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data3, $data1);
            
            $data2 = ['name'=>'test text','user_id'=>$j + $i];
            array_push($noteData2, $data2);
        }
        User::insert($data3);
        Note::insert($noteData2);
        
        
        for($i = 1;$i < 1001; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data, $data1);
            
            $data2 = ['name'=>'test text','user_id'=>$j + $i];
            array_push($noteData, $data2);
        }
        User::insert($data);
        Note::insert($noteData);
        
    }
}
