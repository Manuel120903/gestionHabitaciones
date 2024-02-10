<div class="form-group mb-3">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <label class="form-label" for="{{ $identifier }}">{{ $label }}</label>
    <input type="number" name="{{ $identifier }}" id="{{ $identifier }}" @class(['form-control', 'is-invalid' => $errors->has($identifier)])
      value="{{ old("$identifier") ?? $value }}" placeholder="{{ $placeholder }}">
  
    @if ($errors->has($identifier))
      <span class="invalid-feedback">
        {{ $errors->first($identifier) }}
      </span>
    @endif
  </div>
  
  