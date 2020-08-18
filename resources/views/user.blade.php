@extends('layout.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p></p>

    

@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <table class="table table-primary">
  <thead>
    <th>Name</th>
    <th>Phone</th>

    <th>Email</th>

    <th>Address</th>
    <th>First Month</th>
     <th>Score</th>

     <th>Second Month</th>
     <th>Score</th>




  </thead>



	@foreach ($users as $val)
  
  <tbody>
   
    
    <tr>
      <td> {{$val['name']}}</td>

    
    
        <td>{{$val['phone']}}</td>

    
    
         <td>{{$val['email']}}</td>
    
    
      <td> {{$val['address']}}</td>
    
        @foreach ($val['score'] as $key=>$val)
        <td>{{$key}}</td>
         <td>{{$val}}</td>
   
        @endforeach
        

     @endforeach
     </tr>
      </tbody>
</table>



            

        



                

@endsection
   