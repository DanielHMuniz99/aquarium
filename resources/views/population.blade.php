<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">Fish Population</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="border-start border-start-4 border-start-info px-3 mb-3">
                                    <small class="text-medium-emphasis">Micro Fish (até 5cm)</small>
                                    <div class="fs-5 fw-semibold">{{ round($population->getMicroFishCapacity()) }}</div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-6">
                                <div class="border-start border-start-4 border-start-danger px-3 mb-3">
                                    <small class="text-medium-emphasis">Small FIsh (até 10cm)</small>
                                    <div class="fs-5 fw-semibold">{{ round($population->getSmallFishCapacity()) }}</div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="border-start border-start-4 border-start-warning px-3 mb-3">
                                    <small class="text-medium-emphasis">Medium Fish (até 20cm)</small>
                                    <div class="fs-5 fw-semibold">{{ round($population->getMediumFishCapacity()) }}</div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-6">
                                <div class="border-start border-start-4 border-start-success px-3 mb-3">
                                    <small class="text-medium-emphasis">Big Fish (até 25cm)</small>
                                    <div class="fs-5 fw-semibold">{{ round($population->getBigFishCapacity()) }}</div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row--><br>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
