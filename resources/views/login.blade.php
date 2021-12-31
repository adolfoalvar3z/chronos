@extends('layouts.ingreso')
@section('title','')
@section('content')
<form action="" method="post">
    @csrf
    <div class="form-group">
        <label>Usuario</label>
        <input class="au-input au-input--full" type="text" name="usuario" placeholder="Usuario">
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input class="au-input au-input--full" type="password" name="clave"
               placeholder="Contraseña">
    </div>
    <div class="login-checkbox">

        <label>
            <input type="checkbox" name="remember">Recordarme
        </label>
        <label>
            <a href="{{route('olvidaclave')}}">¿Olvidaste tu contraseña?</a>
        </label>

    </div>
    <div>
        @error('clave')
        <div style='color: #ff2e44;' role='alert'>ERROR</div>
        @enderror

    </div>
    <button class="au-btn au-btn--block au-btn--blue2 m-b-20" type="submit">Ingresar</button>
    <div class="register-link">
        <p>
            ¿Aún no tienes cuenta?
            <a href="{{route('solicitaregistro')}}">Solicitala</a>
        </p>
    </div>
</form>
@endsection
