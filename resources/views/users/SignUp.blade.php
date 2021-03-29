@extends('layouts.user_layout')
@section('title')
    {{ trans('user.sign_up') }}
@endsection

@section('body')

    <div style="width: 300px;" class="mx-auto mt-3">
        <p style="text-align: center;color: orangered;font-size: xx-large;font-weight: bolder" class="mb-3">{{ trans('home.app_name') }}</p>
        <div class="fluid-container border p-3 ">
            <h4 class="mb-3"> {{ trans('user.sign_up') }}</h4>
            <form method="POST"  action="{{ route('postsignup') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control {{$errors->has('username')?'border border-danger':''}}" id="user_name" name="username" required>
                    <p class="{{$errors->has('username')?'er-msg':'d-none'}} ">@if ($errors->has('username'))
                        @foreach ($errors->get('username') as $message)
                            {{$message}}
                        @endforeach
                    @endif</p>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control {{$errors->has('email')?'border border-danger':''}}" id="email" name="email" required>
                    <p class=" {{$errors->has('email')?'er-msg':'d-none'}} ">@if ($errors->has('email'))
                        @foreach ($errors->get('email') as $message)
                            {{$message}}
                        @endforeach
                    @endif</p>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control {{$errors->has('password')?'border border-danger':''}}" id="password"name="password" required>
                  <p class=" {{$errors->has('password')?'er-msg':'d-none'}} ">@if ($errors->has('password'))
                    @foreach ($errors->get('password') as $message)
                        {{$message}}
                    @endforeach
                @endif</p>
                </div>
                <div class="mb-3">
                    <label for="con_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control {{$errors->has('conpassword')?'border border-danger':''}}" id="con_password" name="conpassword" required>
                    <p class=" {{$errors->has('conpassword')?'er-msg':'d-none'}} ">@if ($errors->has('conpassword'))
                        @foreach ($errors->get('conpassword') as $message)
                            {{$message}}
                        @endforeach
                    @endif</p>  
                </div>
                
                <button type="submit" class="btn btn-primary form-control">Create</button>
                <p>do you have acount?<a href="{{ route('signin') }}">Sign In</a></p>
                
              </form>
        </div>
    </div>
@endsection

@section('footer')

@endsection
