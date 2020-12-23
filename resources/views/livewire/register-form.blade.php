<form wire:submit.prevent="register">
    <div>
        <label for="name">{{ __('Name') }}</label>
        <input wire:model="name" type="text" name="name" placeholder="{{ __('Your full name') }}" id="name">
        @error('name') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="email">{{ __('Email') }}</label>
        <input wire:model="email" type="email" name="email" placeholder="{{ __('Your email') }}" id="email">
        @error('email') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="password">{{ __('Password') }}</label>
        <input wire:model="password" type="password" name="password" placeholder="{{ __('Your password') }}" id="password">
        @error('password') <span>{{ $message }}</span> @enderror
    </div>
    <div>
        <label for="passwordConfirmation">{{ __('Password confirmation') }}</label>
        <input wire:model="passwordConfirmation" type="password" name="passwordConfirmation" placeholder="{{ __('Your password') }}" id="passwordConfirmation">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
