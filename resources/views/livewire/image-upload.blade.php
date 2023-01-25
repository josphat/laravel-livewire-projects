<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        @if ($image)
            Preview:
            <div class="img-upload">
                @foreach($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="img img-rounded">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="form-control" multiple>

        @error('image') <span class="text-danger">{{ $message }}</span> @enderror

        <button type="submit" class="btn btn-primary">Save Photo</button>
    </form>

    <div class="img-preview">

        @foreach($images  as $image)
            <img src="{{$image}}" class="img rounded img-thumbnail">
        @endforeach
    </div>

</div>
