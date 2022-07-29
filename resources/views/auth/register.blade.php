<x-guest-layout>
{{--    <x-jet-authentication-card>
    <x-jet-validation-errors class="mb-4" />
    --}}

    <div class="row justify-content-center ">
        <div class="col-4">
            <div class="card ">
                <div class="card-header alert alert-primary text-center">
                  Registrarse
                </div>
                <div class="card-body ">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="">
                <label for="name"  class="form-label" value="{{ __('Name') }}"></label>
                <input id="name" class="form-control" placeholder="Nombre" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-2">
                <label for="email" class="form-label" value="{{ __('Email') }}" >
                </label>
                <input id="email" placeholder="Correo electrónico"  class="form-control" type="email" name="email" :value="old('email')" required >

            </div>

            <div class="mt-2">
                <label
                for="password" value="{{ __('Password') }}"   class="form-label">
                </label>

                <div class="input-group-append">

                    <input  id="txtPassword"  placeholder="Contraseña" class="form-control" type="password" name="password" required autocomplete="new-password" />


                    <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                  </div>


            </div>

         <div class="mt-2">
                <label for="password_confirmation" class="form-label" value="{{ __('ConfirmPassword') }}">
               </label>

            <div class="input-group-append">

                <input id="password_confirmation" placeholder="Confirmar contraseña" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />


             {{--   <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
             --}}
            </div>
            </div>
        </div>

            <div class="mt-3 p-3">
                <button class=" btn btn-primary btn-block btn-sm">
                    {{ __('Registrarse') }}
                </button>
            </div>
            <div class=" mt-2">
                <a class="underline mt-2 mb-2 text-center" href="{{ route('login') }}">
                    {{ __('¿Ya tiene una cuenta?') }}
                </a>

            </div>
        </form>

    </div>
</div>
</div>
</div>
<!-- Para el ver/ocultar caracteres de contrasena-->
<script type="text/javascript">
    function mostrarPassword(){
            var cambio = document.getElementById("txtPassword");
            if(cambio.type == "password"){
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            }else{
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        };

    </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</x-guest-layout>
