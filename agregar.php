
<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body"> 
                    <a href="index.php" class="btn btn-outline-primary">
                    <i class="fa-solid fa-angles-left"></i>
                        Regresar
                    </a>               
                    <h2>Agregar Nuevo Registro</h2>
                    
                    <form action="" metod="">
                        <label for="marca">Marca(*)</label>
                        <input type="text" class="form-control" id="marca" name="marca">
                        <label for="Modelo">Modelo(*)</label>
                        <input type="text" class="form-control" id="Modelo" name="Modelo">
                        <label for="Año">Año(*)</label>
                        <input type="text" class="form-control" id="Año" name="Año">
                        <label for="Precio">Precio(*)</label>
                        <input type="text" class="form-control" id="Precio" name="Precio">
                        <label for="Kilometraje">Kilometraje(*)</label>
                        <input type="text" class="form-control" id="Kilometraje" name="Kilometraje">
                        <label for="Color">Color</label>
                        <input type="text" class="form-control" id="Color" name="Color">
                        <label for="Email">Email(*)</label>
                        <input type="text" class="form-control" id="Email" name="Email">
                        <label for="Telefono">Teléfono(*)</label>
                        <input type="text" class="form-control" id="imageCar" name="imageCar">

                        <label for="Fotografia">Fotografía</label>
                        <input type="file" class="form-control" id="Fotografia" name="Fotografia">

                        <label for="Fotografia">Fecha de Alta(*)</label>
                        <input type="datetime-local" class="form-control" id="FechaDeAlta" name="FechaDeAlta">

                        <label for="Fotografia">Fecha de Ultima Modificación(*)</label>
                        <input type="datetime-local" class="form-control" id="FechaDeActualizacion" name="FechaDeActualizacion">                        
                        
                        <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i>
                            Crear Registro</button>
                    </form>

                </div>
            </div>     
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>
