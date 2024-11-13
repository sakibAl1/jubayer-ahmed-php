<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Header Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="container-fluid p-5 bg-dark text-white text-center">
  <h1>Nav Bar</h1>
  <a href= "/dashboard">Home</a>
  <a href= "/allproduct">All Product</a>
  <a href= "/addproduct">Add Product</a>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
     <x-responsive-nav-link :href="route('logout')"
      onclick="event.preventDefault();
      this.closest('form').submit();">
      {{ __('Log Out') }}
      </x-responsive-nav-link>
  </form>
</div>
@yield('content')
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Footer</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>


</body>
</html>