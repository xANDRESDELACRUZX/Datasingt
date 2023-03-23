<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Configuración - Perfil - Datasignt</title>
    <link href="{{ asset('libs/sb-admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">
    <!-- menu -->
    @include('layouts.menu')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user"></i></div>
                                    Configuración de la cuenta - Perfil
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->
                <nav class="nav nav-borders">
                    <a class="nav-link active ms-0" href="/profile">Perfil</a>
                    <!--<a class="nav-link" href="account-billing.html">Billing</a>-->
                    <a class="nav-link" href="{{url('security/'.Auth::user()->id)}}">Seguridad</a>
                    <!--<a class="nav-link" href="account-notifications.html">Notifications</a>-->
                </nav>
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Foto de perfil </div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('libs/sb-admin/assets/img/illustrations/profiles/profile-1.png') }}"
                                    alt="" />
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG o PNG no mayor a 5 MB</div>
                                <!-- Profile picture upload button-->
                                <input class="btn btn-primary" type="file" value="Subir Imagen">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Detalles de la cuenta</div>
                            <div class="card-body">
                            <form action="{{ url('update2/'.$data->id) }}" method="POST">
                                @csrf
                                    <!-- Form Group (username)
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputUsername">Username (how your name
                                                will appear to other users on the site)</label>
                                            <input class="form-control" id="inputUsername" type="text"
                                                placeholder="Enter your username" value="username" />
                                        </div>-->
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" >Primer nombre</label>
                                            <input class="form-control" id="inputFirstName" type="text"
                                                placeholder="Enter your first name" value="{{$data->pri_nombre}}"name="pri_nombre"/>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" >Segundo nombre</label>
                                            <input class="form-control" id="inputLastName" type="text"
                                                placeholder="Enter your last name" value="{{$data->seg_nombre}}"name="seg_nombre"/>
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first lastname)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for=>Primer
                                                apellido</label>
                                            <input class="form-control" id="inputFirstLastName" type="text"
                                                placeholder="Enter your first name" value="{{$data->pri_apellido}}"name="pri_apellido"/>
                                        </div>
                                        <!-- Form Group (two lastname)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for=>Segundo
                                                apellido</label>
                                            <input class="form-control" id="inputTwoLastName" type="text"
                                                placeholder="Enter your last name" value="{{$data->seg_apellido}}"name="seg_apellido" />
                                        </div>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" >Fecha de
                                                nacimiento</label>
                                            <input class="form-control" id="inputFechaNacimiento" type="date"
                                                 value="{{$data->fecha_nacimiento}}" name="fecha_nacimiento" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" >Numero
                                                celular</label>
                                            <input class="form-control" id="inputFechaNacimiento" type="number"
                                                placeholder="Numero Tel:" value="{{$data->num_telefono}}" name="num_telefono"/>
                                        </div>
                                    </div>

                                        <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" id="">Departamento</label>
                                            <select id="depto" class="form-select form-select-lg mb-1" 
                                                aria-label="Default select example" name="departamentos">
                                                <option selected disabled>{{empty($data->departamento->nombre)?"Seleccione Departamento...":$data->departamento->nombre}}</option>
                                                @foreach($departamentos as $departamentos)
                                                <option value="{{$departamentos->id}}">{{$departamentos->nombre}}</option>
                                                 @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" >Ciudad</label>
                                            <select id="ciudad"class="form-select form-select-lg mb-1"
                                                aria-label="Default select example" name="ciudades" >
                                                <option selected disabled>{{empty($data->ciudad->nombre)?"Seleccione Ciudad...":$data->ciudad->nombre}}</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" id="">Tipo de documento</label>
                                            <select class="form-select form-select-lg mb-1"
                                                aria-label="Default select example" name="TipoIdentificacion">
                                                <option disabled selected>{{empty( $data->tipoidentificacion->nombre)?"Seleccione Tipo de Identificacion":$data->tipoidentificacion->nombre}}</option>
                                                @foreach($Ti as $Ti)
                                                <option value="{{$Ti->id}}">{{$Ti->nombre}}</option>
                                                @endforeach

                                            </select>
    
                                        </div>

                                        <div class="col-md-6">
                                            <label class="small mb-1" for="FechaNacimiento">Numero
                                                documento</label>
                                            <input class="form-control" id="inputFechaNacimiento" type="number"
                                                placeholder="Numero de identificaccion" value="{{$data->num_identificacion}}" name="num_identificacion" />
                                        </div>

                                        <!-- Form Group (email address)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                            <input class="form-control" id="inputEmailAddress" type="email"
                                                placeholder=" email " value="{{$data->email}}" name="email"/>
                                        </div>

                                        <!-- Form Group (password)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputEmailAddress">Contraseña</label>
                                            <input class="form-control" id="inputEmailAddress" type="password"
                                                placeholder="Ingrese una contraseña" value="{{$data->password}}" name="password"/>
                                        </div>
                                    </div>

                                    <!-- Form Row-->
                                    <div class="col-md-6">
                                        <!-- Save changes button-->
                                        <input class="btn btn-primary" type="submit" value="Actualizar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        &middot;
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('libs/sb-admin/js/scripts.js') }}"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>     
        var ciudad = $('#ciudad');


        $('#depto').change(function(){
            var id = $(this).val()

            
            if (id == ""){
                ciudad.html('<option value="">Seleccione Ciudad...</option>');
                ciudad.attr("disabled", true); 
            }else{


                $.ajax({
                    'url'     : 'getciudades/' + id,
                    'method'  : 'GET', 
                    success   : function(data){
                        
                        var ciudades = JSON.parse(data);
                        ciudad.html('<option value="">Seleccione Ciudad...</option>');

                        $.each(ciudades, function(i, val){
                            ciudad.append('<option value="'+val.id+'">'+val.nombre+'</option>');
                        });
                    
                        ciudad.removeAttr("disabled"); 
                    }
                });            
            }
        })
    </script>
</body>

</html>
