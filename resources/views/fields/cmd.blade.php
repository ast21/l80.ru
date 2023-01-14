@component($typeForm, get_defined_vars())
  <div id="cmd"
       data-controller="cmd"
       data-cmd-mask="{{$mask ?? ''}}"
       data-cmd-command-value=""
  >
    <input {{ $attributes }} data-cmd-target="cmd">

    <div class="mt-2" data-cmd-target="result"></div>
  </div>

@endcomponent
