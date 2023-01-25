<div class="d-grid gap-2">
<div class="row">
    <div class="col-sm-4">
        <input type="number" wire:model="number1" placeholder="Number 1" class="form-control">
    </div>
    <div class="col-sm-4">
        <select class="w-24 form-control" wire:model="action">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
    </div>
    <div class="col-sm-4">
        <input type="number" wire:model="number2" placeholder="Number 2" class="form-control">
    </div>
</div>
<div class="d-grid gap-2">
    <button wire:click="calculate" class="btn btn-primary btn-block" {{ $disabled ? ' disabled' : ''}}>=
    </button>
</div>

<p class="text-3xl">{{$result}}</p>
</div>
