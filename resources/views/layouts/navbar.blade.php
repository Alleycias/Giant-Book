<div class="d-flex justify-content-center">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
      <ul class="dropdown-menu">
        @foreach ($categories as $cat)
        <li><a class="dropdown-item" href="/category/{{ $cat->id }}">{{ $cat->name}}</a></li>
        @endforeach
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/publisher">Publisher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
  </ul>
{{-- end header --}}
</nav>
</div>