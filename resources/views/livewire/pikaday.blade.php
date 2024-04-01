<div>
    <input id="pikaday" name="pikaday" type="text" wire:model.live="date" autocomplete="off"
        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
    <div>
        <span class="text">Fecha seleccionada:</span>
        <div class="">{{ $date }}</div>
    </div>
</div>

@push('scripts')
    <script>
        var picker = new Pikaday({
            field: document.getElementById('pikaday'),
            format: 'D MMM YYYY',
            onSelect: function() {
                var data = this.getDate();
                console.log(data);
                @this.set('date', data);
            }
        });
    </script>
@endpush
