<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: linear-gradient(90deg, #a52a2a, #800000);">
    <a class="navbar-brand" href="{{ url('posts') }}" style="font-family: 'Georgia', serif; font-size: 1.5rem; font-weight: bold; color: #fff;">
      BlogApp
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <!-- Home Link -->
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('posts') }}">Home</a>
        </li>
        <!-- Posts Link -->
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('posts.index') }}">Posts</a>
        </li>
        @auth
        <!-- Dashboard Link -->
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        @endauth
      </ul>
      <div class="ml-auto">
        <!-- Create Post Button -->
        @auth
        <a class="btn btn-light text-danger mr-2" href="{{ route('posts.create') }}">Create Post</a>
        @endauth
      </div>
    </div>
  </nav>
<br><br><br>
