@extends('layouts.admin')
@section('content')
    <h1 class="text-center ms-font-white">{{ $weapon->weapon_name }} Variants</h1>
    <div class="container">
        <div class="row">
            @if (count($variants) > 0)
                @foreach ($variants as $variant)
                <div class="col-4 d-flex justify-content-center mt-5">
                    <div class="card ms-card-border-on ms-bg-primary mt-5 overflow-auto" style="width: 18rem; height: 24rem;">
                        <div class="card-body d-flex flex-column align-items-center gap-3 justify-content-between">
                        <h5 class="card-title ms-font-white">{{ $variant->variant_name }}</h5>
                        <p class="card-text ms-font-white">{{ $variant->summary }}</p>
                        <a href="{{route('admin.variants.show', ['weapon' => $weapon->slug, 'variant' => $variant->slug])}}" class="btn ms-card-border-on ms-font-white">More Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <span class="text-center ms-font-white mt-4">No variants for this weapon</span>
                <div class="d-flex justify-content-center mt-5">
                    <a class="btn ms-card-border-on ms-font-white" href="{{route('admin.weapons.show', ['weapon' => $weapon->slug])}}">Go Back</a>
                </div>
            @endif
        </div>
    </div>
@endsection
