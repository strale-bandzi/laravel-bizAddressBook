@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Business Adress bar
                    <span class="pull-right"><a href="listings/create" class="btn btn-info btn-xs">Add Listing</a></span>
                </div>

                <div class="panel-body">
        
                        @if(count($listings))

                        <table class="table table-striped">
                            <tr><th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr><td>{{$listing->name}}</td>
                                    <td><a href="/listings/{{$listing->id}}/edit" class="pull-right btn btn-default">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method'=>'POST', 'class'=>'pull-left', 'onsubmit'=>'return confirm("Are you sure?")']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}    
                                        {{Form::bsBtn('', 'Delete', ['class'=>'btn btn-danger'])}}    
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach 
                        </table>
                    
                        @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
