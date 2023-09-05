<x-app-layout>

       <div class="container">
         <div class="row">
            <div class="col-md-3 pt-10 pb-10">
                <img src="{{ $user->dashboard->profileImage() }}" alt="PROFILE PHOTO" class="rounded-circle w-100">
            </div>
            <div class="col-md-9 pt-5">
             <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-3">
                    <div style="font-size: 28px;" class="h4">{{ $user->username }}</div>

                  <livewire:follow-user>

                </div>

             @can ('update', $user->dashboard)
                <a href="/p/create">Add New Post</a>
             @endcan

             </div>

                 @can ('update', $user->dashboard)
                    <a href="/dashboard/{{ $user->id }}/edit">Edit Profile</a>
                 @endcan

                <div class="d-flex">
                    <div class="pr-4"><strong class="pr-1">{{ $user->posts->count() }}</strong>posts</div>
                    <div class="pr-4"><strong class="pr-1">23k</strong>followers</div>
                    <div class="pr-4"><strong class="pr-1">212</strong>following</div>
                </div>
                <div class="pt-3">
                    <strong>{{ $user->dashboard->title }}</strong>
                </div>
                <div class="pt-2">
                    <p>{{ $user->dashboard->description }}</p>
                </div>
                <div class="pt-1">
                    <a href="#">{{ $user->dashboard->url }}</a>
                </div>
            </div>
         </div>

        <div class="row">
          @foreach ($user->posts as $post)
             <div class="col-md-4 pb-4">
                 <a href="/p/{{ $post->id }}"><img src=" /storage/{{$post->image}} " alt="POST PHOTO" class="w-100"></a>
             </div>
          @endforeach
         </div>

       </div>


</x-app-layout>
