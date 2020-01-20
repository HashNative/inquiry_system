@extends('layouts.master')
@section('content')
<html>
<head>
<style type="text/css">
        table,tr,td {
            border: 3px solid rgb(19,112,143) ;
        }
        
    </style>
    </head>
    <body>

    <a href="{{route('staff.create')}}"class ="btn btn-outline btn-info" tittle="Add">
                add
            </a>

     <table  class="table table-striped table-bordered table-hover" id="coursedatatable"> 
     <thead>
     <tr>
    <th>Staff Id </th>
    <th>Staff Name </th>
    <th>Languages</th>
    
    <th>Mobile Number</th>   

    </tr>
    </thead>
    <tbody>
    @foreach ($staffs as $staff)
    <tr>
        <td>{{ $staff->staff_id}}</td>
        <td>{{ $staff->staff_name}}</td>
        <td>{{ $staff->languages}}</td>
        
        <td>{{ $staff->mobile_number}}</td>



       <td>
            <form action = "{{route('staff.destroy',$staff->id)}}" method = "POST" style="display:inline"onsubmit="if(!confirm('Are you sure')){return false;}">
                <input type = "hidden" name = "_method" value = "delete"> 
                {{csrf_field()}}
                <button type="submit" class="btn btn-danger btn-rounded"><i class="fa fa-trash"tittle="delete details"></i></button>
            
            </form>
        
            <a href="{{route('staff.edit',$staff->id)}}"class="btn mb-1 btn-outline-warning" tittle="edit details">
                <i class="fa fa-pencil"> </i>
            </a>
           <a href="{{route('staff.show',$staff->id)}}"class ="btn btn-outline btn-info" tittle="show details">
                <i class="fa fa-eye"></i>
            </a>
       </td>
       
    </tr>
    @endforeach
</tbody>
  

</body>
</html>
@endsection