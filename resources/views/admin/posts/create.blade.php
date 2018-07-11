<form method="POST" action="/admin/posts">
    {{ csrf_field() }}
    <label>Title</div>
    <input type="text" name="title" />
    <label>Body</div>
    <textarea name="body"></textarea>
    <ul>
        @foreach ($tags as $tag)
            <li>
                <input id="tag-{{ $tag->id }}" type="checkbox" name="tags[]" value="{{ $tag->id }}" /> <label for="tag-{{ $tag->id }}">{{ $tag->name }}</label>
            </li>
        @endforeach
    </ul>
    <button>Submit</button>
</form>
