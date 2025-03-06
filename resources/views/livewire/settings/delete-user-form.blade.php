<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function deleteUser(Logout $logout): void
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        tap(Auth::user(), $logout(...))->delete();

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <x-daisyui.heading class="mb-2">{{ __('Delete account') }}</x-daisyui.heading>
        <x-daisyui.heading type="sub">{{ __('Delete your account and all of its resources') }}</x-daisyui.subheading>
    </div>

    <flux:modal.trigger name="confirm-user-deletion">
        <x-daisyui.button variant="warning" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
            {{ __('Delete account') }}
        </x-daisyui.button>
        
    </flux:modal.trigger>

    <flux:modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable class="max-w-lg">
        <form wire:submit="deleteUser" class="space-y-6">
            <div>
                <x-daisyui.heading size="lg" class="mb-2">{{ __('Are you sure you want to delete your account?') }}</x-daisyui.heading>

                <x-daisyui.heading type="sub">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </x-daisyui.heading>
            </div>

            <x-daisyui.input
                wire:model="password"
                id="password"
                label="{{ __('Password') }}"
                type="password"
                name="password"
                :errors="$errors"
            />

            <div class="flex justify-end space-x-2">
                <flux:modal.close>
                    <x-daisyui.button variant="neutral">{{ __('Cancel') }}</flux:x-daisyui.button>
                </flux:modal.close>

                <x-daisyui.button variant="warning" type="submit">{{ __('Delete account') }}</x-daisyui.button>
            </div>
        </form>
    </flux:modal>
</section>
