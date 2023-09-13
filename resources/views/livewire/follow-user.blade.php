<style>
    [x-cloak] {
        display: none;
    }
</style>

<div x-data="{ following: {{ $user->isFollowing(Auth::user()) ? 'true' : 'false' }} }" class="ml-3 mb-2">
    <button class="btn btn-success" wire-click="follow({{ $user->id }})" x-show="!following" x-cloak>Follow</button>
    <button class="btn btn-primary" wire-click="unfollow({{ $user->id }})" x-show="following" x-cloak>Unfollow</button>
</div>
