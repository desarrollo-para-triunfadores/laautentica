@extends('admin.partes.index')

@section('title')
    Empresas Registradas
@endsection

@section('sidebar')
     @include('admin.partes.sidebar')
@endsection

@section('content')
@include('admin.empresas.create')
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
              Empresas
            </div>
        </div>
        <div class="page-header pull-right">
            <div class="page-toolbar">
                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" data-placement="bottom" title="Visualizar los registros con sus logos. Desde esta vista podrá realizar una búsqueda de un registro únicamente por nombre." data-hover="tooltip"onclick="cambiarVista(1)" class="btn btn-blue"><i class="fa fa-picture-o"> Logos</i></button>
                <button type="button" data-placement="bottom" title="Visualizar los registros en forma de lista. Desde esta vista podrá realizar una búsqueda mas especializada desde el cajón de búscquedas haciendo uso de cualquier término que que conforme algún campo del registro." data-hover="tooltip" onclick="cambiarVista(2)" class="btn btn-blue"> <i class="fa fa-list-alt"> Lista</i></button>
                </div>                      
                <button data-placement="bottom" title="Registrar una nueva Empresa" type="button" data-hover="tooltip" data-toggle="modal" data-target="#modal-config"  class="btn btn-blue">
                    <i class="fa fa-plus-circle"> Registrar Empresa</i>
                </button>                      
            </div>
        </div>
        <div class="clearfix"></div>
    </div>    
    <div class="page-content">
        @include('admin.empresas.tabla')
        @include('admin.empresas.tablaRegistros')
    </div>
@endsection
@section('script') 
    <script>
        var route = "/admin/empresas";
        var listSidebar = "li4";
    </script>
@endsection