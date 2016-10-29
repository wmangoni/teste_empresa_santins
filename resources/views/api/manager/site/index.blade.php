@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$page_title}}
                    <a href="{{route("manager.site.create")}}" class="btn btn-default pull-right btn-xs">
                        <i class="fa fa-newspaper-o"></i>Nova página
                    </a>
                </div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection