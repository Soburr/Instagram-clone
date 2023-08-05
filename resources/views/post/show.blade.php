<x-app-layout>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8">
                <img src=" /storage/{{$post->image}} " alt="POST PHOTO" class="w-100">
            </div>
            <div>
                <div class="col-md-4">
                    <h3>{{ $post->user->username}}</h3>
                    <p>{{ $post->caption}}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
