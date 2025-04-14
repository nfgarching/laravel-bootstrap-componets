

<div class="input-group">
    <span class="input-group-text">{!! $target !!}</span>
    <div class="form-floating">
        <input wire:model="value" type="text" class="form-control dropdown-toggle" data-bs-toggle="dropdown"
            id="input-dropdown-{{ $table }}-{{ $field }}" onClick="this.select();" placeholder="Type to search..."
            autocomplete="off">
        <label>{{ $label }}</label>
        <ul wire:ignore.self class="dropdown-menu">
            @if(!empty($items))
            @foreach($items as $item)
            <li><a wire:click="click({{ $keyid }},{{ $item->id }},'{{ $item->suchbegriff }}')" class="dropdown-item">{{
                    $item->suchbegriff }}</a></li>
            @endforeach
            @endif
        </ul>
    </div>
</div>

@pushOnce('scripts')
<script>
    console.log('hello close-dropdown');
        window.addEventListener('close-dropdown', event => {
            console.log('close-dropdown');
            $('.dropdown-menu').hide();
        })
</script>
@endPushOnce
