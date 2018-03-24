@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Edit listing <a href="/panel" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                <div class="panel-body">
                        {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=>'POST']) !!}
                        {{Form::bsText('name', $listing->name, ['placeholder'=>'Company Name'])}}
                        {{Form::bsText('email', $listing->email, ['placeholder'=>'Company Email'])}}
                        {{Form::bsText('phone', $listing->phone, ['placeholder'=>'Company Phone'])}}
                        {{Form::bsText('address', $listing->address, ['placeholder'=>'Company address'])}}
                        {{Form::bsText('website', $listing->website, ['placeholder'=>'Company website'])}}
                        {{Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'About Company'])}}
                        {{Form::hidden('_method', 'PUT')}} 
                        {{Form::bsBtn('', 'Submit', ['class'=>'btn btn-info'])}}
                        {!!Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection