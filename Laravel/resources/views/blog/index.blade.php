@extends('Layouts.master')

@section('content')
    <div class="main-wrapper">
        <section class="blog-list px-3 py-5 p-md-5">
            @foreach($posts as $post)
                <hr>
                <div class="container">
                    <div class="item mb-5">
                        <div class="media">
                            <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{ URL::to('/img/blog/blog-post-thumb-1.jpg') }}" alt="image">
                            <div class="media-body">
                                <h3 class="title mb-1"><a href="{{route('blog.post', ['id' => $post->id])}}">{{ $post->title }}</a></h3>
                                <p style="font-weight: bold">
                                    @foreach($post->tags as $tag)
                                        - {{ $tag->name }} -
                                    @endforeach
                                </p>
                                <div class="meta mb-1">
                                    <span class="date">Published 3 months ago</span>
                                    <span class="time">5 min read</span><span class="comment">
                                        <a href="#">4 comments</a></span>
                                </div>
                                <div class="intro">{{ $post->content }}</div>
                                <a href="{{route('blog.post', ['id' => $post->id])}}">Read more...</a>
                            </div><!--//media-body-->
                        </div><!--//media-->
                    </div><!--//item-->
                </div>
            @endforeach
        </section>

        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

        </footer>

    </div><!--//main-wrapper-->
    <div class="row">
        <div class="col-md-12 text-center">
            <p>{{ $posts->links() }}</p>
        </div>
    </div>

    <!-- Javascript -->
    <script src="../resources/plugins/jquery-3.3.1.min.js"></script>
    <script src="../resources/plugins/popper.min.js"></script>
    <script src="../resources/plugins/bootstrap/js/bootstrap.min.js"></script>

@endsection
