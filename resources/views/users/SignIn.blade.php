@extends('layouts.user_layout')
@section('title')
    {{ trans('user.sign_in') }}
@endsection

@section('body')

    <div style="width: 300px;" class="mx-auto mt-3 ">
        <p style="text-align: center;color: orangered;font-size: xx-large;font-weight: bolder" class="mb-3">
            {{ trans('home.app_name') }}</p>
        <div class="fluid-container border p-3 ">
            <h4 class="mb-3"> {{ trans('user.sign_in') }}</h4>
            <form method="POST" action="{{ route('postsignin') }}">
                @csrf
               
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
               
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberme">
                    <label class="form-check-label">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary form-control">{{ trans('user.sign_in') }}</button>
                <p>do you have not acount?<a href="{{ route('signup') }}">{{ trans('user.sign_up') }}</a></p>

            </form>
        </div>
    </div>
@endsection

@section('footer')

@endsection
