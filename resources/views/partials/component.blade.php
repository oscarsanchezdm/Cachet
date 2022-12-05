<?php
        $el = "<li class=\"list-group-item status-$component->status";
        foreach ($component->tags as $tag) {
                $el = $el . ' ' . $tag;
        }
        $el = $el . "\">";
        echo $el;
?>

    {!! $component->name !!}
    <?php
      foreach ($component->tags as $tag) {
        echo "&nbsp <span class=\"label label-default disabled\" style=\"padding-left=10px\">$tag</span>";
      }
    ?>
      <div class="pull-right">
        <small class="text-component-{{ $component->status }} {{ $component->status_color }}" data-toggle="tooltip">{{ $component->human_status }}</small>
    </div>
</li>