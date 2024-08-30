@extends('admin.dashboard')
@section('content')
    <h1 class="text-center ms-font-white">All weapons</h1>
    <div class="overflow-auto mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Weapon Name</th>
                  <th scope="col">Damage</th>
                  <th scope="col">Ammo Reserve</th>
                  <th scope="col">Bullet Speed</th>
                  <th scope="col">Sway</th>
                  <th scope="col">Effective Range</th>
                  <th scope="col">Reload Time</th>
                  <th scope="col">Cycle Time</th>
                  <th scope="col">Light Melee Damage</th>
                  <th scope="col">Heavy Melee Damage</th>
                  <th scope="col">Cost</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($weapons as $weapon)
                <tr>
                    <td>{{ $weapon->weapon_name }}</td>
                    <td>{{ $weapon->damage }}</td>
                    <td>{{ $weapon->ammo_reserve }}</td>
                    <td>{{ $weapon->bullet_speed }} m/s</td>
                    <td>{{ $weapon->sway }}</td>
                    <td>{{ $weapon->effective_range }} m</td>
                    <td>{{ $weapon->reload_time }} s</td>
                    <td>{{ $weapon->cycle_time }} s</td>
                    <td>{{ $weapon->light_melee_dmg }}</td>
                    <td>{{ $weapon->heavy_melee_dmg }}</td>
                    <td>{{ $weapon->cost }} $</td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection
