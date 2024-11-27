<div>
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value=""
            @checked(!request($name))>
        <span class="ml-2">All</span>
    </label>

    @foreach($optionsWithLabels as $label => $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}"
{{--                   check for category--}}
                @checked($option === request($name))

{{--                check for experience--}}
                @checked(strtolower($option) === strtolower(request('experience')))>
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
</div>
