@extends('admin.master')
@section('content-admin')
    <form method="post" action="{{route('categories.update',$category->id)}}">
        @csrf
        <label for="Name"><b>Sửa tên thể loại </b></label>
        <input type="text" value="{{$category->name}}"  name="name" >
        <span class="error-message" style="color:red">{{ $errors->first('name') }}</span></p>
        <button type="submit" class="btn-outline-dark"> Lưu sự thay đổi </button>
    </form>
@endsection
