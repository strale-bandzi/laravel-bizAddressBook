@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"> Here is the list of all companies </div>
                    
                <div class="panel-body">
        
                        @if(count($listings))

                        <ul class="list-group">
                            @foreach($listings as $listing)
                            <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                            @endforeach 
                        </ul>
                        @else
                            <p class="lead"> No listings found.</p>    
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
