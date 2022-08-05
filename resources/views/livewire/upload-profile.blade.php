<div>
    <form wire:submit.prevent="save">
        @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}" style="width: 300px;height:300px">
        @endif

        <input type="file" wire:model="photo">

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>
</div>