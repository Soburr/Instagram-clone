<div>
    <div x-data="{ isFollowing: @json($user->isFollowedBy(auth()->user())) }">
        <button
            x-show="!isFollowing"
            @click="followUser"
        >
            Follow
        </button>
        <button
            x-show="isFollowing"
            @click="unfollowUser"
        >
            Unfollow
        </button>
    </div>
</div>
