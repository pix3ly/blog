@extends('layouts.backend')

@section('content')
    <div class="wrapper">
        <form method="POST" action="/admin/tags">
            {{ csrf_field() }}
            <div class="troep">
                <label>Name</label>
                <input type="text" name="name" />
                @foreach ($errors->get('name') as $error)
                    <div class="error">{{ $error }}</div>
                @endforeach
            </div>
            <button>Submit</button>
        </form>
    </div>
@endsection
