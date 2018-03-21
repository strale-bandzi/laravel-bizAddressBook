@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Business Adress bar</div>

                <div class="panel-body">
        
                        @if(count($listings))

                        <table class="table table-striped">
                            <tr><th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr><td>{{$listing->name}}</td>
                                    <td></td>
                                    <td></td>
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
