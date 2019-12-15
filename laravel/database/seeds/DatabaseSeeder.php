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
        
        $total = User::all()->count();
        $j = $total;
        
        $data3 = [];
        $noteData2 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data3, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData2, $data2);
        }
        User::insert($data3);
        Note::insert($noteData2);
        
         $data4 = [];
        $noteData4 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data4, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData4, $data2);
        }
        User::insert($data4);
        Note::insert($noteData4);
        
        $total = User::all()->count();
        $j = $total;
        
        $data5 = [];
        $noteData5 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data5, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData5, $data2);
        }
        User::insert($data5);
        Note::insert($noteData5);
        
         $data6 = [];
        $noteData6 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data6, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData6, $data2);
        }
        User::insert($data6);
        Note::insert($noteData6);
        
        $total = User::all()->count();
        $j = $total;
        
        $data7 = [];
        $noteData7 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data7, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData7, $data2);
        }
        User::insert($data7);
        Note::insert($noteData7);
        
         $data8 = [];
        $noteData8 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data8, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData8, $data2);
        }
        User::insert($data8);
        Note::insert($noteData8);
        
        $total = User::all()->count();
        $j = $total;
        
        $data9 = [];
        $noteData9 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data9, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData9, $data2);
        }
        User::insert($data9);
        Note::insert($noteData9);
        
         $data10 = [];
        $noteData10 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data10, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData10, $data2);
        }
        User::insert($data10);
        Note::insert($noteData10);
        
        $total = User::all()->count();
        $j = $total;
        
        $data11 = [];
        $noteData11 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data11, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData11, $data2);
        }
        User::insert($data11);
        Note::insert($noteData11);
        
        $data12 = [];
        $noteData12 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data12, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData12, $data2);
        }
        User::insert($data12);
        Note::insert($noteData12);
        
        $total = User::all()->count();
        $j = $total;
        
        $data13 = [];
        $noteData13 = [];
        for($i = 1;$i < 501; $i++){
            $data1 = ['first_name'=>$faker->firstName,'last_name'=>$faker->lastName,'avatar'=>'admin.png','zip'=>'567','phone'=>$faker->phoneNumber,'country'=>'Montenegro','address'=>$faker->address,'group_id'=>$kategorija, 'email'=>$faker->unique()->safeEmail];
            array_push($data13, $data1);
            
            $data2 = ['name'=>$faker->realText(2000),'user_id'=>($j + $i)];
            array_push($noteData13, $data2);
        }
        User::insert($data13);
        Note::insert($noteData13);
        
        
        
        
    }
}
