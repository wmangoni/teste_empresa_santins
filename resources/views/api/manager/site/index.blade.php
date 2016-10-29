@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$page_title}}
                </div>

                <div class="panel-body">
                    <div class="panel panel-info">
                        <div class="panel-heading"><b>Páginas</b>
                            <a href="{{route("manager.site.create")}}" class="btn btn-default pull-right btn-xs">
                                <i class="fa fa-plus text-primary"></i>Nova
                            </a>
                        </div>

                        <div class="list-group">
                            @forelse($pages as $page)
                                <div href="#" class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{$page->title}}
                                        </div>
                                        <div class="col-lg-6 text-right">
                                            <a class="btn btn-xs btn-info">
                                                <i class="fa fa-edit"></i>Editar
                                            </a>
                                            <a class="btn btn-xs btn-danger">
                                                <i class="fa fa-exclamation-triangle"></i>Inativar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Nenhuma página foi adicionar ao site...
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection