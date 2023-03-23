<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrar cuenta - Datasignt</title>
    <link href="{{ asset('libs/sb-admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('libs/sb-admin/assets/img/Logo.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Social registration form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 fw-light mb-3">¡Crear cuenta! - Datasignt</div>
                                    <div class="small text-muted mb-2">Registrar con...</div>
                                    <!-- Social registration links-->
                                    <a class="btn btn-icon btn-facebook mx-1" href="#!"><i
                                            class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-github mx-1" href="#!"><i
                                            class="fab fa-github fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-google mx-1" href="#!"><i
                                            class="fab fa-google fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-twitter mx-1" href="#!"><i
                                            class="fab fa-twitter fa-fw fa-sm text-white"></i></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <div class="text-center small text-muted mb-4">... o ingrese su información a
                                        continuación.</div>
                                    <!-- Login form-->
                                    <form action="{{ url('register') }}" method="POST">
                                        @csrf
                                        <!-- Form Row-->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (first name)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="firstNameExample">Primer
                                                        nombre</label>
                                                    <input class="form-control form-control-solid" type="text"
                                                        placeholder="" aria-label="First Name"
                                                        aria-describedby="firstNameExample" required name="pri_nombre" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="lastNameExample">Segundo
                                                        nombre</label>
                                                    <input class="form-control form-control-solid" type="text"
                                                        placeholder="" aria-label="Last Name"
                                                        aria-describedby="lastNameExample" name="seg_nombre"  />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (first last-name)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="firstNameExample">Primer
                                                        apellido</label>
                                                    <input class="form-control form-control-solid" type="text"
                                                        placeholder="" aria-label="First Name"
                                                        aria-describedby="firstNameExample" name="pri_apellido" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (Two last-name)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="lastNameExample">Segundo
                                                        apellido</label>
                                                    <input class="form-control form-control-solid" type="text"
                                                        placeholder="" aria-label="Last Name"
                                                        aria-describedby="lastNameExample" name="seg_apellido" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="emailExample">Correo electronico</label>
                                            <input class="form-control form-control-solid" type="text" placeholder=""
                                                aria-label="Email Address" aria-describedby="emailExample" name="email" required />
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (choose password)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small"
                                                        for="passwordExample">Contraseña</label>
                                                    <input class="form-control form-control-solid" type="password"
                                                        placeholder="" aria-label="Password"
                                                        aria-describedby="passwordExample" name="password" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (Date)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small"
                                                        for="FechaNacimiento">Fecha de nacimiento</label>
                                                    <input class="form-control form-control-solid" type="date"
                                                        placeholder="" aria-label="Confirm Password"
                                                        aria-describedby="confirmPasswordExample" name="fecha_nacimiento" required  />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Group (form submission)-->
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" id="checkTerms" type="checkbox"
                                                    value="" />
                                                <label class="form-check-label" for="checkTerms">
                                                    Aceptar
                                                    <a href="#!">terminos &amp; condiciones</a>
                                                    .
                                                </label>
                                            </div>
                                            <input type="submit"  value ="Crear cuenta"class="btn btn-primary" href="auth-login-social.html">
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        ¿Ya tienes una cuenta?
                                        <a href="/login">¡Iniciar sesión!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('libs/sb-admin/js/scripts.js') }}"></script>
</body>

</html>
