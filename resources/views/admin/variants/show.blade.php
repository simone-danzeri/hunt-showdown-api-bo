@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center ms-font-white">{{ $variant->variant_name }}</h1>
            <div class="text-center mt-4 py-3 ms-font-white w-75">
                {{ $weapon->summary }}
            </div>
        </div>
        <div class="card-containier d-flex justify-content-center mt-5">
            <div class="card ms-bg-primary" style="">
                <div class="d-flex flex-column align-items-center gap-3">
{{--                     <img src="{{ asset('storage/' . $weapon->weapon_img) }}" alt="{{ $weapon->weapon_name }}" class="img-fluid rounded shadow-sm" style="width: 100%; width: 400px; height: auto; object-fit: cover;">
 --}}                    <div class="card-body d-flex flex-column align-items-center gap-3">
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Slot Size:</span>
                            <span class="text-capitalize">{{ $variant->slot['slot_name'] }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Bullet Type:</span>
                            <span class="text-capitalize">{{ $weapon->bullet_type['name'] }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Damage:</span>
                            <span>{{ $variant->damage }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Ammo Pool:</span>
                            <span>{{ $variant->ammo_reserve }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Bullet Speed:</span>
                            <span>{{ $variant->bullet_speed }} m/s</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Sway:</span>
                            <span>{{ $variant->sway }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Effective Range:</span>
                            <span>{{ $variant->effective_range }} m</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Reload Time:</span>
                            <span>{{ $variant->reload_time }} s</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Cycle Time:</span>
                            <span>{{ $variant->cycle_time }} s</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Light Melee Damage:</span>
                            <span>{{ $variant->light_melee_dmg }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Heavy Melee Damage:</span>
                            <span>{{ $variant->heavy_melee_dmg }}</span>
                        </div>
                        <div class="card-text ms-font-white">
                            <span class="fw-bold">Cost:</span>
                            <span>{{ $variant->cost }} $</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
