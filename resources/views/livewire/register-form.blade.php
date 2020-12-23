<form wire:submit.prevent="register">
    <div>
        <label for="name">{{ __('Name') }}</label>
        <input wire:model="form.name" type="text" name="name" placeholder="{{ __('Your full name') }}" id="name">
    </div>
    <div>
        <label for="email">{{ __('Email') }}</label>
        <input wire:model="form.email" type="email" name="email" placeholder="{{ __('Your email') }}" id="email">
    </div>
    <div>
        <label for="password">{{ __('Password') }}</label>
        <input wire:model="form.password" type="password" name="password" placeholder="{{ __('Your password') }}" id="password">
    </div>
    {{ json_encode($form) }}
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
