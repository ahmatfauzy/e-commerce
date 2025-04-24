@php
    $cards = [
        [
            'img' => 'https://i.pinimg.com/736x/05/eb/9f/05eb9fada5c8b267b5414b7055eeed95.jpg',
            'judul' => 'Kaos Polos',
            'desk' => 'Kaos polos berbahan katun yang nyaman dipakai sehari-hari.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://i.pinimg.com/736x/2e/15/d4/2e15d4b6bf276b4d0fb460bfba2325c6.jpg',
            'judul' => 'Jaket Denim',
            'desk' => 'Jaket denim trendi yang cocok untuk segala suasana.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://i.pinimg.com/736x/71/05/27/7105273630fdf22ab86d405c10ca2d28.jpg',
            'judul' => 'Kemeja Batik',
            'desk' => 'Kemeja batik elegan dengan motif klasik khas Indonesia.',
            'btn' => 'Beli Sekarang'
        ],
        [
            'img' => 'https://i.pinimg.com/736x/e0/33/75/e0337500e733863bd5395d8836a6e21d.jpg',
            'judul' => 'Hoodie Oversize',
            'desk' => 'Hoodie oversize dengan bahan fleece yang hangat dan nyaman.',
            'btn' => 'Beli Sekarang'
        ],
    ];
@endphp

<x-layout>
    <!-- <div class="container py-5">
        <x-slot name="title">{{ $title }}</x-slot>

        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold text-primary border-bottom pb-2 mb-4">Baju Kami yang Masih Tersedia</h2>
            </div>
        </div>

        <div class=" d-flex flex-wrap g-2 mb-5">
            @foreach ($cards as $card)
                <div class="col-12 col-md-6 col-lg-3 px-1 mb-2">
                    <x-card img="{{ $card['img'] }}">
                        <x-slot name="judul">{{ $card['judul'] }}</x-slot>
                        <x-slot name="desk">{{ $card['desk'] }}</x-slot>
                        <x-slot name="button">
                            <x-button name="slot" class="btn-primary w-100">
                                <i class="bi bi-cart-plus me-2"></i>{{ $card['btn'] }}
                            </x-button>
                        </x-slot>
                    </x-card>
                </div>
            @endforeach
        </div> -->





        <div class="row">
            <h3>Categories</h3>
            @foreach($categories as $category)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $category['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                            <p class="card-text">
                                {{ $category['description'] }}
                            </p>
                            <a href="/category/{{ $category['slug'] }}" class="btn
                                btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <h3>Ingin lacak pesanan anda?</h3>
            <x-alert>
                <x-slot name="pesan"><i class="bi bi-search me-3"></i>Lacak</x-slot>
            </x-alert>
        </div>

    </div>
</x-layout>

<!-- <script>
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

    const appendAlert = (message, type) => {
        const wrapper = document.createElement('div');
        wrapper.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3 shadow-lg" style="z-index: 1050; min-width: 300px;" role="alert">
                <i class="bi ${type === 'success' ? 'bi-check-circle' : 'bi-exclamation-circle'} me-2"></i>${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        alertPlaceholder.append(wrapper);

        setTimeout(() => {
            const alert = wrapper.querySelector('.alert');
            alert.classList.add('fade');
            setTimeout(() => wrapper.remove(), 300);
        }, 3000);
    };

    document.getElementById('liveAlertBtn').addEventListener('click', () => {
        appendAlert('Anda belum memesan', 'success');
    });
</script> -->