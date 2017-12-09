@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Three</div>

                <div class="panel-body">
                  Three view
                </div>
                <div>
                    <a href="{{route('home')}}">BACK</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
