@props([
    'field' => '',
    'table' => '',
    'oldval' => '',
    'options' => [],
    'disabled' => '',
])

@php
    // dump(is_array($options));
    // dd($field, $options, $table);
    if ($options && is_array($options)) {
        // dd($field, $options);
        // if (!$options[0]->$field) {
        //     // $disabled = 'disabled';
        //     // $options = ['' => 'null'];
        //     $options[0]->$field = 'Null';
        // }
    } elseif ($table) {
        dd($field, $options, $table);
        $options = config("$table.$field");
        if (!$options) {
            $disabled = 'disabled';
            $options = ['key' => 'val'];
        } else {
            // dd($field, $options, $table);
        }
    } else {
        $disabled = 'disabled';
    }
@endphp

<select class="form-select" name ="{{ $field }}" {{ $disabled }}>
    <option value="">{{ ucfirst($field) }}:</option>
    @if (!$disabled)
        @foreach ($options as $key => $val)
            @php
                // dump($field, $options, $key, $val, $table, '---');
                // $cnt = ' ';
                // $txt = '-';
                // if (is_array($val)) {
                //     if (isset($val['txt'])) {
                //         $txt = $val['txt'];
                //     } else {
                //         continue;
                //     }
                // } else {
                //     if (isset($val->count)) {
                //         // dd($field, $options, $key, $val, $table);
                //         $cnt = "({$val->count})";
                //     }
                //     if (isset($val->$field)) {
                //         // dd($field, $options, $key, $val, $table);
                //         $key = $val->$field;
                //         $txt = config("$table.$field." . $val->$field . '.txt', $val->$field);
                //     }
                //     if (is_array($val)) {
                //         dd($field, $options, $key, $val, $table);
                //         $txt = config("$table.$field.txt");
                //     }
                // }
            @endphp
            <option value="{{ $key }}" @if ($oldval == $key) selected @endif>
                {{ $val }}
            </option>
        @endforeach
    @endif
</select>
