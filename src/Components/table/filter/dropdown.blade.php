@props(['field', 'table', 'oldval'])

@php
    if (!isset($oldval)) {
        $oldval = '-';
    }
    $itemFilterField = $field;
    $itemsArrayField = config($table . '.' . $itemFilterField); //dd($itemsArrayField);
    if ($itemsArrayField) {
        $disabled = '';
    } else {
        $disabled = 'disabled';
        $itemsArrayField = ['key' => 'val'];
    }
@endphp
<select class="form-select" id ="{{ $itemFilterField }}" name ="{{ $itemFilterField }}" {{ $disabled }}>
    <option value="">{{ ucfirst($itemFilterField) }}:</option>
    @foreach ($itemsArrayField as $key => $val)
        @php
            if (is_array($val)) {
                if (isset($val['txt'])) {
                    $val = $val['txt'];
                } else {
                    continue;
                }
            }
        @endphp
        <option value="{{ $key }}" @if ($oldval == $key) selected @endif>
            {{ Str::limit($val, 15) }}
        </option>
    @endforeach
</select>
