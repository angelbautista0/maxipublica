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
                    <h2>Eliminar Registro</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>   
                            <th>Precio</th>        
                        </table>    
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>        
                        </table>    
                        <hr>
                        <div class="alert alert-danger" role="alert">
                            <p>¿Estas seguro de eliminar este registro?</p>
                            <p>Una vez eliminado no se podrá recuperar</p>
                        </div>
                        <form action="" method="post">
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i>
                                Eliminar
                            </buttom>
                        </form>
                </div>
            </div>     
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>
