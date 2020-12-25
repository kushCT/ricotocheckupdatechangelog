<a href="#"
    wire:click.prevent="changeOrganization('{{ $organization->id }}')"
    @if($isCurrentOrganization) disabled @endif
    class="rounded-full bg-gray-300 w-12 h-12 text-white flex justify-center items-center @if($isCurrentOrganization) pointer-events-none cursor-not-allowed @else cursor-pointer @endif">
    {!! $organization->nameInitial() !!}
</a>
