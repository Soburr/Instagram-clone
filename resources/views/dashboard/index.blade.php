<x-app-layout>

       <div class="container">
         <div class="row">
            <div class="col-md-3 pt-10 pb-10">
                <img src="/Melanie.png" alt="PROFILE PHOTO" style="height: 220px; width: 200px;" class="rounded-circle">
            </div>
            <div class="col-md-9 pt-5">
             <div class="d-flex justify-content-between align-items-baseline">
                <h1 style="font-size: 28px;">{{ $user->username }}</h1>

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
