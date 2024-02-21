
<nav class="navbar navbar-inverse navbar-expand-lg bg-body-tertiary shadow sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-flex align-items-center" id="navbarSupportedContent">

        <ul class="nav navbar-nav navbar-right me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('products')}}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('categories')}}">categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('gallery')}}">gallery</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>