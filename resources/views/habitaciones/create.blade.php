@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir Habitación
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('habitaciones/create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <input type="number" min="100" max="1000" name="numero" placeholder="Número">
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" name="categoria" id="categoria" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="number" min="30" max="100" name="precio" placeholder="Precio">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir Habitación
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
