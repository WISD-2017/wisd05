@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">One</div>

                <div class="panel-body">
                    One view
                    <div>
                    <a href="{{route('home')}}">BACK</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
