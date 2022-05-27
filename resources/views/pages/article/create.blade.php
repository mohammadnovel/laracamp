@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">{{ module_title($module) }}</h4>
                                <h6 class="card-subtitle">Manage {{ module_title($module) }}</h6>
                            </div>
                            <div class="col-md-4" align="right">
                                <a href="{{ route($route . '.index') }}" class="btn btn-danger btn-lg"><i
                                        class="m-r-10 mdi mdi-backspace"></i>Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="form">
                            {!! form_start($form, ['id' => 'check-rate-form', 'class' => 'm-t-40']) !!}
                            {!! form_row($form->title) !!}
                            {!! form_row($form->short_description) !!}
                            {!! form_row($form->description) !!}
                            {!! form_row($form->publish_at) !!}
                            {!! form_row($form->image) !!}
                            {!! form_row($form->thumbnail) !!}
                            {!! form_end($form) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
