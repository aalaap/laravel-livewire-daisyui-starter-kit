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

    <x-daisyui.modal.toggle name="delete_account" variant="warning">Delete account</x-daisyui.modal.toggle>

    <x-daisyui.modal name="delete_account" class="bg-warning">
        <div>
            <x-daisyui.heading size="lg" class="mb-2 text-warning-content">{{ __('Are you sure you want to delete your account?') }}</x-daisyui.heading>

            <x-daisyui.heading type="sub" class="text-warning-content">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </x-daisyui.heading>
        </div>

        <form wire:submit="deleteUser" >
            <x-daisyui.input
                wire:model="password"
                id="password"
                label="{{ __('Password') }}"
                type="password"
                name="password"
                required
                :errors="$errors"
                class="text-warning-content"
            />

            <x-daisyui.modal.actions>              
                <x-daisyui.modal.toggle name="delete_account" variant="success">{{ __('Keep account') }}</x-daisyui.modal.toggle>

                <x-daisyui.button variant="error" type="submit">{{ __('Delete account') }}</x-daisyui.button>
            </x-daisyui.modal.actions>
        </form>
    </x-daisyui.modal>
</section>
