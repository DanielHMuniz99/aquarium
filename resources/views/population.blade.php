<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">Fish Population</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            @foreach($population as $size)
                                <div class="col-3">
                                    <div class="border-start border-start-4 border-start-info px-3 mb-3">
                                        <small class="text-medium-emphasis">{{ trans("messages.{$size->getSize()}_fish") }} ({{ config("global.size.{$size->getSize()}") }}cm)</small>
                                        <div class="fs-5 fw-semibold">{{ $size->getCapacity() }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
