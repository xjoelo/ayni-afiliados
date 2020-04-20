<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ayni | Movimiento Politico Ayni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<style>
    body{
        background: url('/images/fondo-ayni.png') #fff;
        background-repeat: no-repeat;
        background-position: top center;

    }
    .ayni{
        margin-top: 50px;
        background: #fff;
        border-radius: 10px;
        border:solid 5px #D50020;
        width: 100%;
        max-width: 350px;
        box-shadow: 0 0 20px white;

    }
    .ayni h1{
        font-size: 80px;
        margin-top: -10px !important;
        color:#00198F;
        font-weight: 700;
    }
    .ayni h3{
        font-size: 20px;
        margin:0px !important;
        color:#00198F;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="ayni px-5  py-1 mx-auto" >
                <img class="img-fluid" src="{{ asset('images/manito-ayni-logo.png') }}" alt="">
                <h3 class="m-0">MOVIMIENTO REGIONAL</h3>
                <h1 class="m-0">AYNI</h1>
            </div>
        </div>
        <div class="col-12">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
       
        <div class="col-12 text-center my-2">
            <h1></h1>
            <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#modal-form">
                <i class="far fa-handshake mr-2"></i>
                Se parte de nosotros
            </button>
        </div>
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulario de Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="datos1" action="{{ route('insert.form') }}" method="POST"  autocomplete="off">
                            @csrf
                            <h5>
                                <i class="fas fa-user mr-2"></i>
                                DATOS PERSONALES
                            </h5>
                            <hr>
                            <div class="form-row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label >
                                            <i class="far fa-id-card mr-2"></i>
                                            Apellido Paterno
                                        </label>
                                        <input required name="apellidoPaterno" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label >
                                            <i class="far fa-id-card mr-2"></i>
                                            Apellido Materno
                                        </label>
                                        <input required  name="apellidoMaterno" type="text" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label >
                                            <i class="far fa-id-card mr-2"></i>
                                            Nombres
                                        </label>
                                        <input  required name="nombres" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="far fa-id-card mr-2"></i>
                                            DNI
                                        </label>
                                        <input  required name="dni" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="far fa-calendar-alt mr-2"></i>
                                            Fecha de Nacimiento
                                        </label>
                                        <input  required name="fechaNacimiento" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-hand-holding-heart mr-2"></i>
                                            Estado Civil
                                        </label>
                                        <select  required name="estadoCivil" type="text" class="form-control">
                                            <option value="">Seleccione...</option>
                                            <option value="S">Soltero</option>
                                            <option value="C">Casado</option>
                                            <option value="V">Viudo</option>
                                            <option value="D">Divorciado</option>
                                            <option value="CV">Conviviente</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-venus-mars mr-2"></i>
                                            Sexo
                                        </label>
                                        <select  required name="sexo" type="text" class="form-control">
                                            <option value="">Seleccione...</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-map-marked-alt mr-2"></i>
                                            Lugar de Nacimiento
                                        </label>
                                        <input  required name="lugarNacimiento" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h5>
                                <i class="fas fa-home mr-2"></i>
                                DOMICILIO ACTUAL
                            </h5>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="provincias">
                                        <i class="fas fa-map-marked-alt mr-2"></i>
                                        Departamento :
                                    </label>
                                    <select  required name="idDepartamento" id="departamentos" class="form-control">
                                        <option value="9">HUANCAVELICA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="provincias">
                                        <i class="fas fa-map-marked-alt mr-2"></i>
                                        Provincia :
                                    </label>
                                    <select  required name="idProvincia" id="provincias" class="form-control">
                                        <option value="">Seleccione</option>
                                        @foreach ($provincias as $provincia)
                                            <option value="{{ $provincia->id }}">{{ $provincia->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="distritos">
                                       <i class="fas fa-map-marked-alt mr-2"></i>
                                        Distrito :
                                    </label>
                                    <select  required name="idDistrito" id="distritos" class="form-control">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-map-signs mr-2"></i>
                                            Avenida/Calle/Jiron
                                        </label>
                                        <input name="avenida" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="fa fa-hashtag mr-2"></i>
                                            Numero
                                        </label>
                                        <input name="numero" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-map-signs mr-2"></i>
                                            Urbanizacion/Sertor/Caserio
                                        </label>
                                        <input name="urbanizacion" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-phone-square-alt mr-"></i>
                                            Telefono
                                        </label>
                                        <input name="telefono" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-at mr-2"></i>
                                            Correo Electrónico
                                        </label>
                                        <input name="email"  required type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label >
                                            <i class="fas fa-at mr-2"></i>
                                            Fotografia Carnet
                                        </label>
                                        <input name="image"  required type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                                
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-link" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" form="datos1" type="submit">
                            <i class="far fa-save mr-2"></i>
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    $("#provincias").change(function(){
      var idProvincia = $(this).val();
      $.get('{{ url('select-provincia/')}}/' +idProvincia, function(data){

        console.log(data);
          var producto_select = '<option value="">Seleccione Distrito</option>'
            for (var i=0; i<data.length;i++)
              producto_select+='<option value="'+data[i].id+'">'+data[i].name+'</option>';

            $("#distritos").html(producto_select);

      });
    });
  });
</script>
</body>
</html>