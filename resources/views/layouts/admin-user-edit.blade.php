<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit User - SB Admin Pro</title>
    <link href="{{asset('libs/sb-admin/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
</head>

<body class="nav-fixed">
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
                                    Editar usuario
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href="UserList">
                                    <i class="me-1" data-feather="arrow-left"></i>
                                    Volver a lista de usuarios
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <!--<div class="col-xl-4">
                                <!-- Profile picture card
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-
                                        <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                                        <!-- Profile picture help block-
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                        <!-- Profile picture upload button-
                                        <button class="btn btn-primary" type="button">Upload new image</button>
                                    </div>
                                </div>
                            </div>-->
                    <div class="col-xl-15">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Detalles de la cuenta</div>
                            <div class="card-body">
                                <form action="{{url('update/'.$data->id) }}" method="POST">
                                @csrf
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">Primer nombre</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{$data->pri_nombre}}" disabled />
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Primer apellido</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="{{$data->pri_apellido}}" disabled />
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Correo electronico</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$data->email}}" disabled />
                                    </div>

                                    <!-- Form Group (Roles)-->
                                    <div class="mb-3">
                                        <label class="small mb-1">Rol</label>
                                        <select class="form-select" aria-label="Default select example" name="rol">
                                            <option selected disabled>{{$data->rol->roles}}</option>
                                            @foreach($rol as $rol)
                                            <option value="{{$rol->id}}" >{{$rol->roles}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Submit button-->
                                    <input class="btn btn-primary" type="submit" value="Actualizar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright &copy; Datasignt 2021</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Politica de privacidad</a>
                        &middot;
                        <a href="#!">Terminos &amp; Condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('libs/sb-admin/js/scripts.js')}}"></script>
</body>

</html>