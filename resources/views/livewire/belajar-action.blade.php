<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="mb3">
        <input type="number" class="form-control" wire:model.live="keranjang">
    </div>
    <button class="btn btn-primary" wire:click="plus">+</button>
    @if ($keranjang > 0)
        <button class="btn btn-danger" wire:click="minus">-</button>
    @endif
</div>
