<select
    class="control"
    id="{{ $fieldName }}"
    name="{{ $fieldName }}[]"
    v-validate="'{{ $validations }}'"
    data-vv-as="&quot;{{ trans($field['title']) }}&quot;"
    multiple
>
    @php($selectedOption = core()->getConfigData($name) ?? '')

    @if (isset($field['repository']))
        @foreach ($value as $key => $option)

            <option value="{{ $key }}" {{ in_array($key, explode(',', $selectedOption)) ? 'selected' : ''}}>
                {{ trans($value[$key]) }}
            </option>

        @endforeach
    @else
        @foreach ($field['options'] as $option)
            <?php
                if (! isset($option['value'])) {
                    $value = null;
                } else {
                    $value = $option['value'];

                    if (! $value) {
                        $value = 0;
                    }
                }
            ?>

            <option value="{{ $value }}" {{ in_array($option['value'], explode(',', $selectedOption)) ? 'selected' : ''}}>
                {{ trans($option['title']) }}
            </option>
        @endforeach
    @endif

</select>