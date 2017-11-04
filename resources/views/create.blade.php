@extends('Module::app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @section('heading')
                            <h4 class="page-title">{{ trans('Module::module.create_title') }}</h4>
                        @endsection
                        @include('Module::heading')
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{ Form::open(array('url' => 'module')) }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'required' => 'required')) }}
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'required' => 'required')) }}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', 'Description') }}
                                    {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control', 'rows' => 5, 'cols' => 40, 'required' => 'required')) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                {{ Form::submit('Create the Module!', array('class' => 'btn btn-primary')) }}

                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
