@extends('master')

@section('content')
    <div class="container-lg">
        <!-- /.row-->
        <div class="card mb-4">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="number" id="length" class="form-control" placeholder="{{ trans('messages.length_aquarium_centimeters') }}">
                        </div>
                        <div class="col">
                            <input type="number" id="height" class="form-control" placeholder="{{ trans('messages.height_aquarium_centimeters') }}">
                        </div>
                        <div class="col">
                            <input type="number" id="width" class="form-control" placeholder="{{ trans('messages.width_aquarium_centimeters') }}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="calculate()" class="btn btn-primary float-right">{{ trans('messages.calculate') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold"><b id="capacity">0</b>
                                <span class="fs-6 fw-normal">{{ trans('messages.liters') }}</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <i class="fa fa-tint" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="ct mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-danger">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold"><b id="watts">0</b>
                                <span class="fs-6 fw-normal">{{ trans('messages.watts') }}</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <i class="fa fa-fire" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="ct mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold"><b id="filtering">0</b>
                                <span class="fs-6 fw-normal">{{ trans('messages.liters_hour') }}</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="ct mt-3" style="height:70px;">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4 text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">
                                0
                                <span class="fs-6 fw-normal">{{ trans('messages.volume') }}</span>
                            </div>
                        </div>
                        <div class="dropdown">
                        </div>
                    </div>
                    <div class="ct mt-3 mx-3" style="height:70px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="population"></div>

        <div class="fauna"></div>
    </div>
@stop