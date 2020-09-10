<div class="list-group-item">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3" width="32">
    <a href="{{ route('users.show', $user) }}">
        {{ $user->name }}
    </a>

    @can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="float-right" onsubmit="return confirm('您确定要删除这个用户吗？')">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
    @endcan
</div>