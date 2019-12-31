<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('blog.index')}}">Laravel Guide</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('blog.post', ['id' => 1])}}">Posts</a>
            </li>
        </ul>
    </div>
</nav>
