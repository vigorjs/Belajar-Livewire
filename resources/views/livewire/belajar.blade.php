<div>
    {{-- Do your work, then step back. --}}

    {{-- INI BELAJAR PROPERTI LIVEWIRE --}}

    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model.live="nama"> --}}
        {{-- <textarea class="form-control" wire:model.live="nama"></textarea> --}}
        {{-- <input type="radio" wire:model.live="nama" value="Laki" name="jenis-kelamin"> Laki
        <input type="radio" wire:model.live="nama" value="Perempuan" name="jenis-kelamin"> Perempuan --}}

        {{-- <select class="form-select" wire:model.live="nama">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="Laki">Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> --}}

        <input type="{{ $show_password == 'show' ? 'text' : 'password' }}" class="form-control" wire:model="nama">
        <label for="password">show password</label>
        <input type="checkbox" wire:model.live="show_password" value="show">

    </div>
    Password saya adalah {{ $nama }}
</div>
