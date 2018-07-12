<form method="POST">
    {{ csrf_field() }}
    <label>Password</label>
    <input type="password" name="password" />
    <button>Submit</button>
</form>
