<div class="row bg-title">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        @yield('heading')
    </div>
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('module') }}">{{ trans('Module::module.index_title') }}</a></li>
            <li><a href="{{ URL::to('module/create') }}">{{ trans('Module::module.create_title') }}</a>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        @include('flash::message')
    </div>
</div>