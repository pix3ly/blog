<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css" />
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
        <style>
            .wrapper {
                margin: 48px auto;
                width: 90%;
                max-width: 960px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <form method="POST" action="/admin/posts">
                {{ csrf_field() }}
                <label>Title</label>
                <input type="text" name="title" />
                <label>Body</label>
                <textarea name="body" id="testThing"></textarea>
                <ul>
                    @foreach ($tags as $tag)
                        <li>
                            <input id="tag-{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}" /> <label for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
                        </li>
                    @endforeach
                </ul>
                <button>Submit</button>
            </form>
        </div>
        <script>
            var simplemde = new SimpleMDE({
                element: document.getElementById('testThing')
            });
        </script>
    </body>
</html>
