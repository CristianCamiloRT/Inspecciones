<x-app-layout>
    <h1 class="h3 mb-3"><strong>Roles</strong></h1>
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title mb-0">{{ __('Crear Rol') }}</span>
                        <div class="float-right">
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-12">
                                <x-input class="{{$errors->has('role') ? ' is-invalid' : ''}}" type="text" name="role" :value="old('role')" :placeholder="'Rol'" autofocus/>
                                {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
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
