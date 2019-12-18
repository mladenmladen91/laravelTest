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
        
       $p= 1;
        
        while($p < 14){
        
        $total = User::all()->count();
        
        if($total > 0){
            $j = $total;
        }else{
            $j = 0;
        }
        
      
        
        $data = [];
        $noteData = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData, $data2);
        }
        User::insert($data);
        Note::insert($noteData);
         
        $p++;
            
        }
                
    
        
    }
}
