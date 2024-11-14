@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-mortarboard-fill fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة النقل الجامعي</h5>
                    <a href="{{ route('unitransport') }}" class="btn btn-link text-success fw-bold">دخول</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-backpack3-fill fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة النقل المدرسي</h5>
                    <a href="{{ route('Schooltransport') }}" class="btn btn-link text-success fw-bold">دخول </a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-buildings-fill fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة نقل المعلمين</h5>
                    <a href="{{ route('Teacherstransport') }}" class="btn btn-link text-success fw-bold">دخول </a>
                </div>
            </div>
        </div>
</div>
<div class="row">
    
        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-map-fill fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة النقل بين المدن</h5>
                    <a href="{{ route('Citiestransport') }}" class="btn btn-link text-success fw-bold">دخول </a>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-globe-asia-australia fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة النقل السياحي</h5>
                    <a href="#" class="btn btn-link text-danger fw-bold">قريبا </a>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                <i class="bi bi-shop-window fs-1"></i>
                    <h5 class="card-title fw-bold">خدمة النقل الى الفعاليات</h5>
                    <a href="#" class="btn btn-link text-danger fw-bold">قريبا </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
