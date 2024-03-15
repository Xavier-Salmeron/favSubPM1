@props(['titulo', 'type', 'nombre'])

<label class="pr-2">{{ $titulo }}</label>
<input type={{ $type }} name={{ $nombre }} class="border border-black rounded-lg px-3 py">
@error($nombre)
<p>{{ $message }}</p>
@enderror
