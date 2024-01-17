
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                     <center><h4 class="mb-0">Payment Successful</h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('images/success-icon.png') }}" alt="Success Icon" class="mb-4">
                        <p class="lead">Thank you for your payment!</p>
                        <p>Your order has been successfully processed.</p>
                        <a href="{{ route('funnelA') }}" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
