<div class="card-header bg-white py-3">
    <div class="row align-items-center">
        <div class="col-auto">
            {{-- photo --}}
            @if ($post->user->avatar)
                <img src="" alt="" class="rounded-circle avatar-sm">
            @else
                <i class="fa-solid fa-circle-user icon-sm"></i>
            @endif
        </div>
        <div class="col ps-0">
            {{-- name --}}
            <a href="#" class="text-decoration-none text-dark"> {{ $post->user->name }} </a>
        </div>
        <div class="col-auto">
            {{-- button --}}
            <div class="dropdown">
                <button class="btn btn-sm shadow-none" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>

                <div class="dropdown-menu">
                    @if (Auth::id() === $post->user->id)
                        <a href="{{route('post.edit',$post->id)}}" class="dropdown-item">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <button class="dropdown-item text-danger" data-bs-toggle="modal"
                            data-bs-target="#delete-post-{{ $post->id }}">
                            <i class="fa-solid fa-trash"></i>Delete
                        </button>
                    @else
                       <form action="#" method="post">
                        @csrf
                        <button type="submit" class="btnshadow-none dropdown-item text-danger">Unfollow</button>
                       </form>
                    @endif
                </div>
            </div>
            @include('users.posts.contents.modal.delete')
        </div>

    </div>
</div>
