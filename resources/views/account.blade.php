@extends('layouts.app')
@extends('layouts.navbar')





@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Все заявки</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!<br>
                            You are logged in!<br>
                            You are logged in!<br>
                            You are logged in!<br>
                            You are logged in!<br>
                            You are logged in!<br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
