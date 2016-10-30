@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>{{$page_title}}</b>
                    <a href="{{route("manager.site.section")}}" class="btn btn-default pull-right btn-xs">
                        <i class="fa fa-reply"></i>Voltar
                    </a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ route('manager.site.section.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="page_id" value="{{$page_id}}">

                        <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                            <label for="order" class="col-md-4 control-label">Ordem</label>

                            <div class="col-md-6">
                                <input id="order" type="number" min="1" class="form-control" name="order"
                                       value="{{ old('order') }}">

                                @if ($errors->has('order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('order') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('col_lg') ? ' has-error' : '' }}">
                            <label for="col_lg" class="col-md-4 control-label">Coluna tela grande ( 1200px > )</label>

                            <div class="col-md-6">
                                <input id="col_lg" type="number" min="1" max="12" class="form-control" name="col_lg"
                                       value="{{ old('col_lg') }}">

                                @if ($errors->has('col_lg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_lg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_md') ? ' has-error' : '' }}">
                            <label for="col_md" class="col-md-4 control-label">Coluna tela média ( 992px > )</label>

                            <div class="col-md-6">
                                <input id="col_md" type="number" min="1" max="12" class="form-control" name="col_md"
                                       value="{{ old('col_md') }}">

                                @if ($errors->has('col_md'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_md') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_sm') ? ' has-error' : '' }}">
                            <label for="col_sm" class="col-md-4 control-label">Coluna tela pequena ( 768px > )</label>

                            <div class="col-md-6">
                                <input id="col_sm" type="number" min="1" max="12" class="form-control" name="col_sm"
                                       value="{{ old('col_sm') }}">

                                @if ($errors->has('col_sm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_sm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('col_xs') ? ' has-error' : '' }}">
                            <label for="col_xs" class="col-md-4 control-label">Coluna tela muito pequena ( < 768px )</label>

                            <div class="col-md-6">
                                <input id="col_xs" type="number" min="1" max="12" class="form-control" name="col_xs"
                                       value="{{ old('col_xs') }}">

                                @if ($errors->has('col_xs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('col_xs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descrição</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description"
                                          value="{{ old('description') }}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('box_color') ? ' has-error' : '' }}">
                            <label for="box_color" class="col-md-4 control-label">Cor da seção</label>

                            <div class="col-md-6">
                                <input id="box_color" type="text" class="form-control" name="box_color"
                                       value="{{ old('box_color') }}" placeholder="Cor no padrão Hex: #d92626">

                                @if ($errors->has('box_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('box_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-floppy-o"></i>Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection