
@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <center><h4 class="mb-0">PAYMENT PORTAL</h4></center>
                    </div>
                    <div class="card-body">
    <!-- <h1><center>Checkout page</center></h1> -->
    <form method="POST" action="/save">
       {{ csrf_field() }}
        <center><label for="customer_name">First Name:</label>
        <input type="text" name="customer_name" required><br>
        <br>
        <label for="customer_lastname">Last Name:</label>
        <input type="text" name="customer_lastname" required><br>
        <br>
        <label for="phone_number">Phone number:</label>
        <input type="text" name="phone_number" required><br>
        <br>
        <label for="email">Email ID:</label>
        <input type="email" name="email" required><br>
        <br>
        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br>
        <br>
        <label for="city">City:</label>
        <textarea name="city" required></textarea><br>
        <br>
        <label for="card-number">card number:</label>
        <textarea name="card-number" required></textarea><br>
        <br>
        <button type="submit" class="btn btn-success">Submit Payment</button>
    </form></center>
@endsection


