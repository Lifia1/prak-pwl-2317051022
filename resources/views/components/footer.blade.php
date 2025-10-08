<footer class="footer py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-start">

        <div class="mb-4 mb-md-0">
            <h5 class="fw-bold mb-2">User Management System</h5>
            <p class="text-light small mb-0">
                Sistem manajemen pengguna untuk mengelola data mahasiswa.
            </p>
        </div>

        <div class="d-flex flex-column text-light small">
            <span><i class="bi bi-envelope me-1"></i> info@usermanagement.com</span>
            <span><i class="bi bi-telephone me-1"></i> +62 123 4567 890</span>
        </div>
    </div>

    <hr class="my-3 opacity-25">

    <div class="container text-center">
        <p class="mb-0 text-secondary small">
            &copy; {{ date('Y') }} <span class="fw-semibold">User Management System</span>. All rights reserved.
        </p>
    </div>
</footer>

<style>
    .footer {
        background: #1f1f1f; 
        color: #f1f1f1;     
    .footer-link {
        color: #ddd;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }
    .footer-link::after {
        content: "";
        display: block;
        width: 0%;
        height: 2px;
        background: #6b4f2c;
        transition: width 0.3s ease;
        margin: 0 auto;
    }
    .footer-link:hover {
        color: #fff;
    }
    .footer-link:hover::after {
        width: 100%;
    }
    .text-gradient {
        background: linear-gradient(90deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
