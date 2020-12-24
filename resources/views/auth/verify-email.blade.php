<x-guest-layout>
    <p>{{ __('You must verify your account before accessing this') }}</p>

    @if (session('status') === 'verification-link-sent')
        <p>{{ __('A VERIFICATION EMAIL HAS BEEN SENT') }}</p>
    @endif

    <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <button type="submit">{{ __('Resend email ') }}</button>
    </form>
</x-guest-layout>
