<x-filament::page>
    <x-filament::card>
        <h2 class="text-xl font-bold mb-4">Product Details</h2>

        <div class="space-y-2">
            <p><strong>Name:</strong> {{ $record->name }}</p>
            <p><strong>Description:</strong> {{ $record->description }}</p>
            <p><strong>Category:</strong> {{ $record->category->name ?? '-' }}</p>
            <p><strong>Color:</strong> {{ $record->color->name ?? '-' }}</p>
        </div>

        @if ($record->typeAssignments->isNotEmpty())
            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">Product Types</h3>
                <ul class="list-disc list-inside">
                    @foreach ($record->typeAssignments as $assignment)
                        <li>
                            {{ $assignment->type->name ?? 'N/A' }} — Bonus: {{ $assignment->my_bonus_field ?? '-' }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        
    </x-filament::card>
</x-filament::page>
