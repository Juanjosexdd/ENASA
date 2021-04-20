@extends('home')
@section('contenido')
<main class="main">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/">FUNDARAURE</a></li>
            </ol>
            <div class="container-fluid">
                @include('partials.message-session')
                <!-- Ejemplo de tabla Listado -->
                <div class="card rounded p-0 elevation-2">
                    <div class="card-header mailbox-controls">
                        <div class="row">
                            <h5 class="card-title">&nbsp;&nbsp;<i class="fa fa-list text-success"></i>  Listado de Usuarios</h5>
                            <div class="btn-group ml-auto" role="group" aria-label="Basic example">
                              
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
             <!-- Inicio del modal Cambiar Estado del usuario -->
             
        </main>
@endsection