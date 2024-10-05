<div class="pt-3">
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="card shadow">
        <div class="card-headertext-white text-center">
            <h4 class="m-2">Registar usuario</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit">
                <div class="form-group mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre del usuario">
                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email">Correo electrónico</label>
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Correo electrónico">
                    @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña">
                    @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirmar contreaseña</label>
                    <input type="password" wire:model="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmar contraseña">
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
