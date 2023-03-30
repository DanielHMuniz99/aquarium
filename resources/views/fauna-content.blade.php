Total: {{ $fauna->getTotal() }}

@foreach($fauna->getFish() as $fish)
    <div class="progress-group">
        <div class="progress-group-header">
            <div>{{ $fish["shoal_min"] }} {{ $fish["name"] }} ({{ $fish["size_avg"] }}cm)</div>
            <div class="ms-auto fw-semibold">{{ round(($fish['shoal_min'] / 21) * 100) }}%</div>
        </div>
        <div class="progress-group-bars">
            <div class="progress progress-thin">
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ round(($fish['shoal_min'] / 21) * 100) }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
@endforeach