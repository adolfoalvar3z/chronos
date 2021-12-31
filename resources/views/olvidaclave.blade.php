@extends('layouts.ingreso')
@section('content')
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Correo Electronico</label>
                                <input class="au-input au-input--full" type="email" name="email"
                                       placeholder="Ingresa tu Email">
                            </div>
                            <button class="au-btn au-btn--block au-btn--blue2 m-b-20" type="submit">envíar</button>
                            @error('email')
                            <div style='color: #ff2e44;' role='alert'>Ingrese una dirección de correo valida</div>

                            @enderror
                            <div class="register-link">
                                <p>
                                    ¿Ya tienes una cuenta?
                                    <a href="{{route('ingreso')}}">Ir a Ingresar</a>
                                </p>
                            </div>
                        </form>
@endsection
