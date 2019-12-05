<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
        <select name="subject_id"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

            @foreach ($sub as $e)
                <option value="{{isset($e->id) ? $e->id : ''}}">{{isset($e->name) ? $e->name : ''}}</option>
            @endforeach           
            
         </select>

    </div>
</div>

<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Usuario</span>
        <select name="user_id"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    
            @foreach ($user as $x)
                <option value="{{isset($x->id) ? $x->id : ''}}">{{isset($x->name) ? $x ->name : ''}}</option>
            @endforeach           
                
        </select>

    </div>
</div>


<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Descrição</span>
    </div>
    <input type="text" class="form-control" name="description"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{isset($registro->description) ? $registro->description : ''}}">  
</div>


<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Data:</span>
    </div>
    <input type="date" class="form-control" name="date"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{isset($registro->date) ? $registro->date : ''}}">  
</div>



