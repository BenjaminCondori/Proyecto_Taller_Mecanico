<x-layouts.app>

    <x-layouts.content title="Roles" subtitle="" name="Roles">

        <div class="row">
            <div class="col-12">

                <div class="mb-2 d-flex justify-content-between">

                    <div class="form-group">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary waves-effect waves-light">
                            <i class="fas fa-plus-circle"></i>&nbsp;
                            Nuevo Rol
                        </a>
                    </div>

                </div>

                <div class="card-box">

                    <div class="table-responsive">
                        <table id="table-rol" class="table table-hover mb-0 dts">
                            <thead class="bg-dark text-center text-white text-nowrap">
                                <tr style="cursor: pointer">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $rol)
                                <tr class="text-nowrap text-center">
                                    <th scope="row" class="align-middle">{{ $rol->id }}</th>
                                    <td class="align-middle">{{ $rol->nombre }}</td>
                                    <td class="align-middle text-wrap">{{ $rol->descripcion }}</td>
                                    <td class="align-middle text-nowrap">
                                        <button type="button" title="Ver" class="btn btn-sm btn-warning"><i
                                                class="fas fa-eye"></i></button>
                                        <a href="{{ route('roles.edit', $rol->id) }}" title="Editar" class="btn btn-sm btn-primary"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ route('roles.delete', $rol->id) }}" title="Eliminar" class="btn btn-sm btn-danger" data-confirm-delete="true"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </x-layouts.content>

</x-layouts.app>
