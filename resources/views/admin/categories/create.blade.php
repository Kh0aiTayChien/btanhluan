@extends('admin.master')
@section('content-admin')
    <form method="post" action="{{route('categories.create')}}">
        @csrf
        <label for="Name"><b>Tên thể loại </b></label>
        <input type="text" placeholder="Đăng kí thể loại mới  " name="name" required>
        <span class="error-message" style="color:red">{{ $errors->first('name') }}</span></p>
        <button type="submit" class="btn-outline-dark"> Lưu sự thay đổi </button>
    </form>
@endsection
