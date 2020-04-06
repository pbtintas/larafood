@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
<h1>Lista de Planos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <form action="#" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark shadow  rounded "> Filtros <i class="fas fa-filter"></i></button>
        </form>

    </div>
    <div class="card-body">
        <table class="table table-condensed table-sm">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th style="width:300px" class="text-center">Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr>
                    <td>
                        {{ $plan->name }}
                    </td>
                    <td>
                        <div style="width:150px" class="text-right" >
                            {{ number_format($plan->price, 2, ',', '.') }}
                        </div>

                    </td>
                    <td width="300">

                        <a data-toggle="tooltip" title="Detalhes" href="#" class="btn btn-primary btn-sm"><i class="fas fa-address-card"></i></a>
                        <a data-toggle="tooltip" title="Editar" href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                        <a data-toggle="tooltip" title="Visualizar" href="#" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a data-toggle="tooltip" title="Permissões" href="#" class="btn btn-success btn-sm shadow  rounded"><i class="fas fa-address-book"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        @if (isset($filters))
        {!! $plans->appends($filters)->links() !!}
        @else
        {!! $plans->links() !!}
        @endif
    </div>
</div>
@stop
