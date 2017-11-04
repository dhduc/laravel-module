@extends('Module::app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><p class="lead">Documentation</p></div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <td>
                                        HTTP Verb
                                    </td>
                                    <td>
                                        Path (URL)
                                    </td>
                                    <td>
                                        Action (Method)
                                    </td>
                                    <td>
                                        Route Name
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        GET
                                    </td>
                                    <td>
                                        /module
                                    </td>
                                    <td>
                                        index
                                    </td>
                                    <td>
                                        module.index
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GET
                                    </td>
                                    <td>
                                        /module/create
                                    </td>
                                    <td>
                                        create
                                    </td>
                                    <td>
                                        module.create
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        POST
                                    </td>
                                    <td>
                                        /module
                                    </td>
                                    <td>
                                        store
                                    </td>
                                    <td>
                                        module.store
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GET
                                    </td>
                                    <td>
                                        /module/{id}
                                    </td>
                                    <td>
                                        show
                                    </td>
                                    <td>
                                        module.show
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        GET
                                    </td>
                                    <td>
                                        /module/{id}/edit
                                    </td>
                                    <td>
                                        edit
                                    </td>
                                    <td>
                                        module.edit
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PUT/PATCH
                                    </td>
                                    <td>
                                        /module/{id}
                                    </td>
                                    <td>
                                        update
                                    </td>
                                    <td>
                                        module.update
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        DELETE
                                    </td>
                                    <td>
                                        /module/{id}
                                    </td>
                                    <td>
                                        destroy
                                    </td>
                                    <td>
                                        module.destroy
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
