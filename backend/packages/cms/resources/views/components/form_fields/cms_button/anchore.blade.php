<a x-data="{
    name: '{{ $name }}',
    label: '{{ $label }}',
    icone: '{{ $icone }}',
    readonly: {{ $readonly ? 'true' : 'false' }},
    style: {{ $style }}, 
    getButtonClass() {
      const styles = [
        'cms-btn-primary', 
        'cms-btn-secondary', 
        'cms-btn-background', 
        'cms-btn-outline'
      ];
      return styles[this.style] || styles[0];
    }
  }"
  :name="name"
  :class="['cms-btn', readonly ? 'cms-btn-readonly' : getButtonClass()]"
  href="{{ route($route) }}">
  <i :class="icone"></i>
  <span x-text="label"></span>
</a>