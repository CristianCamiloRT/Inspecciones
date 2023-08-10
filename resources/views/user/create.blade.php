<x-app-layout>
    <h1 class="h3 mb-3"><strong>Usuarios</strong></h1>
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title mb-0">{{ __('Crear Usuario') }}</span>
                        <div class="float-right">
                            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Volver') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-6 my-2">
                                <x-input class="{{$errors->has('name') ? ' is-invalid' : ''}}" type="text" name="name" :value="old('name')" :placeholder="'Nombre'" autofocus/>
                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-md-6 my-2">
                                <x-input class="{{$errors->has('lastname') ? ' is-invalid' : ''}}" type="text" name="lastname" :value="old('lastname')" :placeholder="'Apellido'"/>
                                {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-md-6 my-2">
                                <x-input class="{{$errors->has('email') ? ' is-invalid' : ''}}" type="email" name="email" :value="old('email')" :placeholder="'Correo'"/>
                                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-md-6 my-2">
                                <x-select-input class="{{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="role_id" :selected="old('role_id')" :options="$roles->pluck('role', 'id')->prepend('Seleccione un rol', '')" />
                                {!! $errors->first('role_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-md-6 my-2">
                                <x-input class="{{$errors->has('password') ? ' is-invalid' : ''}}" type="password" name="password" :value="old('password')" :placeholder="'Contraseña'"/>
                                {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="form-check">
                                    <input type="hidden" name="active" value="0">
                                    <input class="form-check-input" type="checkbox" name="active" value="1">
                                    <span class="form-check-label">Usuario Activo</span>
                                </label>
                                {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
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
