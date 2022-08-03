@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Checkouts {{$tour->title}}</h1>
        </div>
      </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        {{-- <div class="py-5 text-center">
          
          <h2>Checkout form</h2>
          <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div> --}}
      
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your orders</span>
                <span class="badge badge-secondary badge-pill"></span>
                </h4>
                <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                    <h6 class="my-0">{{$tour->title}}</h6>
                    <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil consectetur fuga, tempore qui nobis doloremque adipisci iusto aut cum quod? Sequi molestiae odio obcaecati, tenetur quos rerum officia saepe odit.</small>
                    </div>
                    <span class="text-muted">{{$tour->price}}</span>
                </li>
                
                </ul>
        
                <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code" name="discount">
                    {{-- <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div> --}}
                </div>
                </form>
            </div>
          <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Checkouts {{$tour->title}}</h4>
            <form class="needs-validation" action="{{route('checkout.store', $tour->id)}}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name">Full Name</label>
                    <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}" required />
                    @if ($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{Auth::user()->email}}" required />
                    @if ($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input name="phone" type="numeric" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{Auth::user()->phone}}" required />
                    @if ($errors->has('phone'))
                        <p class="text-danger">{{$errors->first('phone')}}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="occupation">Occupation</label>
                    <input name="occupation" type="text" class="form-control {{$errors->has('occupation') ? 'is-invalid' : ''}}" value="{{Auth::user()->occupation}}" required />
                    @if ($errors->has('occupation'))
                        <p class="text-danger">{{$errors->first('occupation')}}</p>
                    @endif
                </div>
        
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                    Please enter your shipping address.
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="date">Date Departured : <span class="text-muted"></span></label>
                    <input name="departured" type="date" class="form-control" id="date" placeholder="Apartment or suite">
                </div>
        
                {{-- <div class="row">
                    <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <select class="custom-select d-block w-100" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                    </div>
                </div> --}}
                {{-- <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div> --}}
                <hr class="mb-4">
        
                {{-- <h4 class="mb-3">Payment</h4> --}}
        
                {{-- <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                    <input id="midtrans" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="midtrans">Midtrans</label>
                    </div>
                    <div class="custom-control custom-radio">
                    <input id="transfer" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="transfer">Transfer Bank</label>
                    </div>
                    
                </div> --}}
                {{-- <div class="row">
                    <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Credit card number is required
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        Expiration date required
                    </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                    </div>
                </div> --}}
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
            </div>
            </div>
        </div>
</section>
@endsection