<x-jet-action-section>
    <x-slot name="title">
        {{ __('Autenticación de dos factores') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Agregue seguridad adicional a su cuenta usando Autenticación de dos factores.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="h5 font-weight-bold">
            @if ($this->enabled)
                {{ __('Has habilitado la Autenticación de dos factores.') }}
            @else
                {{ __('No ha habilitado la Autenticación de dos factores.') }}
            @endif
        </h3>

        <p class="mt-3">
            {{ __('Cuando la autenticación de dos factores está habilitada, se le solicitará un token aleatorio seguro durante la autenticación. Puede recuperar este token de su teléfono\s es la aplicación Google Authenticator.') }}
        </p>

        @if ($this->enabled)
            @if ($showingQrCode)
                <p class="mt-3">
                    {{ __('La autenticación de dos factores ahora está habilitada. Escanee el siguiente código QR usando la aplicación de autenticación de su teléfono.') }}
                </p>

                <div class="mt-3">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <p class="mt-3">
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your Autenticación de dos factores device is lost.') }}
                </p>

                <div class="bg-light rounded p-3">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-3">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Activar') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="me-3">
                            <div wire:loading wire:target="regenerateRecoveryCodes" class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            {{ __('Regenerate Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="me-3">
                            <div wire:loading wire:target="showRecoveryCodes" class="spinner-border spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>

                            {{ __('Show Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        <div wire:loading wire:target="disableTwoFactorAuthentication" class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Desactivar') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>