<x-layouts.main_layout title="home">
    <x-slot:content>
        
    @if ($posts->count() == 0)
        <div class="my-5 opacity-50">
            No posts found.
        </div>
    @else
    <div class="container">
        @can('create', App\Models\Post::class)
            <a href="{{ route('post_create') }}" class="btn btn-large btn-info my-5">Criar post</a>
        @endcan
        <div class="row">
            <div class="column">
                @foreach ($posts as $post)
                    <x-post_component :post="$post" />
                @endforeach
            </div>
        </div>
    </div>
    @endif

    </x-slot:content>
</x-layouts.main_layout>