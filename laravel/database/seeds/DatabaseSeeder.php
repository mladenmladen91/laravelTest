<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Note;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        /*factory('App\User',1000)->create()->each(function ($user) {
        $user->notes()->create(['name'=> "testing only"]);*/
        $kategorija = factory('App\Group')->create()->id;
        $data = [];
        $noteData = [];
       
        $total = User::all()->count();
        
        if($total > 0){
            $j = $total;
        }else{
            $j = 0;
        }
        
        for($i = 1;$i < 1001; $i++){
            $name = "John{$j}";
            $surname = "Doe{$i}";
            $data1 = ['first_name'=>$name,'last_name'=>$surname,'avatar'=>'admin.png','zip'=>'567','phone'=>'67788','country'=>'Montenegro','address'=>'testing st.','group_id'=>$kategorija, 'email'=>'test@example.com'];
            array_push($data, $data1);
            
            $data2 = ['name'=>'test text','user_id'=>$j + $i];
            array_push($noteData, $data2);
        }
        User::insert($data);
        Note::insert($noteData);
     
        
    /*  $data2 =[];
        
        for($i = 0;$i < 1000; $i++){
            $data1 = ['first_name'=>'test','last_name'=>'test2','avatar'=>'admin.png','zip'=>'567','phone'=>'67788','country'=>'Montenegro','address'=>'testing st.','group_id'=>$kategorija, 'email'=>'test@example.com'];
            array_push($data2, $data1);
            
        }
        User::insert($data2);
        
        $data3 =[];
        
        for($i = 0;$i < 1000; $i++){
            $data1 = ['first_name'=>'test','last_name'=>'test2','avatar'=>'admin.png','zip'=>'567','phone'=>'67788','country'=>'Montenegro','address'=>'testing st.','group_id'=>$kategorija, 'email'=>'test@example.com'];
            array_push($data3, $data1);
            
        }
        User::insert($data3); */
        
        
        
   // });
    }
}
