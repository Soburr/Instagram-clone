<x-app-layout>

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8">
                <img src=" /storage/{{ $post->image }} " alt="POST PHOTO" class="w-100">
            </div>
            <div class="col-md-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="/storage/{{ $post->user->dashboard->image }}" class="rounded-circle w-100" style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/dashboard/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <a href="#" class="pl-3">Follow</a>
                            </div>
                        </div>
                    </div>

                      <hr>
                    <p><span class="font-weight-bold">
                        <a href="/dashboard/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a></span>{{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
