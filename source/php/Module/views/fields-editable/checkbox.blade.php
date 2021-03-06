{{-- Radio field --}}
<div class="mod-form-field">
    <p><b><label for="{{ $module_id }}-{{ $field['name'] }}">
        {{ $field['label'] }}{!! $field['required'] ? '<span class="text-danger">*</span>' : '' !!}
    </label></b></p>
</div>
<div class="mod-form-field form-group checkbox-group">
    <ul style="list-style-type:none">
        <input type="hidden" name="mod-form[{{ $field['name'] }}][]">

        @foreach ($field['values'] as $value)
            <li>
                <label class="checkbox">
                    <input type="checkbox" class="{{ $field['required'] ? 'required' : '' }}" name="mod-form[{{ $field['name'] }}][]" value="{{ $value['value'] }}" {{ is_array($field['value']) && in_array($value['value'], $field['value']) ? 'checked' : '' }}> {{ $value['value'] }}
                </label>
            </li>
        @endforeach
    </ul>
</div>