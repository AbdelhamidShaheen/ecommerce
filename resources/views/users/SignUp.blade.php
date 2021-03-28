@extends('layouts.user_layout')
@section('title')
    {{ trans('user.sign_up') }}
@endsection

@section('body')

    <div style="width: 300px;" class="mx-auto mt-3 ">
        <p style="text-align: center;color: orangered;font-size: xx-large;font-weight: bolder" class="mb-3">{{ trans('home.app_name') }}</p>
        <div class="fluid-container border p-3 ">
            <h4 class="mb-3"> {{ trans('user.sign_up') }}</h4>
            <form method="POST"  action="{{ route('postsignup') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user_name" name="username" required>
                </div><div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password"name="password" required>
                </div>
                <div class="mb-3">
                    <label for="con_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="con_password" name="conpassword" required>
                  </div>
                
                <button type="submit" class="btn btn-primary form-control">Create</button>
                <p>do you have acount?<a href="{{ route('signin') }}">Sign In</a></p>
                
              </form>
        </div>
    </div>
@endsection

@section('footer')

@endsection
