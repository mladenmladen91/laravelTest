@extends('layouts.admin')
@section('content')
  
<div class="container">
  <div class="col-12"> <h1>Update contact</h1></div>   
  <div class="col-12">
     <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf
         <div class="form-group">
           <input type="text" name="first_name" required placeholder="first_name" value="{{$user->first_name}}">
         </div>
         <div class="form-group">
           <input type="text" name="last_name" required placeholder="last_name" value="{{$user->last_name}}">
         </div>
         <div class="form-group">
           <input type="file" name="avatar" placeholder="avatar">
           <img src="{{URL::to('images/'.$user->avatar)}}" width="100" height="100">  
         </div>
         <div class="form-group">
           <input type="email" name="email" required placeholder="email" value="{{$user->email}}">
         </div>
         <div class="form-group">
           <input type="text" name="country" required placeholder="country" value="{{$user->country}}">
         </div>
         <div class="form-group">
           <input type="text" name="address" required placeholder="address" value="{{$user->address}}">
         </div>
         <div class="form-group">
           <input type="text" name="zip" required placeholder="zip" value="{{$user->zip}}">
         </div>
         <div class="form-group">
           <input type="text" name="phone" required placeholder="phone" value="{{$user->phone}}">
         </div>
         <div class="form-group">
          <select type="text" name="group_id" required>
             @foreach($groups as $group)
                @if($group->id == $user->group_id)
                  <option value="{{$group->id}}" selected>{{$group->name}}</option>
                @else
                  <option value="{{$group->id}}">{{$group->name}}</option>
                @endif
                
             @endforeach   
            </select>       
         </div> 
         <div class="form-group">
             <textarea name="name" placeholder="Note">{{@$user->notes->name}}</textarea>
         </div>
         <div class="form-group">
           <input type="submit" name="submit" value="edit user">
         </div>
      </form>  
  </div>    
</div>
@stop