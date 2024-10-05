<div class="pt-3">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-xl-11 col-lg-10 col-md-10 col-sm-10">
                    <input type="text" wire:model="search" placeholder="Buscar usuario..." class="form-control my-2" />
                </div>
                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2">
                    <a class="btn btn-success btn-block  my-2" href="{{ route('admin.users.create') }}">Nuevo</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo electrónico</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-sm">Ver</a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-fother">
            {{ $users->links() }}
        </div>
    </div>
</div>
