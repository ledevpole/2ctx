@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order</div>

                    <div class="card-body">
                        <form method="POST" action="{{-- route('order') --}}">
                            @csrf

                            <div class="form-group row">
                                <label for="choice" class="col-md-4 col-form-label text-md-right">à commander</label>

                                <div class="col-md-6">
                                    <input id="comment" type="text" class="form-control{{ $errors->has('choice') ? ' is-invalid' : '' }}" name="choice" value="{{ old('choice') }}" required autofocus>
                                    <p> mettre un petit bouton + pour le add</p>
                                    @if ($errors->has('choice'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('choice') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send this Order!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection