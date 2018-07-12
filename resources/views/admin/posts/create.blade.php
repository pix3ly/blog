@extends('layouts.backend')

@section('content')
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
@endsection

@section('scripts')
    <script>
        var editor = new Editor();

        editor.render();
    </script>
@endsection
