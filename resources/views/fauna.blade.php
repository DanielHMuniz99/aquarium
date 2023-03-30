<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">Suggested fauna</div>
            <div class="card-body">
                <div class="row">
                    <div class="tab-content rounded-bottom">
                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1154">
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" onclick="tab('acid-water')" id="acid-water" data-water="acid-water" data-toggle="tab" data-target="#acid-water" type="button" role="tab" aria-controls="acid-water" aria-selected="false" tabindex="-1">{{ trans('messages.acid_water') }}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" onclick="tab('alkaline-water')" id="alkaline-water-tab" data-water="alkaline-water" data-toggle="tab" data-target="#alkaline-water" type="button" role="tab" aria-controls="alkaline-water" aria-selected="false" tabindex="-1">{{ trans('messages.alkaline_water') }}</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" onclick="tab('saltwater')" id="saltwater-tab" data-water="saltwater" data-toggle="tab" data-target="#saltwater" type="button" role="tab" aria-controls="saltwater" aria-selected="true">{{ trans('messages.saltwater') }}</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>