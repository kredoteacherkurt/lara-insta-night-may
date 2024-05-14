@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="row">
        <div class="col-8">
            @forelse ($all_posts as $post)
                <div class="card mb-4">
                    {{-- title  --}}
                    @include('users.posts.contents.title')

                    {{-- body --}}
                    @include('users.posts.contents.body')
                </div>
            @empty
                <div class="text-center">
                    <h2>Share photos</h2>
                    <p class="text-muted">
                        When you share photos, they'll appear on your profile <a href="{{route('post.create')}}" class="text-decoration-none">
                            Share your first photo
                    </a>
                </p>
                </div>
            @endforelse
        </div>
        <div class="col-4 bg-secondary">
            Suggested users location
            {{-- im really handsome --}}
        </div>
    </div>
@endsection
