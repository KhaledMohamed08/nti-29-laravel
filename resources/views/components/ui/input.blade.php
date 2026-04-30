@props([
    'type' => 'text',
    'name' => '',
    'value' => ''
])
<div class="mb-3">
    <label for="exampleInput{{ $name }}" class="form-label">{{ $slot }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" class="form-control" id="exampleInput{{ $name }}" aria-describedby="emailHelp">
    @error($name)
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>