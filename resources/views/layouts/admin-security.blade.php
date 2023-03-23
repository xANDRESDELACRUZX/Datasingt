<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cuenta - Seguridad - Datasignt</title>
    <link href="{{ asset('libs/sb-admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="nav-fixed">

    @include('layouts.menu');

    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                <div class="container-xl px-4">
                    <div class="page-header-content">
                        <div class="row align-items-center justify-content-between pt-3">
                            <div class="col-auto mb-3">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="user"></i></div>
                                    Configuración de cuenta - Seguridad
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
                    <a class="nav-link ms-0" href="{{url('profile/'.Auth::user()->id)}}">Perfil</a>
                    <!--<a class="nav-link" href="account-billing.html">Billing</a>-->
                    <a class="nav-link active" href="/security">Seguridad</a>
                    <!--<a class="nav-link" href="account-notifications.html">Notifications</a>-->
                </nav>
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Change password card-->
                        <div class="card mb-4">
                            <div class="card-header">Cambiar contraseña</div>
                            <div class="card-body">
                                <form action="{{url('ResetPassword/'.Auth::user()->id)}}" method="POST">
                                    <!-- Form Group (current password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="currentPassword">Contraseña
                                            actual</label>
                                        <input class="form-control" id="currentPassword" type="password"
                                            placeholder="Enter current password" name="oldpassword" />
                                    </div>
                                    <!-- Form Group (new password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="newPassword">Nueva contraseña</label>
                                        <input class="form-control" id="newPassword" type="password"
                                            placeholder="Enter new password" name="newpassword" />
                                    </div>
                                    <!-- Form Group (confirm password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="confirmPassword">Confirmar
                                            contraseña</label>
                                        <input class="form-control" id="confirmPassword" type="password"
                                            placeholder="Confirm new password" />
                                    </div>
                                    <button class="btn btn-primary" type="button">Guardar</button>
                                </form>
                            </div>
                        </div>
                        <!-- Security preferences card-->
                        <div class="card mb-4">
                            <div class="card-header">Security Preferences</div>
                            <div class="card-body">
                                <!-- Account privacy optinos
                                    <h5 class="mb-1">Account Privacy</h5>
                                    <p class="small text-muted">By setting your account to private, your profile
                                        information and posts will not be visible to users outside of your user groups.
                                    </p>
                                    <form>
                                        <div class="form-check">
                                            <input class="form-check-input" id="radioPrivacy1" type="radio"
                                                name="radioPrivacy" checked />
                                            <label class="form-check-label" for="radioPrivacy1">Public (posts are
                                                available to all users)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="radioPrivacy2" type="radio"
                                                name="radioPrivacy" />
                                            <label class="form-check-label" for="radioPrivacy2">Private (posts are
                                                available to only users in your groups)</label>
                                        </div>
                                    </form>
                                    <hr class="my-4" />-->
                                <!-- Data sharing options-->
                                <h5 class="mb-1">Compartir datos</h5>
                                <p class="small text-muted">Compartir los datos
                                    de uso puede ayudarnos a mejorar nuestros productos y brindar un mejor servicio
                                    a nuestros usuarios mientras navegan por nuestra aplicación. Cuando acepta
                                    compartir datos de uso con nosotros, los informes de fallos y los análisis de
                                    uso se enviarán automáticamente a nuestro equipo de desarrollo para que los
                                    investigue.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioUsage1" type="radio" name="radioUsage"
                                            checked />
                                        <label class="form-check-label" for="radioUsage1">Sí, comparta datos e
                                            informes de fallos con los desarrolladores de aplicaciones</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="radioUsage2" type="radio"
                                            name="radioUsage" />
                                        <label class="form-check-label" for="radioUsage2">No, limite el intercambio
                                            de datos con los desarrolladores de aplicaciones.</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Two factor authentication card-->
                        <div class="card mb-4">
                            <div class="card-header">Autenticación de dos factores</div>
                            <div class="card-body">
                                <p>Agregue otro nivel de seguridad a su cuenta habilitando la autenticación de dos
                                    factores. Le enviaremos un mensaje de texto para verificar sus intentos de
                                    inicio de sesión en dispositivos y navegadores no reconocidos.</p>
                                <form>
                                    <div class="form-check">
                                        <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor"
                                            checked />
                                        <label class="form-check-label" for="twoFactorOff">Apagado</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="twoFactorOn" type="radio"
                                            name="twoFactor" />
                                        <label class="form-check-label" for="twoFactorOn">Encendido</label>
                                    </div>
                                    <div class="mt-3">
                                        <label class="small mb-1" for="twoFactorSMS">Numero de telefono</label>
                                        <input class="form-control" id="twoFactorSMS" type="tel"
                                            placeholder="Enter a phone number" value="+57 310 717 1179" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Delete account card-->
                        <div class="card mb-4">
                            <div class="card-header">Borrar cuenta</div>
                            <div class="card-body">
                                <p>Eliminar su cuenta es una acción permanente y no se puede deshacer. Si está
                                    seguro de que desea eliminar su cuenta, seleccione el botón de abajo.</p>

                                    <a class="btn btn-danger-soft text-danger" href="{{url ('delete/'.Auth::user()->id)}}" onclick="return confirm('estas seguro de eliminar?')">Entiendo, borro
                                    mi cuenta</a>
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
</body>

</html>
