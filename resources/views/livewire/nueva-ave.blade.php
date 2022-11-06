<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
{{-- Subir image--}}

<div class="m-3 body2">
                <div class="my-3" class= "col-md-8"> 
                <h2 class="text-center mt-5">Imagen de Ave:</h2>
                @foreach ($foto as foto)
                    <button type="button" class="btn btn-warning {{  ? 'border-primary border border-3' : '' }}" 
                    wire:click= "submit" >{{['foto']}}</button>
                    @endforeach
                

</div>

</div>

<form wire:submit.prevent="submit" enctype="multipart/form-data">

<div>

@if(session()->has('message'))

<div class="alert alert-success">

{{ session('message') }}

</div>

@endif

</div>

<div class="form-group">

<label for="title">url:</label>

<input type="text" class="form-control" id="title" placeholder="Enter foto" wire:model="foto">

@error('foto') <span class="text-danger">{{ $message }}</span> @enderror

</div>


<button type="submit" class="btn btn-success">Guardar</button>

</form>

<script>
        window.addEventListener('openModal', event => {
            $("#openModal").modal('show');
        })
    </script>