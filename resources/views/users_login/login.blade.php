<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AllParty - Conecte-se</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets_admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets_admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets_admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets_admin/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Conecte-se</h3>
                            <form method="POST" action="">
                              @csrf
                                @if ($errors->any())
                                    <div class="error">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>E-mail *</label>
                                    <input type="text" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Senha *</label>
                                    <input type="text" class="form-control p_input">
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    {{-- <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div> --}}
                                    <a href="#" class="forgot-pass">Esqueceu sua senha</a>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Entrar</button>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-facebook mr-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google</button>
                                </div>
                                <p class="sign-up">Não tem uma conta?<a href="/register"> Registrar</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets_admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets_admin/js/off-canvas.js"></script>
    <script src="/assets_admin/js/hoverable-collapse.js"></script>
    <script src="/assets_admin/js/misc.js"></script>
    <script src="/assets_admin/js/settings.js"></script>
    <script src="/assets_admin/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
