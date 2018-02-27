@extends('layouts.default')

@section('content')


    <h1>Messages</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">email</th>
            <th scope="col">Message</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">abc@njit.edu</th>
            <td>My Message</td>
            <td>
                <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="checkbox" checked autocomplete="off"> Delete
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">abc@njit.edu</th>
            <td>My Message</td>
            <td>
                <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="checkbox" checked autocomplete="off"> Delete
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">abc@njit.edu</th>
            <td>My Message</td>
            <td>
                <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="checkbox" checked autocomplete="off"> Delete
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">abc@njit.edu</th>
            <td>My Message</td>
            <td>
                <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="checkbox" checked autocomplete="off"> Delete
                    </label>
                </div>
            </td>
        </tr>
        </tbody>
    </table>



@endsection