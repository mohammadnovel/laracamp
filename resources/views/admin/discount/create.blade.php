@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                   Insert Discount
                </div>
                <div class="card-body">
                    <form action="route('admin.discount.store')" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="" class="form-control" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label">Code</label>
                            <input type="text" name="Code" id="" class="form-control" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="" cols="0" rows="2"></textarea>                        </div>
                        </div>

                        

                        <div class="form-group p-4">
                            <label class="form-label">Type Discount</label>
                            <select class="form-control form-control-sm">
                                <option value="">Open this select menu</option>
                                <option value="nominal">Nominal</option>
                                <option value="percentage">Percentage</option>
                            </select>
                        </div>

                        <div class="form-group p-4">
                            <label class="form-label">Value</label>
                            <input type="number" min="1" max="100" name="value" id="" class="form-control" />
                        </div>

                        <div class="form-group p-4 ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection