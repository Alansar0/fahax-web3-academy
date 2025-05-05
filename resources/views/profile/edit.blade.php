{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<div class="edit-profile-container">
    <h2>Edit Profile</h2>
    <form class="edit-profile-form">
        <div class="form-group">
            <label for="full-name">Full Namnpm run deve</label>
            <input type="text" id="full-name" placeholder="Enter your full name" />
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" placeholder="Enter your email address" />
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" placeholder="000-000-0000" />
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea id="bio" placeholder="Write a little about yourself"></textarea>
        </div>
        <button type="submit" class="save-btn">Save Changes</button>
    </form>
</div>
