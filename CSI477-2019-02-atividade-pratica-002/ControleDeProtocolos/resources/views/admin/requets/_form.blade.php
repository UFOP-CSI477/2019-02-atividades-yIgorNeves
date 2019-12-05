<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
    </div>
    <input type="text" class="form-control" name="name"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{isset($registro->name) ? $registro->name : ''}}">  
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



