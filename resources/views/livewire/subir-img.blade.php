<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


    {{-- Notification --}}
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="notification" class="toast align-items-center text-bg-success border-0" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Acción realizada con éxito
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" wire:ignore.self id="openModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    {{-- Table --}}
   
            <button type="button" wire:click="createModal()" class="btn btn-success">Subir imagen</button>
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
                    @foreach ($habitas as $habita)
                        <tr>
                            <td>{{ $habita->id }}</td>
                            <td>{{ $habita->nombre }}</td>
                            <td class="text-center">
                                {{-- <button type="button" wire:click="update({{$habita->id}})" class="btn btn-secondary">Editar</button> --}}
                                <button type="button" wire:click="delete({{ $habita->id }})"
                                    class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

    <script>
        window.addEventListener('openModal', event => {
            $("#openModal").modal('show');
        })
    </script>
    <script>
        window.addEventListener('closeModal', event => {
            $("#openModal").modal('hide');
        })
    </script>
    <script>
        window.addEventListener('notification', event => {
            $("#notification").toast('show');
        })
    </script>
</div>

