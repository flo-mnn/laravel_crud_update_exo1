@extends('template.main')
@section('content')
    <section class="container">
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-4">
                    @include('partials.card')
                </div>
                @if ($loop->iteration % 3 === 0)
            </div>
            <div class="row">            
                @endif
            @endforeach
        </div>
    </section>
@endsection