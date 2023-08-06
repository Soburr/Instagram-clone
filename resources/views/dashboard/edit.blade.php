<x-app-layout>

    <div class="container">
        <form action="/dashboard/{{ $user->id }}" enctype="multipart/form-data" method="POST">
          @csrf
          @method('PATCH')
            <div class="row pt-6">
                <div class="col-8 offset-2">
                  <div class="row">
                     <h1>Edit Profile</h1>
                  </div>
                    <div class="form-group row">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                        value="{{ old('title') ?? $user->dashboard->title }}"
                        autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <div class="form-group row">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                         value="{{ old('description') ?? $user->dashboard->description }}"
                         autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <div class="form-group row">
                        <x-input-label for="url" :value="__('URL')" />
                        <x-text-input id="url" class="block mt-1 w-full" type="text" name="url"
                        value="{{ old('url') ?? $user->dashboard->url }}"
                        autofocus autocomplete="url" />
                        <x-input-error :messages="$errors->get('url')" class="mt-2" />
                    </div>
                      <div class="row">
                          <x-input-label for="image" :value="__('Profile Image')" />
                          <input type="file" class="form-control-file" id="image" name="image">
                          <x-input-error :messages="$errors->get('image')" class="mt-2" />
                      </div>
                      <div class="row pt-4">
                         <button class="btn btn-primary">Save Profile</button>
                      </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
