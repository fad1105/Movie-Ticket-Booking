@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body"> 
                        @if(session()->has('errors'))
                        <div style="color: red">    {{$errors}} </div>
                        @else
                        <div style="color: green">   You are a Customer.</div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection