<div class="flex flex-col space-y-6 pt-4">
    @foreach($organizations as $organization)
        <livewire:organization-single :organization="$organization" :key="$organization->id"/>
    @endforeach
</div>
