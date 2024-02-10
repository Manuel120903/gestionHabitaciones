<div class="form-group mb-3">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <label class="form-label" for="{{ $identifier }}">{{ $label }}</label>
    <textarea type="text" name="{{ $identifier }}" id="{{ $identifier }}" @class(['form-control', 'is-invalid' => $errors->has($identifier)])
     placeholder="{{ $placeholder }}">{{ old("$identifier") ?? $value }}</textarea>
  
    @if ($errors->has($identifier))
      <span class="invalid-feedback">
        {{ $errors->first($identifier) }}
      </span>
    @endif
  </div>
  