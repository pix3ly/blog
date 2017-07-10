<h1>{{ $blog->title }}</h1>
<ul>
    @foreach ($blog->posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
        </li>
    @endforeach
</ul>
