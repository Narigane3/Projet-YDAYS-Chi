{{-- Callback layout master  --}}
@extends('layouts.master')

@section('head')
    {{-- Give more info into head --}}
    {{-- Not index this page form Google --}}
    <meta name="robot" content="noindex">
@stop


@section('title', 'Page de connection')

@section('navbar')
    @parent
    {{-- call nav bar on this page --}}
@stop

