<h1>{{ $blog->title }}</h1>
<ul>
    @foreach ($blog->posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
            {{ str_limit($post->body, 80) }}
            <a href="/posts/{{ $post->id }}">Continue</a>
        </li>
    @endforeach
</ul>
