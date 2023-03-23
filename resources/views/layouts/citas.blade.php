<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Account Settings - Security - SB Admin Pro</title>
    <link href="{{ asset('libs/sb-admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>

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
                                    Crear citas - Citas
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
           
            <div class="container p-0 bg-white card mb-4">
                <div class="card-header ">Calendario</div>

                <div id="calendar" class="card-body"></div>
            </div>

            <div class="modal fade" id="citas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cambiarPasswordLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cambiarPasswordLabel">Creacion de citas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="col-xl-12 mb-12">
                                <!-- Modal card contraseña-->
                                <div class="card d-flex justify-content-center flex-column card-contacto">
                                    <div class="m-3">
                                        <form action="{{url('account/password/'.Auth::user()->id)}}" method="POST">
                                            @csrf
                                            <!-- current password -->
                                            <div class="mb-3">
                                                <label class="fw-bold text-gray-700 paddingLabel" for="currentPassword">Fecha y hora</label>
                                                <input class="form-control" id="currentPassword" type="time" placeholder="Ingrese su contraseña actual" name="oldPassword" />
                                            </div>
                                            <!-- new password -->
                                            <div class="mb-3">
                                                <label class="fw-bold text-gray-700 paddingLabel" for="newPassword">Especialidad</label>
                                                <input class="form-control" id="newPassword" type="text" placeholder="Ingrese la nueva contraseña" name="newPassword" />
                                            </div>
                                            <!-- confirm password -->
                                            <div class="mb-3">
                                                <label class="fw-bold text-gray-700 paddingLabel" for="confirmPassword">Doctor</label>
                                                <input class="form-control" id="confirmPassword" type="text" placeholder="Repite la nueva contraseña" name="newPassword2" />
                                            </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Confirmar Acción">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Volver</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: "es",
                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: true
                },
                slotLabelFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: true
                },
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                dateClick: function(info) {
                    $("#citas").modal("show");
                },
                views: {
                    dayGrid: {
                        // options apply to dayGridMonth, dayGridWeek, and dayGridDay views
                    },
                    timeGrid: {
                        // options apply to timeGridWeek and timeGridDay views
                    },
                    week: {
                        // options apply to dayGridWeek and timeGridWeek views
                    },
                    day: {
                        // options apply to dayGridDay and timeGridDay views
                    }

                }
            });
            calendar.render();
        });
    </script>
</body>

</html>