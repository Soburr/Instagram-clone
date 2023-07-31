<x-app-layout>

       <div class="container">
         <div class="row">
            <div class="col-md-3 p-5">
                <img src="/Melanie.png" alt="PROFILE PHOTO" style="height: 220px; width: 200px;" class="rounded-circle">
            </div>
            <div class="col-md-9 pt-5">
             <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
                <div class="d-flex">
                    <div class="pr-4"><strong>153</strong>posts</div>
                    <div class="pr-4"><strong>23k</strong>followers</div>
                    <div class="pr-4"><strong>212</strong>following</div>
                </div>
                <div class="pt-3">
                    <strong>{{ $user->dashboard->title }}</strong>
                </div>
                <div class="pt-2">
                    <p>{{ $user->dashboard->description }}</p>
                </div>
                <div class="pt-1">
                    <a href="#">www.{{ $user->dashboard->url ?? N/A}}</a>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-4">
                <img src="/Melanie.png" alt="PROFILE PHOTO" class="w-50">
            </div>
            <div class="col-md-4">
                <img src="/Melanie.png" alt="PROFILE PHOTO" class="w-50">
            </div>
            <div class="col-md-4">
                <img src="/Melanie.png" alt="PROFILE PHOTO" class="w-50">
            </div>
         </div>

       </div>


</x-app-layout>
