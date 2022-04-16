@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #ffcbd9;"><h3>Welcome to Ardhiani Store</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Are you looking for Make Up for Best Beauty and Personal Care. We know you will love this. Shop now!</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
