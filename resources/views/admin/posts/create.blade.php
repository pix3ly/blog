<form method="POST" action="/admin/posts">
    {{ csrf_field() }}
    <label>Title</div>
    <input type="text" name="title" />
    <label>Body</div>
    <textarea name="body"></textarea>
    <button>Submit</button>
</form>
