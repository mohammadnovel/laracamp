@extends('backend.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-danger">
                            <i class="ti-clipboard text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Tour
                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $tour }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg btn-info">
                            <i class="ti-wallet text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Booking
                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $checkouts }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-success">
                            <i class="ti-calendar text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Customer

                    </div>
                    <div class="ml-auto">
                        <h2 class="m-b-0 font-light">{{ $customer }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <span class="btn btn-circle btn-lg bg-warning">
                            <i class="mdi mdi-map text-white"></i>
                        </span>
                    </div>
                    <div>
                        Total Report : {{ $checkouts }}

                    </div>
                    <div class="ml-auto">
                        <a href="{{ route('get-report') }}" type="button" class="btn btn-outline-primary" >Download Report All</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection