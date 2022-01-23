<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
<a href="#" class="navbar-brand">CODING CHALLENGE</a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('list') }}">{{ __('Home') }}</a>
      </li>
    </ul>
  </div> 
</nav>






<div class="container">	 
    <h2 class="title mt-5">PHP Invoice System</h2>

    <a class="btn btn-primary" role="button" aria-disabled="true" href="{{ route('list') }}">{{ __('Invoice List') }}</a>
    <a class="btn btn-primary" role="button" aria-disabled="true" href="{{ route('create') }}">{{ __('Create Invoice') }}</a>

    <div style="height:20px;"></div>
</div>