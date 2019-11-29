@extends('layouts.admin')
@section('content')
  
<div class="container">
  <div class="col-12"> <h1>Create user</h1></div>   
  <div class="col-12">
     <form action="{{route('users.store')}}" method="post">
         @csrf
         <div class="form-group">
           <input type="text" name="first_name" required placeholder="first_name">
         </div>
         <div class="form-group">
           <input type="text" name="last_name" required placeholder="last_name">
         </div>
         <div class="form-group">
           <input type="text" name="avatar" required placeholder="avatar">
         </div>
         <div class="form-group">
           <input type="email" name="email" required placeholder="email">
         </div>
         <div class="form-group">
           <input type="text" name="country" required placeholder="country">
         </div>
         <div class="form-group">
           <input type="text" name="address" required placeholder="address">
         </div>
         <div class="form-group">
           <input type="number" name="zip" required placeholder="zip">
         </div>
         <div class="form-group">
           <input type="number" name="phone" required placeholder="phone">
         </div>
          <div class="form-group">
          <select type="text" name="group_id" required>
             @foreach($groups as $group)
                <option value="{{$group->id}}">{{$group->name}}</option>
             @endforeach   
            </select>       
         </div> 
         <div class="form-group">
             <textarea name="name" placeholder="Note"></textarea>
         </div>
         <div class="form-group">
           <input type="submit" name="submit" value="create user">
         </div>
      </form>  
  </div>    
</div>
@stop