<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">
    <a class="navbar-brand d-lg-none mx-auto fw-bold" href="#">
      <i class="bi bi-people-fill me-1"></i> UMS
    </a>

    <button class="navbar-toggler ms-auto d-lg-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav w-100 d-flex align-items-center justify-content-between mb-0">
        <li class="nav-item d-flex align-items-center left-group">
          <a class="nav-link px-2" href="{{ route('user.index') }}">
            <i class="bi bi-list-ul me-1"></i> Daftar User
          </a>
          <a class="nav-link px-2" href="{{ route('user.create') }}">
            <i class="bi bi-plus-circle me-1"></i> Tambah User
          </a>
          <a class="nav-link px-2" href="{{ route('matakuliah.store') }}">
            <i class="bi bi-list-ul me-1"></i> Mata Kuliah
          </a>
          <a class="nav-link px-2" href="{{ route('matakuliah.create') }}">
            <i class="bi bi-plus-circle me-1"></i> Tambah Mata Kuliah
          </a>
        </li>


        <li class="nav-item d-flex align-items-center right-group justify-content-end">
          <a class="nav-link px-2" href="#">
            <i class="bi bi-info-circle me-1"></i> Tentang
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .custom-navbar {
    background: #f7f7f7;
    padding: 0.6rem 0;
  }

  .navbar-brand {
    font-family: "Georgia", serif;
    color: #6b4f2c;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    font-size: 1.2rem;
  }

  .navbar-nav { list-style: none; padding-left: 0; }

  .nav-link {
    color: #444 !important;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    font-size: 0.95rem;
  }

  .nav-link:hover { color: #6b4f2c !important; }

  .btn-primary {
    background-color: #6b4f2c;
    border: none;
    border-radius: 6px;
  }
  .btn-primary:hover { background-color: #523a20; }

  @media (max-width: 991.98px) {
    .left-group, .right-group {
      flex-direction: column;
      align-items: flex-start;
      gap: .35rem;
      width: 100%;
      padding: .35rem 0;
    }
    .left-group .nav-link,
    .right-group .nav-link,
    .right-group .btn {
      display: block;
      padding-left: 0.25rem;
    }
    .navbar-nav > .nav-item.d-none.d-lg-flex { display: none !important; }
  }
</style>
