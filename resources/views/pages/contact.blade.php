@extends('layouts.default')

@section('content')

    <div class="card mt-4 pl-3 pr-3">
        <div class="card-title">
            <h1>Contact</h1>
            <p class="lead">Please use this form to contact the site owner.</p></div>
        <div class="card-body">

            <form action="{{route('contact.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="subject">Name</label>
                    <input type="text" class="form-control" name="name" id="subject" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" name="message" id="body" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>




@endsection