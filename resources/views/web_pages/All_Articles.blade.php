@extends('layouts.blogs_view')

@section('content')
    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul style="list-style-type:none">
                <li>{{ \Session::get('error') }}</li>
            </ul>
        </div>
    @endif
    {{-- @dd($posts) --}}
    <div class="container">
        @php
            $ck = 0;
        @endphp
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
            @foreach ($posts as $post)
                {{-- @if ($post->id)
                @continue;
                @endif --}}
                @php
                    $ck++;
                @endphp
                <div class="col mt-2 mb-2">
                    <div class="card p-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $loop->index . $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->body, 300) }}</p>
                        </div>
                        <div class="text-end pb-3 ">
                            <a href="/show/{{ $post->id }}" class="btn btn-primary test">read more</a>
                            @if (auth::user())
                                <a href="/edit/post{{ $post->id }}" class="btn btn-warning test">Edit</a>

                                <form action="/delete/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    {{-- <a href="/delete/{{ $post->id }}" class="btn btn-danger test">delete</a> --}}
                                    <button type="submit" class="btn btn-danger show_confirm">delete</button>
                                </form>
                            @endif
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $post->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if (!$ck)
            <h1>
                NO data to show
            </h1>
            {{ $posts->links('pagination::bootstrap-4') }}
        @else
            {{ $posts->links('pagination::bootstrap-4') }}
        @endif

    </div>
    @if (auth::user())
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center">
                    <a href="/createPost" class="btn btn-primary d-grid gap-2">create new post</a>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `هل انت متاكد انك تريد ان تحذف هذه المقال؟`,
                    text: "اذا تم مسح هذه المقالة لن تسطيع استرجعها ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
