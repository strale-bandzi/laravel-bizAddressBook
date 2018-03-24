@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Create listing <a href="/panel" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                <div class="panel-body">
                        {!! Form::open(['action' => 'ListingsController@store', 'method'=>'POST']) !!}
                        {{Form::bsText('name', '', ['placeholder'=>'Company Name'])}}
                        {{Form::bsText('email', '', ['placeholder'=>'Company Email'])}}
                        {{Form::bsText('phone', '', ['placeholder'=>'Company Phone'])}}
                        {{Form::bsText('address', '', ['placeholder'=>'Company address'])}}
                        {{Form::bsText('website', '', ['placeholder'=>'Company website'])}}
                        {{Form::bsTextArea('bio', '', ['placeholder'=>'About Company'])}}
                        {{Form::bsBtn('', 'Submit', ['class'=>'btn btn-info'])}}
                        {!!Form::close()!!}
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection