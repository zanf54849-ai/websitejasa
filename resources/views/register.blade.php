<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Akun Klien | Kurnia Plafond Sejahtera</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/plafond.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: var(--font-main);
            background: var(--hero-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }
        .register-card {
            background: #ffffff;
            border-radius: var(--radius-xl);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
            max-width: 480px;
            width: 100%;
            padding: 42px 36px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .brand-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .brand-header img {
            height: 52px;
            margin-bottom: 12px;
        }
        .brand-header h3 {
            font-weight: 800;
            color: var(--primary-navy);
            letter-spacing: -0.5px;
            margin-bottom: 4px;
        }
        .brand-header span {
            color: var(--gold);
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 2px;
        }
        .form-control {
            padding: 12px 16px;
            border-radius: var(--radius-md);
            font-size: 0.92rem;
            border: 1.5px solid var(--border-color);
        }
        .form-control:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 0.2rem var(--gold-glow);
        }
        .btn-gold {
            background: var(--accent-gradient);
            color: #ffffff;
            font-weight: 700;
            padding: 13px;
            border-radius: var(--radius-full);
            border: none;
            width: 100%;
            transition: all 0.25s;
            box-shadow: 0 4px 15px var(--gold-glow);
        }
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px var(--gold-glow);
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="register-card">
        <div class="brand-header">
            <a href="/">
                <img src="/images/plafond/logo.png" alt="Kurnia Plafond Sejahtera">
            </a>
            <h3>KURNIA</h3>
            <span>PLAFOND SEJAHTERA</span>
            <p class="text-muted small mt-2">Daftar akun klien untuk reservasi & melacak status pengerjaan</p>
        </div>

        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('actionregister') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-bold text-secondary">
                    <i class="fa-solid fa-user me-1 text-warning"></i> Nama Lengkap
                </label>
                <input type="text" name="username" class="form-control" placeholder="Nama lengkap Anda" required>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold text-secondary">
                    <i class="fa-solid fa-envelope me-1 text-warning"></i> Alamat Email
                </label>
                <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold text-secondary">
                    <i class="fa-solid fa-lock me-1 text-warning"></i> Kata Sandi
                </label>
                <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter" required>
            </div>

            <input type="hidden" name="role" value="Guest">

            <button type="submit" class="btn-gold mt-2">
                <i class="fa-solid fa-user-plus me-1"></i> Buat Akun Klien
            </button>
        </form>

        <hr class="my-4 text-muted">

        <div class="text-center">
            <p class="small text-secondary mb-2">Sudah memiliki akun?</p>
            <a href="/admin/login" class="btn btn-sm btn-outline-dark px-3 py-2 fw-semibold">
                <i class="fa-solid fa-arrow-right-to-bracket me-1"></i> Masuk ke Akun Klien
            </a>
            <div class="mt-3">
                <a href="/" class="small text-muted text-decoration-none">
                    <i class="fa-solid fa-arrow-left me-1"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/plafond.js') }}"></script>
</body>
</html>
