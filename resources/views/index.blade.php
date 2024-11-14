@extends('layouts.app')

@section('content')
<div class="container my-5 text-center">
    <!-- Main Title -->
    <h1 class="mb-3">أهلاً بكم في محطة لخدمات النقل الجماعي</h1>
    <p class="text-muted mb-5 ">المنصة الإلكترونية لتقديم خدمات النقل الجماعي</p>

    <!-- Beneficiary Categories -->
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-person-fill fs-1"></i>
                    <h5 class="card-title fw-bold">مستفيد خدمة نقل</h5>
                    <p class="card-text text-muted">خدمات النقل الجماعي</p>
                    <a href="{{ route('transport') }}" class="btn btn-link text-success fw-bold">دخول</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body">
                    <i class="bi bi-bus-front-fill fs-1"></i>
                    <h5 class="card-title fw-bold">مقدم خدمة نقل</h5>
                    <p class="card-text text-muted">خدمات المنشآت وأصحاب الأعمال</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-link text-success fw-bold">دخول </a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
