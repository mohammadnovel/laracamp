@extends('layouts.app')
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
                            {!! form_row($form->sku) !!}
                            {!! form_row($form->title) !!}
                            {!! form_row($form->sub_title) !!}
                            {!! form_row($form->description) !!}
                            {!! form_row($form->contact_person) !!}
                            {!! form_row($form->location_id) !!}
                            {!! form_row($form->location) !!}
                            {!! form_row($form->video) !!}
                            {!! form_row($form->thumbnail) !!}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <table class="table table-bordered" id="datatable" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th width="6%">Action</th>
                                                </tr>
                                            </thead>
                                        
                                            <tbody id="dynamic_field_image">
                                                @php
                                                    $no = 1;
                                                    @endphp
                                                @if (!empty($data->tour_images))
                                                    @foreach ($data->tour_images as $item)
                                                    <tr class="rowComponentImage">
                                                        <td>
                                                            <input type="file" class="form-control dropify" name="tour_image[]" id="" value="{{ $item->path }}">
                                                        </td>
                                                        <td><button type="button" name="remove" class="btn btn-danger btn_remove_image">X</button></td>
                                                    </tr>
                                                    @php
                                                    $no++;
                                                    @endphp
                                                    @endforeach
                                                @else
                                                <tr class="rowComponentImage">
                                                    <td>
                                                        <input type="file" class="form-control dropify" name="tour_image[]" id="">
                                                    </td>
                                                    <td><button type="button" name="remove" class="btn btn-danger btn_remove_image">X</button></td>
                                                </tr>  
                                                @endif
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                <td colspan="5" class="text-right">
                                                    <button type="button" name="add-image" id="add-image" class="btn btn-success btn-sm add-ingredient-image">
                                                    Tambah
                                                    </button>
                                                </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div id="result-image"></div>
                                    </div>
                                </div>
                            </div>
                            {!! form_end($form) !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <script>
        $(document).ready(function() {

            var postURLImage = "<?php echo url('addmore-image'); ?>";
            var iImage = {{ !empty($data->id) ? $no : 0 }};

            $('#add-image').click(function() {
                iImage++;
                $('#dynamic_field_image').append(
                    `<tr class="rowComponentImage">
              <td>
                <input type="file" class="form-control dropify-${iImage}" name="tour_image[]" id="">
              </td>
              <td><button type="button" name="remove" class="btn btn-danger btn_remove_image">X</button></td>
            </tr>`
                );
                $('.dropify-' + iImage).dropify();
            });


            $(document).on('click', '.btn_remove_image', function() {
                $('.btn_remove_image').eq($('.btn_remove_image').index(this)).parent().parent().remove();
            });

            var postURLOverview = "<?php echo url('addmore-overview'); ?>";
            var iOverview = {{ !empty($data->id) ? $no : 0 }};

            $('#add-overview').click(function() {
                iOverview++;
                $('#dynamic_field_overview').append(
                    `<tr class="rowComponentOverview">
                <td>
                    <input type="text" name="title_overview[]" class="form-control" placeholder="Title" id="">
                </td>
                <td>
                    <textarea name="description_overview[]" class="form-control" placeholder="Description" cols="30" rows="3"></textarea>
                </td>
              <td><button type="button" name="remove" class="btn btn-danger btn_remove_overview">X</button></td>
            </tr>`
                );
            });


            $(document).on('click', '.btn_remove_overview', function() {
                $('.btn_remove_overview').eq($('.btn_remove_overview').index(this)).parent().parent()
                    .remove();
            });
        });
    </script>
@endpush
