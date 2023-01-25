<div class="d-grid gap-4">
    <select wire:model="selectedContinent" wire:change="changeContinent" class="form-control">
        <option value="-1">Please select continent</option>
        @foreach($continents as $continent)
        <option value="{{$continent->id}}">{{$continent->name}}</option>
        @endforeach
    </select>
    <p wire:loading>
        Loading...
    </p>
    <select wire:model="selectedCountry" class="form-control">
        <option value="-1">Please select country</option>
        @foreach($countries as $country)
        <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
    </select>
</div>
