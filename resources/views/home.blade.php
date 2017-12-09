@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <a href="{{route('1.1')}}">one</a>
                    <a href="{{route('1.2')}}">two</a>
                    <br>
                    
                    <a href="{{route('2.1')}}">three</a>
                    <a href="">four</a>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
