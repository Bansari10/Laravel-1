@extends('layouts.default')

@section('content')

    <div class="text-center">
        <div class="card-title">
            <h1>Sign-up</h1>
            <div class="card-body">
                <form class="form-signin">
                    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                    <label for="Re-enterPassword" class="sr-only">Re-enter Password</label>
                    <input type="password" id="Re-enterPassword" class="form-control" placeholder="Re-enterPassword" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                </form>
            </div>

        </div>




@endsection