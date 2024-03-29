@extends('layouts.app')
@section('css')
    <style>
        .form-elegant .font-small {
        font-size: 0.8rem; }

        .form-elegant .z-depth-1a {
        -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
        box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

        .form-elegant .z-depth-1-half,
        .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
    </style>
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">

        <section class="form-elegant">
            <!--Form without header-->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card">

                    <div class="card-body">

                        <!--Header-->
                        <div class="text-center">
                            <h3 class="dark-grey-text mb-5"><strong>Registro en {{ setting('site.title') }}</strong></h3>
                        </div>

                        <!--Body-->
                        <div class="md-form">
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            <label for="name">Nombre Completo</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="text" id="phone" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                            <label for="phone">Telefono</label>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="email" id="email" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            <label for="email">Tu email</label>
                            @error('email')
                                <div class="text-center">
                                    <b  style="color: #dc3545; font-size:12px">El email ingresado es inválido o ya existe</b>
                                </div>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            <label for="password">Tu contraseña</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {!! captcha_img() !!}
                        <div class="md-form">
                            <input type="text" id="captcha" name="captcha" class="form-control" required>
                            <label for="password">Capcha</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Registrarse</button>
                            <a href="/" class="btn green-gradient btn-block btn-rounded z-depth-1a">Volver al inicio</a>
                        </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                    <p class="font-small grey-text d-flex justify-content-end">
                        Ya tienes cuenta? &nbsp; <a href="/login"class="blue-text"> Ingresar</a></p>
                    </div>
                </div>
            </form>
            <!--/Form without header-->

        </section>
    </div>
</div>
@endsection
