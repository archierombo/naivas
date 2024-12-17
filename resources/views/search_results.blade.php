<h1>Search Results for "{{ $query }}"</h1>

    @if($products->count())
        <ul>
            @foreach($products as $product)
                <li>
                    {{-- <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> --}}
                    <p>{{ Str::limit($product->name, 150) }}</p>
                </li>
            @endforeach
        </ul>

        {{ $products->links() }} <!-- Pagination links -->
    @else
        <p>No results found for your query.</p>
    @endif