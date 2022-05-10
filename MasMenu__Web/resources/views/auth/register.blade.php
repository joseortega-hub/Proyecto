@extends('base')

@section('titulo', 'Buscador de MasMenu')

@section('cuerpo')
    <div class="row m-0 bg-white">
        <div class="col-md-4 offset-4 p-md-5 p-3">


            <form method="POST" action="{{ route('register') }}" name="registration">
                @csrf
                <div class="row m-0">

                    <div class="col-12 p-0 mt-5 pl-md-0 pb-4 mb-4 border-bottom">
                        <h2 class="m-0">Crea una cuenta</h2>
                    </div>

                    <div class="col-12 p-0">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                Email no valido
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                Contraseña no valida
                            </div>
                        @enderror

                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                Nombre no valido
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 p-0 mb-3">
                        <input type="text" name="name" id="" placeholder="Nombre" class="form-control ">
                    </div>

                    <div class="col-md-12 p-0 mb-3">
                        <input type="email" name="email" id="" placeholder="Email" class="form-control ">
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password" id="" placeholder="Contraseña" class="form-control ">
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password_confirmation" id="" placeholder="Confirmación"
                            class="form-control ">
                    </div>
                    <div class="col-md-12 p-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            Singup
                        </button>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        <img src="/img/sign.png" alt="" class="w-100 ">
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
