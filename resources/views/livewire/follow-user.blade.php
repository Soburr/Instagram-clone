<style>
    [x-cloak] {
        display: none;
    }
</style>

<div x-data="{ isFollowing: true}">
    <button class="btn btn-success" x-on:click="isFollowing = true" x-show="!isFollowing" x-cloak>Follow</button>
    <button class="btn btn-primary" x-on:click="isFollowing = !isFollowing" x-show="isFollowing" x-cloak>Unfollow</button>
</div>
