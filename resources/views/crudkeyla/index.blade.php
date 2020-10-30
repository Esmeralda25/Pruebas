<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>PRODUCTOS</b></h2></div>
                    <div class="col-sm-4">
                        <a href="crear.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Producto</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>PRODUCTO1</th>
                        <th>MOSTAR</th>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
			
                    </tr>
                    <tr>
                        <th>BOLSA</th>
                        <th><button><a href="bolsa.php"><em class="fa fa-dashboard">&nbsp;</em></i> MOSTRAR</a></button></th>
                    </div>
                    

                        <th><button><a href="editar.php" class="btn btn-info add-new">EDITAR</a></button></th>

                        <th><button>ELIMINAR</button></th>
                     

                    </tr>
                </thead>

                 
                <tbody>    
                          
                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>PRODUCTO2</th>
                        <th>MOSTRAR</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
            
                    </tr>
                    <tr>
                    
                        <th>ZAPATOS</th>
                        <th><em><a href="zapatos.php" class="btn btn-info add-new">&nbsp;</i> MOSTRAR</a></em></th>
                        <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
                        <th><em><a href="editar.php" class="btn btn-info add-new">EDITAR</a></em></th>
                        
                        <th><button>ELIMINAR</button></th>
                     

                    </tr>
                </thead>

                 
                <tbody>    
                          
                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>PRODUCTO3</th>
                        <th>MOSTRAR</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
            
                    </tr>
                    <tr>
                        <th>JOYERIA</th>
                        <th><button><a href="joyeria.php" class="btn btn-info add-new"></i> MOSTRAR</a></button></th>

                        <th><button><a href="editar.php" class="btn btn-info add-new">EDITAR</a></button></th>
                        <th><button>ELIMINAR</button></th>
                     

                    </tr>
                </thead>

                 
                <tbody>    
                          
                </tbody>
            </table>

        </div>
    </div>     
</body>
</html>