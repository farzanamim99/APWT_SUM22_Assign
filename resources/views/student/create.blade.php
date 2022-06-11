@extends('layouts.main')
@section('content')
    <form method="post" action="">
        Id: <input type="text" name="id" value="{{old('id')}}" placeholder="Enter your id"><br><br>
        @error('id')
            {{$message}}<br>
        @enderror
        {{@csrf_field()}}
        Name: <input type="text" name="name" placeholder="Enter your username" value="{{old('name')}}"><br><br>
        @error('name')
            {{$message}}<br>
        @enderror
        Email: <input type="text" name="email" placeholder="Enter your email"><br><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password" ><br><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Confirm Password: <input type="password" name="conf_password"><br><br>
        @error('conf_password')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Create">
    </form>
@endsection