@extends('app')

@section('content')
<section>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body" style="min-height: 12rem">
                <h3 class="card-title card-title-dk"><b>{{ $book['title'] }}</b> </h3>
                <p class="card-text">
                    <div class="row">
                        <div class="col-9">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><b>Autor:</b></td>
                                <td>{{ $book['author']["first_name"]." ".$book['author']["last_name"] }}</td>
                            </tr>
                            <tr>
                                <td><b>Podtytuł:</b></td>
                                <td>{{ $book['subtitle'] }}</td>
                            </tr>
                            <tr>
                                <td><b>Strony:</b></td>
                                <td>{{ $book['pages'] }}</td>
                            </tr>
                            <tr class="desc_hide">
                                <td><b>Opis:</b></td>
                                <td>{{ $book['description'] }}</td>
                            </tr>
                            <tr>
                                <td><b>Opublikowano:</b></td>
                                <td>{{ $book['publish']['published'] }}</td>
                            </tr>
                            <tr>
                                <td><b>Wydawnictwo:</b></td>
                                <td>{{ $book['publish']['publisher'] }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary bnt-modal-dk" data-toggle="modal" data-target="#exampleModal">
                        Zobacz pełen opis
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Opis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                {{ $book['description'] }}
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Wróć</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- <b>Podtytuł:</b> {{ $book['subtitle'] }} <br> --}}
                    {{-- <b>Strony:</b> {{ $book['pages'] }}<br> --}}
                    {{-- <b>Opis:</b> {{ $book['description'] }}<br> --}}
                    {{-- <b>Opublikowano:</b> {{ $book['publish']['published'] }} <br>
                    <b>Wydawnictwo:</b> {{ $book['publish']['publisher'] }}<br> --}}

                        </div>
                        <div class="col-3">
                            <img src=" {{ $book['link'] }}" alt="{{ $book['title'] }}" class="img-fluid" ><br>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
