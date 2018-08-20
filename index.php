<?php 
include "./View/Header.php";
?>
<div class="row">

<form class="form-horizontal" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Subir Imagen</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="selectimagen">Subir imagen de Residuos</label>
  <div class="col-md-4">
    <input id="selectimagen" name="selectimagen" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>


</div>

<?php 
include "./View/Footer.php";
?>