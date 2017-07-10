<h1>{{ $blog->title }}</h1>
<ul>
    @foreach ($blog->posts as $post)
        <li>
            <h2>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
        </li>
    @endforeach
</ul>
