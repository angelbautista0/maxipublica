
<?php include "./header.php"; ?>

        <div class="card mt-4">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col">
                <h2>Maxi Publica Challenge</h2>
                <a href="./agregar.php" class="btn btn-primary">
                <i class="fa-solid fa-car"></i>             
                  Agregar nuevo registro
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" >
                  <thead>
                    <th class="text-center">Id</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Modelo</th>
                    <th class="text-center">Año</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Kilometraje</th>  
                    <th class="text-center">Color</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Fecha de Alta</th>  
                    <th class="text-center">Fecha de Modificación</th>    
                    <th class="text-center">Fecha de Eliminación</th>    
                    <th class="text-center">Fotografía</th>    
                    <th class="text-center">Editar</th>  
                    <th class="text-center">Eliminar</th>  
                  </thead>  
                  <tbody>
                    <tr>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center"></td>
                     <td class="text-center">
                      <form action="" method="post">
                      <button class="btn btn-primary">
                      <i class="fa-solid fa-camera"></i>Cargar </button>
                      </form>
                     </td>
                     <td class="text-center">
                      <form action="" method="post">
                      <button class="btn btn-warning"><i class="fa-solid fa-pen"></i>Editar </button>
                      </form>
                     </td>
                     <td class="text-center">
                      <form action="" method="post">
                      <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>Eliminar </button>
                      </form>
                     </td>
                    </tr> 
                  </tbody>
                </table>  
                </div>
              </div>     
            </div>
          </div>
      </div>
      
<?php include "./scripts.php"; ?>

 