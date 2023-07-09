<x-action-section>
    <x-slot name="title">
        {{ __('Obrisi racun') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Trajno izbrišite svoj račun.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Nakon što se vaš račun izbriše, svi njegovi resursi i podaci bit će trajno izbrisani. Prije brisanja računa preuzmite sve podatke ili informacije koje želite zadržati.') }}
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Obrisi racun') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Obrisi racun') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Jeste li sigurni da želite izbrisati svoj račun? Nakon što se vaš račun izbriše, svi njegovi resursi i podaci bit će trajno izbrisani. Unesite svoju lozinku kako biste potvrdili da želite trajno izbrisati svoj račun.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4"
                                autocomplete="current-password"
                                placeholder="{{ __('Lozinka') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Otkaži') }}
                </x-secondary-button>

                <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Obriši račun') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
