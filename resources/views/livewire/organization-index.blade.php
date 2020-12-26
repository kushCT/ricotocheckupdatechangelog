<div class="flex flex-col space-y-8 pt-4">
    @foreach($organizations as $organization)
        <livewire:organization-single :organization="$organization" :key="$organization->id"/>
    @endforeach
</div>
