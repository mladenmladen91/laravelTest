@extends('layouts.admin')
@section('content')
  
<div class="container">
  <div class="col-12"> <h1>Users</h1></div>
  <div class="col-12"><a class="create_link" href="{{route('users.create')}}">Create user</a></div>     
  <div class="col-12">
     <table border="1">
        <tr>
           <th>First Name</th>
           <th>Last name</th>
           <th>E-mail</th>
            <th>Avatar</th>
          <th>Country</th>
          <th>Address</th>
          <th>ZIP</th>
          <th>Phone</th>
          <th>Group</th>    
          <th>Note</th>     
        </tr>
         @foreach($users as $user)
           <tr>
              <td>{{$user->first_name}}{{$user->id}}</td>
              <td>{{$user->last_name}}</td>
               <td>{{$user->email}}</td>
               <td><img src="../images/{{$user->avatar}}" height="50" width="50"></td>
               <td>{{$user->country}}</td>
               <td>{{$user->address}}</td>
               <td>{{$user->zip}}</td>
               <td>{{$user->phone}}</td>
               <td>{{@$user->group->name}}</td>
               <td>{{Str::limit(@$user->notes->name,20)}}</td>
               <td>
                  <form action="{{route('users.destroy', $user->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                    <button type="submit">Delete</button>
                 </form>
               </td>
               <td><a href="{{ route('users.edit', $user->id) }}">EDIT</a></td>
           </tr>
         @endforeach
     </table>  
  </div>
  <div class="col-12" style="margin-top:30px">{!! $users->render() !!}</div>     
</div>
@stop