@extends('app')

@section('content')

<section class=" ">

    <div class="container">
        <div class="row">
                @foreach ($json_data as $book)
                <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body" >
                                <h3 class="card-title card-title-dk">{{ $book["title"] }}</h3>
                                <p class="card-text">
                                    Autor: {{ $book['author']["first_name"]." ".$book['author']["last_name"] }} <br>
                                    Opublikowano: {{ $book['publish']['published'] }} <br>
                                    Strony: {{ $book['pages'] }}<br>
                                    <a class="btn btn-primary bnt-more" href="{{ route('item.show', $book['isbn']) }}" role="button">Więcej informacji</a>
                                    {{-- <a href="{{ route('item.show', $book['isbn']) }}"> Wiecej </a> --}}
                            </div>
                        </div>
                    </div>
                  @endforeach
        </div>
    </div>

</section>

@endsection
