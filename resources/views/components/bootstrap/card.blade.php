<div class="card {{ $class ?? '' }}">
    @isset($img)
    <div class="card-img-top">
        {!! $img !!}
    </div>
    @endisset
    @isset($header)
        <div class="card-header">
            {!! $header !!}
        </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
    @isset($footer)
        <div class="card-footer">
            {!! $footer !!}
        </div>
    @endisset
</div>
