
<div class="col-md-6">
    <div class="tile-box tile-box-alt mrg20B {{ $color }}">
        <div class="tile-header">
            New Visitors
        </div>
        <div class="tile-content-wrapper">
            <i class="glyph-icon {{ $icone }}"></i>
            <div class="tile-content">
                <span></span>
                {{ $nbr['total'] . ' ' . $total }}
            </div>
            <small>
                <i class="glyph-icon icon-caret-up"></i>
                + {{ $nbr['new'] }} {{ $name }}
            </small>
        </div>
        <a href="{{ $url }}" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="{{ $nbr['total'] . ' ' . $total }}">
            Ver Detalles
            <i class="glyph-icon icon-arrow-right"></i>
        </a>
    </div>
</div>