@foreach($posts as $post)
   <h2>{{ $post->title }}</h2>
   <p>{{ $post->content }}</p>
   
   <a href="{{ route('posts.edit', $post) }}">Edit</a>
   <form action="{{ route('posts.destroy', $post) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit">Delete</button>
   </form>
@endforeach
<a href="{{ route('posts.create') }}">Add New Post</a>
{{-- mengembalikan file --}}

{{-- <a href="{{ url('/post/restore/' . $post->id) }}" class="btn btn-primary">Kembalikan</a> --}}
