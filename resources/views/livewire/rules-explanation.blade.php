<div>
    {{-- Stop trying to control. --}}
    <div class="card shadow">
        <div class="m-3">
            <h1>Encontrar Ave</h1>
            <br>

            @if ($paso[0] == true)
                <div class="my-3">
                    <p class="mb-2">¿De que tamaño es el ave? </p>

                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" {{ $flag[0] == true ? 'disabled' : '' }}
                            {{ $size == 1 ? 'checked' : '' }} wire:click="ruleOne({{ '1' }})" id="btnradio1"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio1">Pequeña</label>

                        <input type="radio" class="btn-check" name="btnradio" {{ $flag[0] == true ? 'disabled' : '' }}
                            {{ $size == 2 ? 'checked' : '' }} wire:click="ruleOne({{ '2' }})" id="btnradio2"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Mediana</label>

                        <input type="radio" class="btn-check" name="btnradio" {{ $flag[0] == true ? 'disabled' : '' }}
                            {{ $size == 3 ? 'checked' : '' }} wire:click="ruleOne({{ '3' }})" id="btnradio3"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">Grande</label>
                    </div>
                </div>
            @endif
            @if ($paso[1] == true)
                <div class="my-3">
                    <p class="mb-2">¿En que hábitat lo vio? </p>
                    @foreach ($habitats as $habitat)
                    <button type="button" class="btn btn-secondary {{ $habitaSelect == $habitat['id'] ? 'border-primary border border-3' : '' }}" wire:click="ruleTwoSave({{$habitat['id']}})" {{ $flag[1] == true ? 'disabled' : '' }}>{{$habitat['nombre']}}</button>
                    @endforeach
                </div>
            @endif
            @if ($paso[2] == true)
                <div class="my-3">
                    <p class="mb-2">Selecciona una opción que describa a el ave</p>
                    @foreach ($attributes as $attribute)
                    <button type="button" class="btn btn-warning {{ $attributeSelect == $attribute['id'] ? 'border-primary border border-3' : '' }}" wire:click="result({{$attribute['id']}})" {{ $flag[2] == true ? 'disabled' : '' }}>{{$attribute['nombre']}}</button>
                    @endforeach
                </div>

            @endif
<br>
            {{-- RESULT --}}
            @if ($paso[3] == true)
            <hr>
            <br>
                <div class="my-3">
                    <h3>El Ave es: {{$this->ave->nombre}}</h3>
                </div>
                <br>
                <p>Se llegó a esa conclusión debido que se contestó lo siguiente:</p>
                <ul>
                    <li>Tiene un tamaño {{$sizeName}}</li>
                    <li>Vive en {{$habitaName}}</li>
                    <li>Tiene {{$this->nombreBuscar}}</li>
                </ul>
            @endif
        </div>
    </div>
</div>
