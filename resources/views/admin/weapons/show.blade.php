@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1 class="text-center ms-font-white">{{ $weapon->weapon_name }}</h1>
        <div class="card-containier d-flex justify-content-center mt-5">
            <div class="card ms-bg-primary" style="">
                <img src="{{ asset('storage/' . $weapon->weapon_img) }}" alt="{{ $weapon->weapon_name }}" class="img-fluid rounded shadow-sm" style="width: 100%; height: auto; object-fit: cover;">
                <div class="card-body d-flex flex-column gap-3">
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Slot Size:</span>
                        <span class="text-capitalize">{{ $weapon->slot['slot_name'] }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Bullet Type:</span>
                        <span class="text-capitalize">{{ $weapon->bullet_type['name'] }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Damage:</span>
                        <span>{{ $weapon->damage }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Ammo Pool:</span>
                        <span>{{ $weapon->ammo_reserve }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Bullet Speed:</span>
                        <span>{{ $weapon->bullet_speed }} m/s</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Sway:</span>
                        <span>{{ $weapon->sway }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Effective Range:</span>
                        <span>{{ $weapon->effective_range }} m</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Reload Time:</span>
                        <span>{{ $weapon->reload_time }} s</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Cycle Time:</span>
                        <span>{{ $weapon->cycle_time }} s</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Light Melee Damage:</span>
                        <span>{{ $weapon->light_melee_dmg }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Heavy Melee Damage:</span>
                        <span>{{ $weapon->heavy_melee_dmg }}</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Cost:</span>
                        <span>{{ $weapon->cost }} $</span>
                    </div>
                    <div class="card-text ms-font-white">
                        <span class="fw-bold">Summary:</span>
                        <span>{{ $weapon->summary }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
