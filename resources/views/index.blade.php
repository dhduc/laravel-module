@extends('Module::app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @section('heading')
                            <h4 class="page-title">{{ trans('Module::module.index_title') }}</h4>
                        @endsection
                        @include('Module::heading')
                    </div>

                    <div class="panel-body">

                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td width="400">Description</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($modules as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>
                                        {{ Form::open(array('url' => 'module/' . $value->id, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

                                        <a class="btn btn-small btn-success"
                                           href="{{ URL::to('module/' . $value->id) }}">Show</a>
                                        <a class="btn btn-small btn-info"
                                           href="{{ URL::to('module/' . $value->id . '/edit') }}">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {!! $modules->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
