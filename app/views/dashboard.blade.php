@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
Dashboard
@stop

{{-- Content --}}
@section('content')
<h4>Dashboard</h4>

<div class="clearfix"></div>

<div class="well">
    <p>Quick Launch</p>
    
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-plus crud-add-icon" title="Create" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
</div>

<div class="clearfix"></div>

<div id="dashboard-line-chart" style="min-width:320px; height: 400px; margin: 0px auto 25px auto;"></div>

<div class="clearfix"></div>

<div class="well">
    <p>Timesheet</p>

    <p id="labels-months-output">Please select the date range.</p>

    <div class="slider"></div>
</div>

<div class="clearfix"></div>

<div class="well col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <p>News</p>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
        <ul class="list-container no-padding">
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button> News One</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button> News Two</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button> News Three</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button> News Four</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button> News Five</li>
        </ul>
    </div>

    <div class="clearfix"></div>
</div>

<div class="well col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <p>Downloadables</p>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
        <ul class="list-container no-padding">
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-download crud-download-icon" title="Download" data-toggle="tooltip" data-placement="top"></i></button> Downloadable One</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-download crud-download-icon" title="Download" data-toggle="tooltip" data-placement="top"></i></button> Downloadable Two</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-download crud-download-icon" title="Download" data-toggle="tooltip" data-placement="top"></i></button> Downloadable Three</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-download crud-download-icon" title="Download" data-toggle="tooltip" data-placement="top"></i></button> Downloadable Four</li>
            <li><button class="button-xs button-crud"><i class="glyphicon glyphicon-download crud-download-icon" title="Download" data-toggle="tooltip" data-placement="top"></i></button> Downloadable Five</li>
        </ul>
    </div>

    <div class="clearfix"></div>
</div>

<div class="clearfix"></div>

<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs crud-container no-padding">
    <button class="button-xs button-crud is-hidden"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-plus crud-add-icon" title="Create" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud is-hidden"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
</div>

<div class="col-xs-5 hidden-lg hidden-md hidden-sm crud-container no-padding">
    <button class="button-xs button-crud is-hidden"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-plus crud-add-icon" title="Create" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud is-hidden"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
</div>

<div class="hidden-lg hidden-md hidden-sm col-xs-7 pagination-container no-padding">
    <nav>
      <ul class="pagination pagination-sm is-right">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-left pagination-icon"></i></span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-right pagination-icon"></i></span></a></li>
      </ul>
    </nav>
</div>

<div class="clearfix"></div>

<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 form-group input-icon table-search-container no-padding">
    <input type="text" class="form-control"></input>
    <i class="glyphicon glyphicon-search" title="Search" data-toggle="tooltip" data-placement="top"></i>
</div>

<div class="col-lg-8 col-md-8 col-sm-7 hidden-xs pagination-container no-padding">
    <nav>
      <ul class="pagination pagination-sm is-right">
        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-left pagination-icon"></i></span></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-right pagination-icon"></i></span></a></li>
      </ul>
    </nav>
</div>

<div class="clearfix"></div>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <th>{{ Form::checkbox('rememberMe', 'rememberMe') }}</th>
            <th class="th-id">ID <i class="glyphicon glyphicon-chevron-up"></i></th>
            <th>Name <i class="glyphicon glyphicon-chevron-up"></i></th>
            <th>Position <i class="glyphicon glyphicon-chevron-up"></i></th>
            <th>Sex <i class="glyphicon glyphicon-chevron-up"></i></th>
            <th>Status <i class="glyphicon glyphicon-chevron-up"></i></th>
            <th class="th-options">Options</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ Form::checkbox('rememberMe', 'rememberMe') }}</td>
                <td>1</td>
                <td>Name</td>
                <td>Position</td>
                <td>Male</td>
                <td>Status</td>
                <td>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
                </td>
            </tr>
            <tr>   
                <td>{{ Form::checkbox('rememberMe', 'rememberMe') }}</td>
                <td>2</td>
                <td>Name</td>
                <td>Position</td>
                <td>Female</td>
                <td>Status</td>
                <td>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
                </td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('rememberMe', 'rememberMe') }}</td>
                <td>3</td>
                <td>Name</td>
                <td>Position</td>
                <td>Female</td>
                <td>Status</td>
                <td>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
                </td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('rememberMe', 'rememberMe') }}</td>
                <td>4</td>
                <td>Name</td>
                <td>Position</td>
                <td>Male</td>
                <td>Status</td>
                <td>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
                </td>
            </tr>
            <tr>
                <td>{{ Form::checkbox('rememberMe', 'rememberMe') }}</td>
                <td>5</td>
                <td>Name</td>
                <td>Position</td>
                <td>Male</td>
                <td>Status</td>
                <td>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-trash crud-delete-icon" title="Delete" data-toggle="tooltip" data-placement="top"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<nav>
  <ul class="pagination pagination-sm is-right">
    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-left pagination-icon"></i></span></a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="glyphicon glyphicon-chevron-right pagination-icon"></i></span></a></li>
  </ul>
</nav>

<div class="clearfix"></div>

<div class="well" style="">
    <p>Organizational Chart</p>

    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs crud-container no-padding">
        <button class="button-xs button-crud"><i class="glyphicon glyphicon-print crud-print-icon" title="Print" data-toggle="tooltip" data-placement="top"></i></button>
        <button class="button-xs button-crud"><i class="glyphicon glyphicon-pencil crud-edit-icon" title="Update" data-toggle="tooltip" data-placement="top"></i></button>
    </div>

    <div class="clearfix"></div>
    
    <center>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organizational-chart-level">
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>CEO</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organizational-chart-level">
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Department Head</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Department Head</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organizational-chart-level">
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Supervisor</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Supervisor</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Supervisor</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 organizational-chart-level">
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Employee</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Employee</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Employee</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
        <div class="organizational-chart-level-inner-container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <img src="{{ asset('images/profile_picture.png') }}" class="img-responsive">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>John Doe</p>
                <p>Employee</p>
                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                <p>
                    <button class="button-xs button-crud"><i class="glyphicon glyphicon-eye-open crud-view-icon" title="View Profile" data-toggle="tooltip" data-placement="top"></i></button>
                </p>
            </div>
        </div>
    </div>

    </center>
</div>
@stop