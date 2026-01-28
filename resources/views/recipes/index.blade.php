@extends('layouts.app')

@section('title', 'My Recipes')

@section('content')
    <div class="container py-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3">
            <div>
                <small class="text-muted">Recipes / Recipes library</small>
                <h2 class="fw-bold mt-1">Food Items</h2>
                <p class="text-muted mb-0">Select recipes to add to the menu:</p>
            </div>

            <div class="d-flex gap-2 align-items-center">
                <select class="form-select">
                    <option>Sort by name</option>
                </select>

                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search recipe...">
                </div>

                <button class="btn btn-warning">
                    <i class="bi bi-funnel-fill"></i>
                </button>
            </div>
        </div>

        {{-- Grid --}}
        <div class="row g-4">
            @foreach ($foods as $food)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="recipe-card">

                        <div class="recipe-media">
                            <img src="{{ $food['image'] }}" alt="{{ $food['title'] }}">

                            <span class="recipe-pill">
                                {{ $food['category'] }}
                            </span>

                            <div class="recipe-fav" title="Favorite">
                                @if($food['is_favorite'])
                                    <i class="bi bi-heart-fill text-warning"></i>
                                @else
                                    <i class="bi bi-heart"></i>
                                @endif
                            </div>
                        </div>

                        <div class="p-3">
                            <p class="recipe-title">{{ $food['title'] }}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>



        {{-- Footer buttons --}}
        <div class="d-flex gap-3 mt-5">
            <button class="btn btn-warning fw-bold">Add to menu</button>
            <button class="btn btn-outline-secondary fw-bold">Back to menu edition</button>
        </div>

    </div>
@endsection