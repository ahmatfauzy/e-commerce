<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? ''}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  {{ $style ?? '' }}
  <style>
    .category-card {
      transition: transform 0.3s;
      height: 100%;
    }

    .category-card:hover {
      transform: scale(1.05);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
    }

    .category-img {
      height: 120px;
      object-fit: cover;
    }

    .card-body {
      padding: 0.75rem;
    }

    .card-title {
      font-size: 1rem;
      margin-bottom: 0.5rem;
    }

    .card-text {
      font-size: 0.85rem;
      margin-bottom: 0.5rem;
    }

    .btn-sm {
      font-size: 0.8rem;
      padding: 0.25rem 0.5rem;
    }

    .product-card {
      transition: transform 0.3s;
      height: 100%;
    }

    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
    }

    .product-img {
      height: 120px;
      object-fit: cover;
    }

    .btn-sm {
      font-size: 0.8rem;
      padding: 0.25rem 0.5rem;
    }

    .rating {
      color: #ffc107;
      font-size: 0.85rem;
    }

    .cart-item {
      border-bottom: 1px solid #dee2e6;
      padding: 0.75rem 0;
    }

    .cart-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
    }

    .cart-item-name {
      font-size: 1rem;
      font-weight: 500;
    }

    .cart-item-price,
    .cart-item-subtotal {
      font-size: 0.85rem;
    }

    .btn-sm {
      font-size: 0.8rem;
      padding: 0.25rem 0.5rem;
    }

    .quantity-input {
      width: 60px;
      font-size: 0.85rem;
      padding: 0.25rem;
    }

    .total-section {
      font-size: 1rem;
    }

    @media (max-width: 576px) {
      .cart-img {
        width: 60px;
        height: 60px;
      }

      .cart-item-name {
        font-size: 0.9rem;
      }

      .cart-item-price,
      .cart-item-subtotal {
        font-size: 0.8rem;
      }

      .quantity-input {
        width: 50px;
      }
    }
  </style>
</head>

<body>
  <x-navbar></x-navbar>
  <div class="container-fluid py-4">
    {{ $slot }}
  </div>
  <footer class="bg-dark text-white pt-4 mt-5" style="background:
linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);">
    <div class="container p-3">
      <div class="row">
        <div class="col-md-6 mb-3">
          <h5 class="mb-3">E-Commerce</h5>
          <p class="small">Belanja mudah, cepat, dan aman di toko
            online kami. Temukan produk favorit Anda dengan harga terbaik.</p>
        </div>
        <div class="col-md-3 mb-3">
          <h6 class="mb-3">Navigasi</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white
text-decoration-none">Beranda</a></li>
            <li><a href="#" class="text-white
text-decoration-none">Produk</a></li>
            <li><a href="#" class="text-white
text-decoration-none">Kategori</a></li>
            <li><a href="#" class="text-white
text-decoration-none">Kontak</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-3">
          <h6 class="mb-3">Kontak Kami</h6>
          <ul class="list-unstyled small">
            <li><i class="bi bi-envelope"></i>
              info@ecommerce.com</li>
            <li><i class="bi bi-telephone"></i> +62 856 6100
              994</li>
            <li><i class="bi bi-geo-alt"></i> Tegal,
              Indonesia</li>
          </ul>
        </div>
      </div>
      <hr class="bg-secondary">
      <div class="text-center pb-3">
        <small>(c) {{ date('Y') }} E-Commerce. All rights
          reserved.</small>
      </div>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>