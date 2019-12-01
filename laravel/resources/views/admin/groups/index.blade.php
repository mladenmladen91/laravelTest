@extends('layouts.admin')
@section('content')
  
<div class="container">
  <div class="col-12"> <h1>Groups</h1></div>
  <div class="col-12"><a class="create_link" href="{{route('groups.create')}}">Create group</a></div>     
  <div class="col-12">
     <table border="1">
        <tr>
           <th>Name</th>     
        </tr>
        @foreach($groups as $group)
         <tr><td>{{$group->name}}</td>
             <td><form action="{{route('groups.destroy', $group->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                    <button type="submit">Delete</button>
                 </form></td>
         </tr>
        @endforeach  
     </table>
    <div class="col-12" style="margin-top:30px">{!! $groups->render() !!}</div>  
  </div>    
</div>
@stop