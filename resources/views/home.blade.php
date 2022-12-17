@extends('layouts.layout')

@section('content')
    <div class="bg-dark">
        <section>
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2 pt-4">
                            <div class="card">
                                <img src="{{ $comic['thumb'] }}" alt="">
                                <a href="">{{ $comic['series'] }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="button text-center pt-4">
                <button class="btn btn-primary">Add More</button>
            </div>
        </section>
    </div>
@endsection
