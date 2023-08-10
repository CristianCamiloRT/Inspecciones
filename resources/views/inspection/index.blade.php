<x-app-layout>
    <h1 class="h3 mb-3"><strong>Inspecciones</strong></h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" inspection="alert">
            <p class="text-success">{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Lista de Inspecciones') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('inspections.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Crear Inspección') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Id</th>
                                    <th>Empresa</th>
                                    <th>Descripción</th>
                                    <th>Inspector</th>
                                    <th>Fecha de creación</th>
                                    <th>Formularios</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inspections as $inspection)
                                    <tr>
                                        <td>{{ $inspection->id }}</td>
                                        <td>{{ $inspection->enterprise }}</td>
                                        <td>{{ $inspection->description }}</td>
                                        <td>{{ $inspection->user->name . ' ' . $inspection->user->lastname }}</td>
                                        <td>{{ $inspection->created_at }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-danger" href="{{ route('inspections.show',$inspection->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Extintores') }}</a> 
                                        </td>
                                        <td class="d-flex justify-content-end">
                                            <form action="{{ route('inspections.destroy',$inspection->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('inspections.show',$inspection->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('inspections.edit',$inspection->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $inspections->links() !!}
        </div>
    </div>
</x-app-layout>