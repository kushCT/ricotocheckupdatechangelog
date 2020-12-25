<span wire:click="changeOrganization('{{$organization->id}}')" class="cursor-pointer rounded-full bg-gray-300 w-12 h-12 text-white flex justify-center items-center">
    {!! $organization->nameInitial() !!}
</span>
