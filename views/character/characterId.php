<form>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label"> Character id: </label>
    <input type="text" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
if(isset($_SESSION['chargedCharacterd']) && $_SESSION['chargedCharacterd'] == 'failed'){
    $register = "<div class=\"alert alert-danger\" role=\"alert\"> Ups.. Character hasn't been found</div>";
}else{
?>

<!--<h1> {{ estudio.titulo }} <small>{{ estudio.duracion }}</small></h1>-->
<hr>

<div class="row animated fadeIn fast">
    <div class="col-md-4">
        <img [src]="estudio.img" alt="" class="img-fluid rounded">
        <div class="d-grid gap-2 col-12 mx-auto espacio-boton">
            <a (click)="volver()" class="btn btn-outline-danger btn-block">Regresar</a>
        </div>

    </div>
    <div class="col-md-8">
        <p *ngFor="let artic of articulo">
            {{artic}}
        </p>

    </div>
</div>

<?php } ?>
