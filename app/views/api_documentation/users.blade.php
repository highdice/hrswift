@extends('layouts.documentation'))

{{-- Web site Title --}}
@section('title')
HRSwift API Documentation
@stop

{{-- Content --}}
@section('content')
<aside class="col-lg-2 col-md-2 col-sm-2 hidden-xs sidebar">
    <div class="sidebar-title-container">
        <h4><i class="glyphicon glyphicon-th-list is-hidden"></i> Users</h4>
    </div>
    <ul>
        <li class="active left-sidebar-item section-1">
          Users
        </li>
        <li class="left-sidebar-item section-2">
         Personal Details
        </li>
        <li class="left-sidebar-item section-3">
          Contact Details
        </li>
        <!--
        <li class="left-sidebar-item section-4">
          HTTP Success Rate
        </li>
        <li class="left-sidebar-item section-5">
          Throughput
        </li>
        <li class="left-sidebar-item section-6">
          Top 5 URLs
        </li>
        -->
    </ul>
</aside>
 
<aside class="col-lg-3 col-md-3 col-sm-3 hidden-xs sidebar-container"></aside>

<section>
    <div id="section-1" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Users</h3>

        <p class="section-description">This endpoint retrieves the user table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get all users:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user</p>
        <span>Get a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span></p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-get-section-1" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-get-section-1-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-get-section-1" class="response-title">Response  <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-get-section-1-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
"status": 200,
"message": "success",
"result": [
    {
        "id": 3,
        "username": "developer",
        "email": "developer@hrswift.com"
    },
    {
        "id": 2,
        "username": "user",
        "email": "user@hrswift.com"
    },
    {
        "id": 1,
        "username": "admin",
        "email": "admin@hrswift.com"
    }
]
}
                    </div>
                </pre>
            </div>
        </div>
    </aside>
</section>


<section>
    <div id="section-2" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Personal Details</h3>

        <p class="section-description">This endpoint retrieves the personal details table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get personal details of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/personal_details</p>
        
        <br />
        
        <p>REQUEST TYPE: <span class="pill">PUT</span></p>
        <span>Update personal details of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/personal_details</p>
    
        <p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                    <th>Parameter</th>
                    <th>Data Type</th>
                    <th>Required</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>first_name</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>First name</td>
                    </tr>
                    <tr>
                        <td>middle_name</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Middle name</td>
                    </tr>
                    <tr>
                        <td>last_name</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>Last name</td>
                    </tr>
                    <tr>
                        <td>nationality</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>Nationality</td>
                    </tr>
                    <tr>
                        <td>birthdate</td>
                        <td>Date</td>
                        <td>YES</td>
                        <td>Birthdate: [Y-m-d] {{ date('Y-m-d'); }}</td>
                    </tr>
                    <tr>
                        <td>marital_status</td>
                        <td>Integer</td>
                        <td>YES</td>
                        <td>Marital status: [5] Single, [6] Married, [7] Widowed</td>
                    </tr>
                    <tr>
                        <td>sex</td>
                        <td>Integer</td>
                        <td>YES</td>
                        <td>Sex: [3] Male, [4] Female</td>
                    </tr>
                </tbody>
              </table>
            </div>
        </p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-get-section-2" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-get-section-2-container" class="request" style="display:none;">
                <div class="request-data-container">
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-get-section-2-core" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-get-section-2-core-container" class="response" style="display:none;">
            <pre>
              <div class="response-data-container">
{
"status": 200,
"message": "success",
"result": [
    {
        "id": 1,
        "first_name": "Administrator",
        "middle_name": "Administrator",
        "last_name": "Administrator",
        "nationality": "Filipino",
        "birthdate": "2015-04-25",
        "marital_status": Single,
        "sex": Male
    }
]
}
              </div>
            </pre>
            </div>
        </div>
    </aside>
</section>



<section>
    <div id="section-3" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Contact Details</h3>

        <p class="section-description">This endpoint retrieves the contact details table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get personal details of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/contact_details</p>
        
        <br />

        <p>REQUEST TYPE: <span class="pill">PUT</span></p>
        <span>Update contact details of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/contact_details</p>
    
        <p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                    <th>Parameter</th>
                    <th>Data Type</th>
                    <th>Required</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>address</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td>municipality</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>Municipality</td>
                    </tr>
                    <tr>
                        <td>city</td>
                        <td>Varchar</td>
                        <td>YES</td>
                        <td>City</td>
                    </tr>
                    <tr>
                        <td>zip</td>
                        <td>Integer</td>
                        <td>YES</td>
                        <td>ZIP code</td>
                    </tr>
                    <tr>
                        <td>country</td>
                        <td>Integer</td>
                        <td>YES</td>
                        <td>Country: [153] Philippines</td>
                    </tr>
                    <tr>
                        <td>home_telephone</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Home telephone number</td>
                    </tr>
                    <tr>
                        <td>work_telephone</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Work telephone number</td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Mobile number</td>
                    </tr>
                    <tr>
                        <td>personal_email</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Personal email address</td>
                    </tr>
                </tbody>
              </table>
            </div>
        </p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-3" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-3-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-3-3g" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-3-3g-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
"status": 200,
"message": "success",
"result": [
    {
        "id": 1,
        "address": "Eastwood",
        "municipality": "Libis",
        "city": "Quezon City",
        "zip": 1110,
        "country": Philippines,
        "home_telephone": "9100000",
        "work_telephone": "9100000",
        "mobile": "09991231234",
        "personal_email": "admin@gmail.com"
    }
]
}
                </div>
            </pre>
            </div>
        </div>
    </aside>
</section>


<section>
    <div id="section-4" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container" style="height: 500px;">

    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        
    </aside>
</section>


<section class="is-hidden">
    <div id="section-5" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">

    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        
    </aside>
</section>


<section class="is-hidden">
    <div id="section-6" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        
    </aside>
</section>

@stop