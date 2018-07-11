<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,700i" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,400i,700" />
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <div class="wrapper">
            <a href="/admin/posts/create">Create</a>
            <ul>
                @foreach ($posts as $post)
                    <li class="row row--divide">
                        <div class="row__column row__column--compact">
                            <div>{{ $post->title }}</div>
                            <ul class="tags">
                                @foreach ($post->tags()->pluck('name')->all() as $tag)
                                    <li>{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="row__column row__column--compact">{{ $post->posted_on }}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
