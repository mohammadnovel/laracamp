@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Checkouts {{$camp->title}}</h1>
        </div>
      </div>
    </div>
</div>
<section class="ftco-section">
<div class="container">
    <div class="col-md-12 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Biling details</h5>
        </div>
        <div class="card-body">
          <form>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example1" class="form-control" />
                  <label class="form-label" for="form7Example1">First name</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example2" class="form-control" />
                  <label class="form-label" for="form7Example2">Last name</label>
                </div>
              </div>
            </div>
  
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form7Example3" class="form-control" />
              <label class="form-label" for="form7Example3">Company name</label>
            </div>
  
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form7Example4" class="form-control" />
              <label class="form-label" for="form7Example4">Address</label>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form7Example5" class="form-control" />
              <label class="form-label" for="form7Example5">Email</label>
            </div>
  
            <!-- Number input -->
            <div class="form-outline mb-4">
              <input type="number" id="form7Example6" class="form-control" />
              <label class="form-label" for="form7Example6">Phone</label>
            </div>
  
            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form7Example7" rows="4"></textarea>
              <label class="form-label" for="form7Example7">Additional information</label>
            </div>
  
            <!-- Checkbox -->
            {{-- <div class="form-check d-flex justify-content-center mb-2">
              <input class="form-check-input me-2" type="checkbox" value="" id="form7Example8" checked />
              <label class="form-check-label" for="form7Example8">
                Create an account?
              </label>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
  
    <div class="col-md-12 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Summary</h5>
        </div>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              Products
              <span>$53.98</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              Shipping
              <span>Gratis</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>Total amount</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong>$53.98</strong></span>
            </li>
          </ul>
  
          <button type="button" class="btn btn-primary btn-lg btn-block">
            Make purchase
          </button>
        </div>
      </div>
    </div>
</div>
</section>
@endsection