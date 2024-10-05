<div>
    <div class="card my-3">
        <div class="card-header">
            <div>
                <input type="text" wire:model="search" placeholder="Buscar usuario..." class="form-control" />
                {{ $search }}
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
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
