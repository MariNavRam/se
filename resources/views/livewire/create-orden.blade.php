<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    {{-- Modal --}}
    <div class="modal fade" id="openModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-success">Guardar</button>
          </div>
        </div>
      </div>
    </div>

      {{-- Table --}}
    <div class="row mt-5">
        <div class="col-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <i class="fa-solid fa-user"></i> {{ __('Aves') }}
            </h2>
        </div>
        <div class="col-6 text-end">
            <button type="button" wire:click="create()" class="btn btn-success">Añadir Orden</button>
        </div>
    </div>

    <div class="card mt-4">

        <div class="m-4">
            <input type="text" class="form-control form-control-lg">
        </div>

        <div class="m-4">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">NOMBRE</th>
                        <th class="text-center" scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $orden)
                        
                    @endforeach
                    <tr>
                        <td>{{$orden->id}}</td>
                        <td>{{$orden->nombre}}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-secondary">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

<script>
     window.addEventListener('openModal', event => {
            $("#openModal").modal('show');
        })
</script>
</div>
