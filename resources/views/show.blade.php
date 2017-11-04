@extends('Module::app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @section('heading')
                            <h4 class="page-title">{{ trans('Module::module.show_title') }}</h4>
                        @endsection
                        @include('Module::heading')
                    </div>

                    <div class="panel-body">
                        <div class="jumbotron">
                            <h2>{{ $module->name }}</h2>
                            <p>
                                <strong>Email:</strong> {{ $module->email }}<br>
                                <strong>Description:</strong> {{ $module->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
