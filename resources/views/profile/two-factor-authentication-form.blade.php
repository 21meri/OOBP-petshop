<x-action-section>
    <x-slot name="title">
        {{ __('Autentifikacija u dva faktora') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Dodajte dodatnu sigurnost svom računu korištenjem dvostruke provjere autentičnosti.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('Dovršite omogućavanje dvofaktorske autentifikacije.') }}
                @else
                    {{ __('Omogućili ste dvofaktornu autentifikaciju.') }}
                @endif
            @else
                {{ __('Niste omogućili dvostruku autentifikaciju.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Kada je omogućena provjera autentičnosti u dva faktora, od vas će se tražiti sigurni, nasumični token tijekom provjere autentičnosti. Možete dohvatiti ovaj token iz aplikacije Google Authenticator na svom telefonu.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('Kako biste dovršili omogućavanje dvostruke provjere autentičnosti, skenirajte sljedeći QR kod pomoću aplikacije za provjeru autentičnosti vašeg telefona ili unesite ključ za postavljanje i unesite generirani OTP kod.') }}
                        @else
                            {{ __('Sada je omogućena dvostruka autentifikacija. Skenirajte sljedeći QR kod pomoću aplikacije za provjeru autentičnosti vašeg telefona ili unesite ključ za postavljanje.') }}
                        @endif
                    </p>
                </div>

                <div class="mt-4 p-2 inline-block bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Ključ za postavljanje') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-label for="code" value="{{ __('Kod') }}" />

                        <x-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model.defer="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Pohranite ove kodove za oporavak u sigurnom upravitelju lozinki. Mogu se koristiti za oporavak pristupa vašem računu ako se vaš uređaj za dvofaktorsku autentifikaciju izgubi.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-button type="button" wire:loading.attr="disabled">
                        {{ __('Omogući') }}
                    </x-button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-secondary-button class="mr-3">
                            {{ __('Regenerirajte kodove za oporavak') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-button type="button" class="mr-3" wire:loading.attr="disabled">
                            {{ __('Potvrdi') }}
                        </x-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="showRecoveryCodes">
                        <x-secondary-button class="mr-3">
                            {{ __('Prikaži kodove za oporavak') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-secondary-button wire:loading.attr="disabled">
                            {{ __('Otkaži') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-danger-button wire:loading.attr="disabled">
                            {{ __('Onemogući') }}
                        </x-danger-button>
                    </x-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-action-section>
