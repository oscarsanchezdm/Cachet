@if($componentGroups->isNotEmpty() || $ungroupedComponents->isNotEmpty())
<div class="section-components" style="margin-top:0">
    @include('partials.components')
</div>
@endif
