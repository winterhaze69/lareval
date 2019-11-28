@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Race') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('races.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="classification" class="col-md-4 col-form-label text-md-right">{{ __('Classification') }}</label>

                            <div class="col-md-6">
                                <input id="classification" type="classification" class="form-control @error('classification') is-invalid @enderror" name="classification" value="{{ old('classification') }}" required autocomplete="classification">

                                @error('classification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lifeSpan" class="col-md-4 col-form-label text-md-right">{{ __('LifeSpan') }}</label>

                            <div class="col-md-6">
                                <input id="lifeSpan" type="number" class="form-control @error('lifeSpan') is-invalid @enderror" name="lifeSpan" value="{{ old('lifeSpan') }}" required autocomplete="lifeSpan">

                                @error('lifeSpan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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
