@extends('base')

@section('titulo', 'Registro de usuario')

@section('cuerpo')
    <div class="row m-0 bg-white">
        <div class="col-md-4 offset-md-4 p-md-5 p-3">


            <form method="POST" action="{{ route('register') }}" id="registration">
                @csrf
                <div class="row m-0">

                    <div class="col-12 p-0 mt-md-5 mt-3 pl-md-0 pb-4 mb-4 border-bottom">
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
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control "
                            onkeyup="validacionEmail()">
                        <small id="errorEmail" class="text-danger"></small>
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password" id="password" onkeyup="validacionPassword()"
                            placeholder="Contraseña" class="form-control ">
                        <small id="errorPassword" class="text-danger"></small>
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirmación" onkeyup="validacionConfirmacion()" class="form-control ">
                        <small id="errorConfirmacion" class="text-danger"></small>
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

    <script>
        function validacionPassword() {
            password = document.getElementById('password').value;

            if (password.length < 5) {
                document.getElementById('errorPassword').innerHTML =
                    'La contraseña tiene que tener una longitud de mas de 5 carácteres'
            } else {
                document.getElementById('errorPassword').innerHTML = ""
            }
        }

        function validacionConfirmacion() {
            password = document.getElementById('password').value;
            password2 = document.getElementById('password_confirmation').value;

            if (password != password2) {
                document.getElementById('errorConfirmacion').innerHTML =
                    'Las contraseñas tienen que coincidir'
            } else {
                document.getElementById('errorConfirmacion').innerHTML = ""
            }
        }

        function validacionEmail() {
            email = document.getElementById('email').value;
            console.log(email)
            var emailRegex =
                /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

            if (emailRegex.test(email)) {
                document.getElementById('errorEmail').innerHTML = ""
            } else {
                document.getElementById('errorEmail').innerHTML = "Tienes que añadir una dirección de correo válida"
            }
        }
    </script>

@endsection
