<x-layouts.app>

    <x-layouts.content title="Usuarios" subtitle="" name="Usuarios">

        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="form-group px-4 pt-2">
                        <i class="fas fa-pencil-alt fa-2x"></i>
                        <h3 class="fs-1 d-inline-block ml-1">Editar usuario</h3>
                    </div>

                    <form class="px-4 pt-2 pb-2" action="{{ route('usuarios.update', $usuario->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="John" value="{{ old('nombre', $usuario->empleado->nombre) }}" readonly>
                                    @error('nombre')
                                    <span class="error text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellido" class="control-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido"
                                        placeholder="Doe" value="{{ old('apellido', $usuario->empleado->apellido) }}" readonly>
                                    @error('apellido')
                                    <span class="error text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="jhondoe@gmail.com" value="{{ old('email', $usuario->email)}}" >
                                    @error('email')
                                    <span class="error text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="rol_id" class="control-label">Rol</label>
                                    <select class="form-control" name="rol_id" id="rol_id">
                                        <option value="">Seleccionar</option>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol->id }}"
                                             @if ($rol->id == old('rol_id', $usuario->rol_id))
                                                selected
                                            @endif
                                            >{{ $rol->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('rol_id')
                                        <span class="error text-danger">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right m-b-0">
                            <a href="{{ route('usuarios.index') }}" class="btn btn-danger waves-effect m-l-5">
                                Cancelar
                            </a>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Actualizar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </x-layouts.content>

</x-layouts.app>
