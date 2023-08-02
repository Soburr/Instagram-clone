<x-app-layout>

    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
          @csrf
            <div class="row pt-6">
                <div class="col-8 offset-2">
                  <div class="row">
                     <h1>Add New Post</h1>
                  </div>
                    <div class="form-group row">
                        <x-input-label for="caption" :value="__('Post Caption')" />
                        <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')"  autofocus autocomplete="caption" />
                        <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                    </div>
                      <div class="row">
                          <x-input-label for="image" :value="__('Post Image')" />
                          <input type="file" class="form-control-file" id="image" name="image">
                          <x-input-error :messages="$errors->get('image')" class="mt-2" />
                      </div>
                      <div class="row pt-4">
                         <button class="btn btn-primary">Add New Post</button>
                      </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
