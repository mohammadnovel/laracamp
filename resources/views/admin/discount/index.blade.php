@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-3">
                <div class="card-header">
                    Discount
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex  flex-row-reverse">
                            <a href="{{route('admin.discount.create')}}" class="btn btn-primary btn-sm">Add Discount</a>
                        </div>
                    </div>
                    @include('components.alert')
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <td>User</td>
                                <td>Camp</td>
                                <td>Price</td>
                                <td>Register Data</td>
                                <td>Paid Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($checkouts as $checkout)
                                <tr>
                                    <td>{{$checkout->User->name}}</td>
                                    <td>{{$checkout->Camp->title}}</td>
                                    <td>{{$checkout->Camp->price}}</td>
                                    <td>{{$checkout->created_at->format('M d Y')}}</td>
                                    <td>
                                        <strong>{{$checkout->payment_status}}</strong>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No Data. </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection