@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-body text-center dash-widget dash-widget-left">
                <div class="dash-widget-vertical">
                    <div class="rorate">PRODUCTS</div>
                </div>
                <div class="pad-ver mar-top text-main">
                    <i class="demo-pli-data-settings icon-4x"></i>
                </div>
                <br>
                <p class="text-lg text-main">Total published products: <span class="text-bold">1000</span></p>
                <p class="text-lg text-main">Total seller's products: <span class="text-bold">1000</span></p>
                <p class="text-lg text-main">Total admin's products: <span class="text-bold">1000</span></p>
                <br>
                <a href="" class="btn btn-primary mar-top">Manage Products <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-normal text-main">Total product category</p>
                        <p class="text-semibold text-3x text-main">52</p>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Create Category</a>
                    </div>
                </div>
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-normal text-main">Total product sub sub category</p>
                        <p class="text-semibold text-3x text-main">52</p>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Create Sub Sub Category</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-normal text-main">Total product sub category</p>
                        <p class="text-semibold text-3x text-main">52</p>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Create Sub Category</a>
                    </div>
                </div>
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-normal text-main">Total product brand</p>
                        <p class="text-semibold text-3x text-main">52</p>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Create Brand</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body text-center dash-widget dash-widget-left">
                <div class="dash-widget-vertical">
                    <div class="rorate">SELLERS</div>
                </div>
                <br>
                <p class="text-normal text-main">Total sellers</p>
                <p class="text-semibold text-3x text-main">1000</p>
                <br>
                <a href="" class="btn-link">Manage Sellers <i class="fa fa-long-arrow-right"></i></a>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body text-center dash-widget">
                <br>
                <p class="text-normal text-main">Total approved sellers</p>
                <p class="text-semibold text-3x text-main">500</p>
                <br>
                <a href="" class="btn-link">Manage Sellers <i class="fa fa-long-arrow-right"></i></a>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body text-center dash-widget">
                <br>
                <p class="text-normal text-main">Total pending sellers</p>
                <p class="text-semibold text-3x text-main">500</p>
                <br>
                <a href="" class="btn-link">Manage Sellers <i class="fa fa-long-arrow-right"></i></a>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel">    
            <!--Panel heading-->
            <div class="panel-heading">
                <h3 class="panel-title">Category wise product sale</h3>
            </div>
            
            <!--Panel body-->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped mar-no">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Sale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel">    
            <!--Panel heading-->
            <div class="panel-heading">
                <h3 class="panel-title">Category wise product stock</h3>
            </div>
            
            <!--Panel body-->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped mar-no">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn-link">Automobile</a></td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-body text-center dash-widget pad-no">
                <div class="pad-ver mar-top text-main">
                    <i class="demo-pli-data-settings icon-4x"></i>
                </div>
                <br>
                <p class="text-3x text-main bg-primary pad-ver">Frontend <strong>Setting</strong></p>
                <br>
                <br>
                <a href="" class="btn-link mar-ver">Manage Frontend setting <i class="fa fa-long-arrow-right"></i></a>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-semibold text-lg text-main mar-ver">
                            Home page <br>
                            setting
                        </p>
                        <br>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
                    </div>
                </div>
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-semibold text-lg text-main mar-ver">
                            Policy page <br>
                            setting
                        </p>
                        <br>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-semibold text-lg text-main mar-ver">
                            General <br>
                            setting
                        </p>
                        <br>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
                    </div>
                </div>
                <div class="panel">
                    <div class="pad-top text-center dash-widget">
                        <p class="text-semibold text-lg text-main mar-ver">
                            Useful link <br>
                            setting
                        </p>
                        <br>
                        <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-row">
    <div class="flex-col-xl flex-col-lg-6 flex-col-12">
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Activation <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    SMTP <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
    </div>
    <div class="flex-col-xl flex-col-lg-6 flex-col-12">
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Payment method <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Social media <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
    </div>
    <div class="flex-col-xl flex-col-lg-12 flex-col-12">
        <div class="panel">
            <div class="panel-body text-center dash-widget bg-primary">
                <br>
                <br>
                <i class="demo-pli-gear icon-5x"></i>
                <br>
                <br>
                <br>
                <br>
                <p class="text-semibold text-2x text-light mar-ver">
                    Business <br>
                    setting
                </p>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="flex-col-xl flex-col-lg-6 flex-col-12">
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Currency <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no ">Click Here</a>
            </div>
        </div>
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Seller verification <br>
                    form setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
    </div>
    <div class="flex-col-xl flex-col-lg-6 flex-col-12">
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Language <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block top-border-radius-no">Click Here</a>
            </div>
        </div>
        <div class="panel">
            <div class="pad-top text-center dash-widget">
                <p class="text-semibold text-lg text-main mar-ver">
                    Seller commission <br>
                    setting
                </p>
                <br>
                <a href="" class="btn btn-primary mar-top btn-block">Click Here</a>
            </div>
        </div>
    </div>
</div>

@endsection
