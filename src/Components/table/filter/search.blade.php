@props([
    'field'  => '',
    'table'  => 'Suchen',
    'oldval' => '',
])

<input type="text" class="form-control" name="{{ $field }}" placeholder="{{ ucfirst($table) }}..."
    value="{{ $oldval ? $oldval : '' }}">
