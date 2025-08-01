<div class="card bg-dark p-3 mt-3">
    <div class="d-flex justify-content-between">
        <div class="text-info">
            Author: <strong>{{ $post->user->username }}</strong>
        </div>

        <div class="text-end text-light">
            {{ $post->created_at }}
        </div>
    </div>

    <div class="mt-3">
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->content }}</p>
    </div>

    <div class="d-flex justify-content-end gap-5">
        @can('update', $post)
            <a href="{{ route('post_update', ['id' => $post->id]) }}" class="btn btn-primary">Editar post</a>
        @endcan

        @can('delete', App\Models\Post::class)
            <a href="{{ route('post_delete', ['id' => $post->id]) }}" class="btn btn-warning">Excluir post</a>
        @endcan

        @can('forceDelete', App\Models\Post::class)
            <a href="{{ route('post_force_delete', ['id' => $post->id]) }}" class="btn btn-danger">Excluir permanentemente post</a>
        @endcan
    </div>
</div>