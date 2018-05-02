@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Booking</div>

                    <div class="card-body">
                        <form method="POST" action="{{-- route('booking') --}}">
                            @csrf

                            <div class="form-group row">
                                <label for="bookedDate" class="col-md-4 col-form-label text-md-right">Date de réservation</label>

                                <div class="col-md-6">
                                    <input id="bookedDate" type="text" class="form-control{{ $errors->has('bookedDate') ? ' is-invalid' : '' }}" name="bookedDate" value="{{ old('bookedDate') }}" required autofocus>

                                    @if ($errors->has('bookedDate'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bookedDate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numberCtx" class="col-md-4 col-form-label text-md-right">nombre de personne(s)</label>

                                <div class="col-md-6">
                                    <input id="numberCtx" type="text" class="form-control{{ $errors->has('numberCtx') ? ' is-invalid' : '' }}" name="numberCtx" value="{{ old('numberCtx') }}" required autofocus>

                                    @if ($errors->has('numberCtx'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('numberCtx') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label text-md-right">commentaire</label>

                                <div class="col-md-6">
                                    <input id="comment" type="text" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" value="{{ old('comment') }}" required autofocus>

                                    @if ($errors->has('comment'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register this Booking!
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