@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"> {{$listing->name}} <a href="/listings" class="btn btn-default btn-xs pull-right">Go Back</a></div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address: {{$listing->address}}</li>
                        <li class="list-group-item">Email: <a href="mailto:{{$listing->email}}">{{$listing->email}}</a></li>
                        <li class="list-group-item">Website:<a href="{{$listing->website}}"> {{$listing->website}}</a></li>
                        <li class="list-group-item">Phone: {{$listing->phone}}</li>
                        
                    </ul>
                    <div class="well">
                             {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection