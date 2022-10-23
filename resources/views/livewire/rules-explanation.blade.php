<div>
<link rel="stylesheet" href="../css/style.css">

    
   

    {{-- Stop trying to control. --}}
    <div class="card shadow">
    
        <div class="m-3 body2" >
            <h1 class="text-center mt-5 letra">Encontrar Ave</h1>
            
            <div class="fondo">
            <br>

            @if ($paso[0] == true)
        
                <div class="col-sm-3" class="my-3">
                    <h5 class="mb-2"><font color="white">¿De que tamaño es el ave? </h5></font>
 
                    <div class="btn-toolbar ">
                    <div  class="btn-space" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" {{ $flag[0] == true ? 'disabled' : '' }}
                            {{ $size == 1 ? 'checked' : '' }} wire:click="ruleOne({{ '1' }})" id="btnradio1"
                            autocomplete="off">
                        <label class="btn btn-outline-primary for="btnradio1">Pequeña</label>

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

</div>

            @endif
            @if ($paso[1] == true)
            
                <div class="my-3">
                
                <h5 class="mb-2"><font color="white">¿En que hábitat lo vio? </h5></font>
                    @foreach ($habitats as $habitat)
                    <button type="button" class="btn btn-secondary btn-space btn-margen {{ $habitaSelect == $habitat['id'] ? 'border-primary border border-3' : '' }}"
                     wire:click="ruleTwoSave({{$habitat['id']}})" {{ $flag[1] == true ? 'disabled' : '' }}>{{$habitat['nombre']}}</button>
                    @endforeach
                

            @endif
</div>
            @if ($paso[2] == true)
            
                <div class="my-3">
                <h5 class="mb-2"><font color="white">Selecciona una opción que describa al ave...</h5></font>
                    @foreach ($attributes as $attribute)
                    <button type="button" class="btn btn-warning {{ $attributeSelect == $attribute['id'] ? 'border-primary border border-3' : '' }}" wire:click="result({{$attribute['id']}})" {{ $flag[2] == true ? 'disabled' : '' }}>{{$attribute['nombre']}}</button>
                    @endforeach
                </div>

            @endif
            
</div>

<br>

            {{-- RESULT --}}
            <div class="m-3 body"></div>
            @if ($paso[3] == true)

                
        <hr>
        <div class="m-3 body2">
                <div class="my-3" class= "col-md-8"> 
                <h2 class="text-center mt-5 letra">Ave encontrada:</h2>
</div>
                <div class="fon-aves">
                
                
                    <h3 class="text-center mt-5"><b><font color="yellow">>>>>>{{$this->ave->nombre}}<<<<<< </font></h3></b>
                
                <br>
                <h5>Con base a lo contestado, nos hemos encontrado al ave, con respecto a estas caracterisitcas:</h5>
                <ul>
                    <div class="text-right">
                    <li type="square"><h6><b>El ave es de tamaño: <font color="#14167afd"></b> "{{$sizeName}}",</li></font></b></h6>
                    <li type="square"><h6><b>Su hábitat es: <font color="#14167afd"></b> "{{$habitaName}}",</li></font></b></h6>
                    <li type="square"><h6><b>Sus caracteristicas es:<font color="#14167afd"></b> "{{$this->nombreBuscar}}"</li></font></b><h6>
                    <div>
                </ul>
            @endif
</div>
</div>
        </div>
    </div>

</div>
</div>

   