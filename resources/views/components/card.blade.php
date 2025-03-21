@props(['img'])

<div>
  <div class="card" style="width: 18rem;">
    <img src="{{ $img }}" class="card-img-top" style=" width: 18rem; height: 15rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $judul }}</h5>
      <p class="card-text">{{ $desk }}</p>
      {{ $button }}
    </div>
  </div>
</div>