@extends('layouts.master')

@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Login page')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop
@section('content')
    <div class="container">
        <div class="m-3 d-flex flex-column bd-highlight justify-content-center">
            <div class="mb-3 d-flex justify-content-center">
                <div>
                    <h1>Page de Connection</h1>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop
