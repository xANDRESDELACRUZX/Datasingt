<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Users List - SB Admin Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('libs/sb-admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">
    @include('layouts.menu')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-fluid px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user"></i></div>
                                    Users List
                                </h1>
                            </div>
                            <div class="col-12 col-xl-auto mb-3">
                                <a class="btn btn-sm btn-light text-primary" href="user-management-groups-list.html">
                                    <i class="me-1" data-feather="users"></i>
                                    Manage Groups
                                </a>
                                <a class="btn btn-sm btn-light text-primary" href="user-management-add-user.html">
                                    <i class="me-1" data-feather="user-plus"></i>
                                    Add New User
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container-fluid px-4">
                <div class="card">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>usuarios</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Telefono</th>
                                    <th>Tipo Identificacion</th>
                                    <th>Numero Identificacion</th>
                                    <th>Fecha de inicio</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Groups</th>
                                    <th>Joined Date</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar me-2"><img class="avatar-img img-fluid"
                                                    src="{{ asset('libs/sb-admin/assets/img/illustrations/profiles/profile-1.png') }}" />
                                            </div>
                                            {{$row->pri_nombre}} {{$row->pri_apellido}}
                                        </div>
                                    </td>
                                    <td>{{$row->email}}</td>
                                    <td>{{empty($row->rol->roles)?"No Agregado":$row->rol->roles}}</td>
                                    <td>{{empty($row->num_telefono)?"No Agregado":$row->num_telefono}}</td>
                                    <td>{{empty($row->tipoidentificacion->nombre)?"No Agregado":$row->tipoidentificacion->nombre}}</td>
                                    <td>{{empty($row->num_identificacion)?"No Agregado":$row->num_identificacion}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                            href="{{url ('usuarios/Editar/'.$row->id)}}"><i data-feather="edit"></i></a>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark" href="{{url ('delete/'.$row->id)}}" onclick="return confirm('estas seguro de eliminar?')"><i
                                                data-feather="trash-2"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('libs/sb-admin/js/datatables/datatables-simple-demo.js') }}"></script>
</body>

</html>
