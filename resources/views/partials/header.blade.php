<header class="header">
  <div class="container">
    <div class="header_items">
      <a class="header_logo" href="/">
        <img class="header_image" src="{{ asset('images/windows.svg') }}" alt="icon">
      </a>
      <nav class="header_nav">
        <ul class="header_links">
          <li class="link"><a href="{{ route('post.index') }}">Post</a></li>
          <li class="link"><a href="{{ route('post.create') }}">Create</a></li>
        </ul>
      </nav>
      <button id="btn-menu" class="header_btn-menu">
        <img src="{{ asset('images/list.svg') }}" alt="menu">
      </button>
    </div>
  </div>
</header>