@extends('layouts.app')
@section('content')
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Cart Pages</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>

    {{-- Cart Detail --}}
    <div class="container-fluid">
        <div class="row my-5 mx-3 p-3 bg-white">
            <div class="col-md-12">
                <h2 class="text-primary mb-3"><i class="fas fa-cart-plus"></i> My Carts</h2>
                <hr>
                <div class="col-md-8 border border-secondary shadow-sm rounded p-lg-3">
                    <x-cart.cartItem :carts="$carts" />
                </div>
            </div>
        </div>
    </div>
@endsection
