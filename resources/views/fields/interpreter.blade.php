@component($typeForm, get_defined_vars())
  <div data-controller="interpreter">
    <textarea {{ $attributes }} data-interpreter-target="code">{{ "<?php\n\n" }}</textarea>
    <button class="btn btn-default mt-3 mb-3 d-block w-100" data-action="click->interpreter#exec">Выполнить</button>

    <label class="form-label mt-3">Output</label>
    <textarea class="form-control" data-interpreter-target="output" rows="10"></textarea>
    <label class="form-label mt-3">Error</label>
    <textarea class="form-control" data-interpreter-target="error" rows="10"></textarea>
  </div>
@endcomponent
