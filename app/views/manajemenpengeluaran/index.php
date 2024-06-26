
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank">
        <img src="<?= BASEURL ?>/img/logo-konveksi.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="mx-auto font-weight-bold text-xs">Konveksi Rahayu Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?= BASEURL ?>/dashboard">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= BASEURL ?>/manajemenproduk">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10 "></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= BASEURL ?>/manajementransaksi">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASEURL ?>/manajemenpengeluaran">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Pengeluaran</span>
          </a>
        </li>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Manajemen Pengeluaran</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Manajemen Pengeluaran</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="d-flex justify-content-between">
              <div class="p-3">
                <h6>Manajemen Pengeluaran</h6>
              </div>

              <!-- tombol tambah -->
              <div class="p-3">
                <button type="button" class="buttonadd tombolTambah" data-bs-toggle="modal" data-bs-target="#addItem">
                  <span class="button__text fs-6">Tambah</span>
                  <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor" height="24"
                      fill="none" class="svg">
                      <line y2="19" y1="5" x2="12" x1="12"></line>
                      <line y2="12" y1="12" x2="19" x1="5"></line>
                    </svg></span>
                </button>
              </div>
            </div>

            <div class="row">
              <div class="row-lg-6">
                <?php Flasher::flash(); ?>
              </div>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        style="width: 150px;">Nama Pengeluaran
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                        style="width: 100px;">Jumlah</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        style="width: 150px;">Tanggal
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                        style="width: 200px;">Detail</th>
                      <th class="text-secondary opacity-7" style="width: 80px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach( $data['exp'] as $exp) : ?>
                    <tr>
                      <td>
                        <div class="px-3 py-1">
                          <h6 class="mb-0 text-sm"><?= $exp['nama_pengeluaran']; ?></h6>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= $exp['harga']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $exp['tanggal']; ?></span>
                      </td>
                      <td class="align-middle text-center detail-column">
                        <span class="text-secondary text-xs font-weight-bold text-wrap"><?= $exp['detail']; ?></span>
                      </td>
                      <td class="text-center justify-content-center gap-1">
                        <a href="<?= BASEURL; ?>/manajemenpengeluaran/ubah/<?= $exp['id'] ?>" class="button tampilModalUbah" data-bs-toggle="modal" data-bs-target="#addItem" data-id="<?= $exp['id'] ?>">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                            fill="none">
                            <path
                              d="M10.5 2.125H3.20833C2.6558 2.125 2.12589 2.34449 1.73519 2.73519C1.34449 3.12589 1.125 3.6558 1.125 4.20833V18.7917C1.125 19.3442 1.34449 19.8741 1.73519 20.2648C2.12589 20.6555 2.6558 20.875 3.20833 20.875H17.7917C18.3442 20.875 18.8741 20.6555 19.2648 20.2648C19.6555 19.8741 19.875 19.3442 19.875 18.7917V11.5"
                              stroke="#0275D8" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                              d="M17.1408 1.73437C17.5552 1.31997 18.1172 1.08716 18.7033 1.08716C19.2893 1.08716 19.8514 1.31997 20.2658 1.73437C20.6802 2.14877 20.913 2.71082 20.913 3.29687C20.913 3.88292 20.6802 4.44497 20.2658 4.85937L10.5002 14.625L6.3335 15.6667L7.37516 11.5L17.1408 1.73437Z"
                              stroke="#0275D8" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </a>
                        <a href="<?= BASEURL; ?>/manajemenpengeluaran/hapus/<?= $exp['id'] ?>" class="button" onclick="return confirm('yakin?')">
                          <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24"
                            fill="none">
                            <path
                              d="M19.74 4.20429H15.96V2.943C15.96 2.16247 15.6503 1.41391 15.0989 0.861986C14.5475 0.310065 13.7997 0 13.02 0H7.98C7.20026 0 6.45246 0.310065 5.90111 0.861986C5.34975 1.41391 5.04 2.16247 5.04 2.943V4.20429H1.26C0.925827 4.20429 0.605341 4.33717 0.369045 4.57371C0.13275 4.81025 0 5.13106 0 5.46558C0 5.80009 0.13275 6.1209 0.369045 6.35744C0.605341 6.59398 0.925827 6.72686 1.26 6.72686H1.68V21.0214C1.68 21.579 1.90125 22.1137 2.29508 22.5079C2.6889 22.9021 3.22305 23.1236 3.78 23.1236H17.22C17.777 23.1236 18.3111 22.9021 18.7049 22.5079C19.0988 22.1137 19.32 21.579 19.32 21.0214V6.72686H19.74C20.0742 6.72686 20.3947 6.59398 20.631 6.35744C20.8672 6.1209 21 5.80009 21 5.46558C21 5.13106 20.8672 4.81025 20.631 4.57371C20.3947 4.33717 20.0742 4.20429 19.74 4.20429ZM7.56 2.943C7.56 2.8315 7.60425 2.72456 7.68301 2.64571C7.76178 2.56687 7.86861 2.52257 7.98 2.52257H13.02C13.1314 2.52257 13.2382 2.56687 13.317 2.64571C13.3958 2.72456 13.44 2.8315 13.44 2.943V4.20429H7.56V2.943ZM16.8 20.601H4.2V6.72686H16.8V20.601ZM9.24 10.0903V16.8172C9.24 17.1517 9.10725 17.4725 8.87095 17.709C8.63466 17.9456 8.31417 18.0784 7.98 18.0784C7.64583 18.0784 7.32534 17.9456 7.08905 17.709C6.85275 17.4725 6.72 17.1517 6.72 16.8172V10.0903C6.72 9.75578 6.85275 9.43497 7.08905 9.19843C7.32534 8.96189 7.64583 8.82901 7.98 8.82901C8.31417 8.82901 8.63466 8.96189 8.87095 9.19843C9.10725 9.43497 9.24 9.75578 9.24 10.0903ZM14.28 10.0903V16.8172C14.28 17.1517 14.1472 17.4725 13.911 17.709C13.6747 17.9456 13.3542 18.0784 13.02 18.0784C12.6858 18.0784 12.3653 17.9456 12.129 17.709C11.8927 17.4725 11.76 17.1517 11.76 16.8172V10.0903C11.76 9.75578 11.8927 9.43497 12.129 9.19843C12.3653 8.96189 12.6858 8.82901 13.02 8.82901C13.3542 8.82901 13.6747 8.96189 13.911 9.19843C14.1472 9.43497 14.28 9.75578 14.28 10.0903Z"
                              fill="#FF0000" />
                          </svg>
                        </a>
                      </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made by <span class="fw-medium" style="color: blue;">Kelompok 2</span>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
            onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal main-->
  <div class="modal fade" id="addItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pengeluaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= BASEURL; ?>/manajemenpengeluaran/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
                <!-- <div class="mb-3">
                <label for="gambarfile">Gambar</label> </br>
                <img id="thumbnail" alt="Preview gambar"> </br>
                <input type="file" id="gambarfile" name="gambarfile" accept="image/jpeg, image/png">
                </div> -->
                <div class="mb-3">
                  <label class="form-label">Nama Pengeluaran</label>
                  <input name='namapengeluaran' type="text" class="form-control" placeholder="Nama Pengeluaran" id="nama">
                </div>
                <div class="mb-3">
                  <label class="form-label">Jumlah Pengeluaran</label>
                  <input name='jml' type="number" class="form-control" placeholder="Masukan angka saja" id="jumlah">
                </div>
                <div class="mb-3">
                  <label class="form-label">Tanggal</label>
                  <input class="form-control datepicker" name='tanggal' placeholder="Pilih tanggal" type="text" onfocus="focused(this)" onfocusout="defocused(this)" id="tanggal">
                </div>
                <div class="mb-3">
                  <label class="form-label">Detail</label>
                  <textarea class="form-control" name='detail' aria-label="With textarea" placeholder="Detail Pengeluaran" id="detail"></textarea>
                </div>
                <!-- <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name='kategori'>
                    <option selected>Pilih Kategori</option>
                    <option value="kaos">Kaos</option>
                    <option value="kaos-polo">Kaos Polo</option>
                    <option value="hoodie">Hoodie</option>
                    <option value="kemeja">Kemeja</option>
                    <option value="topi">Topi</option>
                    <option value="celana-training">Celana Training</option>
                    <option value="celana-formal">Celana Formal</option>
                    <option value="slayer">Slayer</option>
                    <option value="totebag">Totebag</option>
                    <option value="celemek">Celemek</option>
                </select>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<?= BASEURL ?>/js/core/popper.min.js"></script>
  <script src="<?= BASEURL ?>/js/core/bootstrap.min.js"></script>
  <script src="<?= BASEURL ?>/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= BASEURL ?>/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= BASEURL ?>/js/plugins/flatpickr.min.js"></script>
  <script src="<?= BASEURL ?>/js/script/pengeluaran.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= BASEURL ?>/js/argon-dashboard.min.js?v=2.0.4"></script>

  <!-- JS dropdown -->
  <script>

    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
      const select = dropdown.querySelector('.select');
      const caret = dropdown.querySelector('.caret');
      const statuses = dropdown.querySelector('.statuses');
      const options = dropdown.querySelectorAll('.statuses li');
      const selected = dropdown.querySelector('.selected');

      if (select && caret && statuses && selected) {
        select.addEventListener('click', () => {
          select.classList.toggle('select-clicked');
          caret.classList.toggle('caret-rotate');
          statuses.classList.toggle('statuses-open');
        });

        options.forEach(option => {
          option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            statuses.classList.remove('statuses-open');

            options.forEach(option => {
              option.classList.remove('active');
            });
            option.classList.add('active');
          });
        });
      }

      document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
          select.classList.remove('select-clicked');
          caret.classList.remove('caret-rotate');
          statuses.classList.remove('statuses-open');
        }
      });
    });
  </script>
  <!-- JS status -->
  <script>
    const dropdown = document.querySelector('.dropdown-container .dropdown');
    const statusElement = document.querySelector('.align-middle .proses');

    dropdown.addEventListener('click', function (event) {
      if (event.target.tagName === 'LI') {
        const newStatus = event.target.innerText;

        statusElement.innerText = newStatus;

        statusElement.classList.remove('proses', 'selesai', 'tunda');
        statusElement.classList.add(newStatus.toLowerCase());
      }
    });
  </script>
  <!-- JS Datepicker -->
  <script>
    $(document).ready(function(){
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            todayHighlight: true,
            autoclose: true
        });
    });
  </script>