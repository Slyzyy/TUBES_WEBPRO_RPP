<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>epuskesmas - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="<?= base_url('./assets/vendor/fontawesome-free/css/all.min.css') ?>"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('./assets/css/sb-admin-2.min.css" rel="stylesheet') ?> "/>
    <link href="<?= base_url('./assets/css/style_chat.css" rel="stylesheet') ?> "/>
    <!-- <link href="<?= base_url('./assets/css/style_blog.css" rel="stylesheet') ?> "/> -->
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.html"
        >
          <div class="sidebar-brand-icon rotate-n-15"></div>
          <div class="sidebar-brand-text mx-3">epuskesmas Dashboard</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_dashboard/index") ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Halaman</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_blog/index") ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Blog</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_chat/index") ?>">
            <i class="fas fa-fw fa-comment-medical"></i>
            <span>Chat</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_pembelianObat/index") ?>">
            <i class="fas fa-fw fa-capsules"></i>
            <span>Beli Obat</span></a
          >
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("p_pembayaran/index") ?>">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Cart</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?= $pasien['nama'];?></span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="<?= base_url("./assets/other/bocilkematian.jpg") ?>"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="<?= base_url('login/logout');?>"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          
          <!-- Begin Page Content --> <!-- Konten utama mulai dari sini -->
        
          <div class="container">
      <h2>Tab Konsultasi</h2>
      <div class="card mx-auto">
        <div class="card-header bg-transparent">
          <div class="navbar navbar-expand p-0">
            <ul class="navbar-nav me-auto align-items-center">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <div
                    class="position-relative"
                    style="
                      width: 50px;
                      height: 50px;
                      border-radius: 50%;
                      border: 2px solid black;
                      padding: 2px;
                    "
                  >
                    <img
                      src="assets/dokter gigi.png"
                      class="img-fluid rounded-circle"
                      alt=""
                    />
                    <span
                      class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"
                    >
                      1
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Dr. Permata</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-phone-alt"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-video"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-times"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-body p-4" style="height: 500px; overflow: auto">
          <div class="bubbleWrapper">
            <div class="inlineContainer">
              <img class="inlineIcon" src="assets/dokter gigi.png" />
              <div class="otherBubble other">
                Halo User, apakah kendala dan keluhan anda?
              </div>
            </div>
            <span class="other">08:41</span>
          </div>
          <div class="bubbleWrapper">
            <div class="inlineContainer own">
              <img
                class="inlineIcon"
                src="https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png"
              />
              <div class="ownBubble own">
                Saya punya sakit telinga dok, nyeri di dalam telinga
              </div>
            </div>
            <span class="own">08:55</span>
          </div>
          <div class="bubbleWrapper">
            <div class="inlineContainer">
              <img class="inlineIcon" src="assets/dokter gigi.png" />
              <div class="otherBubble other">
                Sudah berapa lama kondisi ini anda alami?
              </div>
            </div>
          </div>
          <span class="other">10:13</span>
          <div class="bubbleWrapper">
            <div class="inlineContainer own">
              <img
                class="inlineIcon"
                src="https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png"
              />
              <div class="ownBubble own">Sudah sekitar 3 hari dok</div>
            </div>
            <span class="own">11:07</span>
          </div>
          <div class="bubbleWrapper">
            <div class="inlineContainer">
              <img class="inlineIcon" src="assets/dokter gigi.png" />
              <div class="otherBubble other">
                Kita sarankan untuk membeli obat telinga Antibiotik
              </div>
            </div>
            <span class="other">11:11</span>
          </div>
          <div class="bubbleWrapper">
            <div class="inlineContainer own">
              <img
                class="inlineIcon"
                src="https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png"
              />
              <div class="ownBubble own">Baik dok terimakasih</div>
            </div>
            <span class="own">11:13</span>
          </div>
        </div>
        <div class="card-footer bg-transparent">
          <div class="navbar navbar-expand p-0">
            <ul class="navbar-nav me-auto align-items-center">
              <li class="nav-item">
                <a href="" class="nav-link"> </a>
              </li>
              <li class="nav-item">
                <input class="input" type="text" placeholder="Send Message" />
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; 2022 E - Puskesmas. Designed By RPP</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
            <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function () {
        $(".menu-icon").on("click", function () {
          $("nav ul").toggleClass("showing");
        });
      });

      $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
          $("nav").addClass("black");
        } else {
          $("nav").removeClass("black");
        }
      });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('./assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('./assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('./assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('./assets/css/sb-admin-2.min.css') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('./assets/vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('./assets/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('./assets/js/demo/chart-pie-demo.js') ?>"></script>
  </body>
</html>