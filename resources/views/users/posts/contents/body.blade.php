<div class="container p-0">
    <a href="{{route('post.show',$post->id)}}">
        <img src="{{ $post->image }}" alt="" class="w-100">
    </a>
</div>
<div class="card-body">
    <div class="row align-items-center">
        <div class="col-auto">
            {{-- heart button --}}
            <form action="" method="post">
                @csrf

                <button type="submit" class="btn shadow-none p-0">
                    <i class="fa-regular fa-heart"></i>
                </button>
            </form>
        </div>
        <div class="col-auto px-0">
            {{-- likes counter --}}
            <span>3</span>
        </div>
        <div class="col text-end">
            {{-- categories --}}
            @foreach ($post->categoryPost as $category_post)
                <span class="badge bg-secondary bg-opacity-50">
                    #{{ $category_post->category->name }}
                </span>
            @endforeach
        </div>

    </div>
    {{-- owner + description --}}
    <a href="#" class="text-decoration-none text-dark fw-bold">{{ $post->user->name }}</a>
    <p class="d-inline fw-light">{{ $post->description }}</p>
    <p class="text-muted small">{{ $post->created_at->diffForHumans() }}</p>

    {{-- comments here --}}
</div>
