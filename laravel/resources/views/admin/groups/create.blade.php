@extends('layouts.admin')
@section('content')
  
<div class="container">
  <div class="col-12"> <h1>Create group</h1></div>   
  <div class="col-12">
     <form action="{{route('groups.store')}}" method="post">
         @csrf
         <div class="form-group">
           <input type="text" name="name" required>
         </div>
         <div class="form-group">
           <input type="submit" name="submit" value="create">
         </div>
      </form>  
  </div>    
</div>
@stop