@extends('admin.master')
@section('content-admin')

    <table class =" table table.dark">
<thead>
<tr>
    <th> </th>
    <th scope="col">ID </th>
    <th scope="col">Name </th>
    <th colspan="2"> Chức năng </th>
</tr>
</thead>
       @forelse($Categories as $key => $Category)
           <tr>
           <td> </td>
           <td> {{$key+1 }}</td>
           <td>  {{$Category->name}}</td>
           <td> <button><a href="{{route('categories.edit',$Category->id)}}" class= "btn-outline-dark"> Edit </a></button></td>
           <td> <button onclick="return confirm('Bạn có chắc sẽ xóa ?')"> <a href="{{route('categories.delete',$Category->id)}}" class= "btn-outline-danger" > Delete </a></button></td>
           </tr>
            @endforeach


    </table>







    @endsection
