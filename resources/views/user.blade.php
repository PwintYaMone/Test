@extends('layout.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p></p>

    

@endsection

@section('content')
 <table border="1">



	@foreach ($users as $val)
   
    
    <tr>
        <th>Name</th>
      <td> {{$val['name']}}</td>

    
    
        <th>Phone</th>
        <td>{{$val['phone']}}</td>

    
    
        <th>Email</th>
         <td>{{$val['email']}}</td>
    
    
        <th>Address</th>
      <td> {{$val['address']}}</td>
    
        @foreach ($val['score'] as $key=>$val)
        <td>{{$key}}</td>
         <td>{{$val}}</td>
   
        @endforeach
        </tr>

     @endforeach
</table>



            

        



                

@endsection
   