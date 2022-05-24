@extends('backend.layouts.app')
@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\PermissionRequest') !!}
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">{{ module_title($module) }}</h4>
                                <h6 class="card-subtitle">Detail {{ module_title($module) }}</h6>
                            </div>
                            <div class="col-md-4" align="right">
                                <a href="{{ route($route . '.index') }}" class="btn btn-danger btn-lg"><i
                                        class="m-r-10 mdi mdi-backspace"></i>Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="form form-horizontal">
                            @foreach ($shows as $item)
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">{{ ucfirst($item) }}</label>
                                    <div class="col-sm-10">
                                        @if ($item == "logo")
                                        <img src="{{ url($detail->{$item}) }}" alt="" srcset="">
                                        @else
                                        {{ $detail->{$item} }}
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
