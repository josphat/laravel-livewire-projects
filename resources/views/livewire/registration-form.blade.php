<form wire:submit.prevent="submit" class="w-[400px] mx-auto py-16 text-start">

    @if (session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <label>
            <input type="radio" class="form-check-input" value="customer" name="role" wire:model="role">
            Customer
        </label>
        <label>
            <input type="radio" class="form-check-input" value="vendor" name="role" wire:model="role">
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="first_name" class="form-control @error('first_name') text-danger @enderror"
               placeholder="First Name">
        @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="last_name" class="form-control @error('first_name') text-danger @enderror"
               placeholder="Last Name">
        @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="email" wire:model.debounce.500ms="email" class="form-control @error('email') text-danger @enderror"
               placeholder="Email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <input type="password" wire:model.debounce.500ms="password" class="form-control @error('password') text-danger @enderror"
               placeholder="Password">
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="company_name"
                   class="form-control @error('company_name') text-danger @enderror" placeholder="Company Name">
            @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    @endif

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="vat_number"
                   class="form-control @error('vat_number') border-red-500 @enderror" placeholder="VAT Number">
            @error('vat_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Register</button>
</form>
