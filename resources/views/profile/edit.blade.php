<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    

    <div class="py-12">
        <div class="container mx-auto sm:px-6 lg:px-8">
            <div class="row gap-6">
                <!-- Update Profile Information -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">{{ __('Update Profile Information') }}</h5>
                        </div>
                        <div class="card-body">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <!-- Update Password -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <h5 class="mb-0">{{ __('Update Password') }}</h5>
                        </div>
                        <div class="card-body">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <!-- Delete User Account -->
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">{{ __('Delete Account') }}</h5>
                        </div>
                        <div class="card-body">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-slot>
</x-app-layout>
