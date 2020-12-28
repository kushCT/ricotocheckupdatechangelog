<ul class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
    @foreach($applications as $app)
        <livewire:application-single :app="$app" :key="$app->id" />
    @endforeach
</ul>
