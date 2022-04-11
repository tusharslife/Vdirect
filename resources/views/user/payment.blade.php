@extends('layouts.app')

@section('content')
<div class="container ch-con">
    <main>
        <div class="py-5 text-center">
            <h1><i class="bi bi-shield-fill-check" style="color: blue;"></i> Confirm Your Payment</h1>
          <p class="lead">Choose Your Fav Payment Method</p>
        </div>

          <div class="col-md-7 col-lg-8">
            <h6 class="mb-3"><i class="bi bi-receipt-cutoff"></i> User Details</h6>


            <form class="needs-validation" novalidate action="{{ route('paymentsuccess') }}">
              <div class="row g-4">
                <div class="col-sm-8">
                  <label for="firstName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="{{ Auth::user()->name }}" value="" disabled>
                </div>


                <div class="col-12">
                  <label for="username" class="form-label">E-mail</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="{{ Auth::user()->email }}" disabled>
                </div>



            <div class="col-md-7 col-lg-8">
              <hr class="my-4">


              <h4 class="mb-3"><i class="bi bi-wallet"></i> Payment method</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit"> Credit card / Debit card</label> <i class="bi bi-credit-card" style="color: blue; padding-left:15px;"></i>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label" for="owner">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" id="owner" required>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label" id="card-number-field" for="cardNumber">Credit card number</label>
                  <input type="text" maxlength="12" pattern="[0-9]{12}" class="form-control" id="cc-number" placeholder="1111 2222 3333" data-mask="0000 0000 0000" required />
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-expiration" class="form-label" >Expiration</label>
                    <select>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">Decemnber</option>
                    </select>
                    <select>
                        <option value="16"> 2022</option>
                        <option value="16"> 2023</option>
                        <option value="16"> 2024</option>
                        <option value="16"> 2025</option>
                        <option value="16"> 2026</option>
                        <option value="16"> 2027</option>
                        <option value="16"> 2028</option>
                        <option value="16"> 2029</option>
                        <option value="16"> 2030</option>
                        <option value="16"> 2031</option>
                        <option value="16"> 2032</option>
                        <option value="16"> 2033</option>
                        <option value="16"> 2034</option>
                        <option value="16"> 2035</option>
                    </select>
                    <div class="invalid-feedback">
                        Select The Date
                      </div>
                </div>

                <div class="col-md-4">
                  <label for="cc-cvv" for="CVV"  class="form-label">CVV</label>
                  <input type="password" class="form-control"  id="cvv"  maxlength="3"  required />
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit" id="confirm-pay" style="margin-bottom: 15px"> Pay Now</button>
            </form>
          </div>
        </div>
      </main>
  </div>
</div>
<script type="text/javascript" src="{{ asset('js/kcustom.js') }}" defer></script>

  @endsection