<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

    <a href="/cart" class="btn btn-outline-light me-3 position-relative">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
            </svg>
        </i>
        {{-- Optionally, show cart item count --}}
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            {{ $total }}
            <span class="visually-hidden">items in cart</span>
        </span>
    </a>

</div>