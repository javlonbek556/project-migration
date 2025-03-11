<form action="{{ route('Posts.store') }}" method="post">
    @csrf
    <input type="name" name="name" placeholder="Name">
    <button type="submit">Upload</button>