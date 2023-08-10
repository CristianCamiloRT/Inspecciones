<x-app-layout>
    <h1 class="h3 mb-3"><strong>Inspecciones</strong></h1>
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title mb-0">{{ __('Crear Inspección') }}</span>
                        <div class="float-right">
                            <a href="{{ route('inspections.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('inspections.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-12 my-2">
                                <x-input class="{{$errors->has('enterprise') ? ' is-invalid' : ''}}" type="text" name="enterprise" :value="old('enterprise')" :placeholder="'Nombre de la empresa'" autofocus/>
                                {!! $errors->first('enterprise', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-12 my-2">
                                <textarea type="text" class="form-control {{$errors->has('description') ? ' is-invalid' : ''}}" :value="old('description')" name="description" placeholder="Descripción de la inspección"></textarea>
                                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                        </div>

                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>