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
        <li class="left-sidebar-item section-4">
          Work Experience
        </li>
        <li class="left-sidebar-item section-5">
          Skills
        </li>
        <li class="left-sidebar-item section-6">
          Job Details
        </li>
        <li class="left-sidebar-item section-7">
          Dependents
        </li>
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
            <div id="request-section-1" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-1-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-1" class="response-title">Response  <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-1-container" class="response" style="display:none;">
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
                    <tr>
                        <td>blood_type</td>
                        <td>Varchar</td>
                        <td>NO</td>
                        <td>Blood Type</td>
                    </tr>
                    <tr>
                        <td>hobbies</td>
                        <td>Text</td>
                        <td>NO</td>
                        <td>Hobbies</td>
                    </tr>
                </tbody>
              </table>
            </div>
        </p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-2" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-2-container" class="request" style="display:none;">
                <div class="request-data-container">
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-2" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-2-container" class="response" style="display:none;">
            <pre>
              <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 1,
            "first_name": "Administrator",
            "middle_name": "Administrator",
            "last_name": "Administrator",
            "nationality": "Filipino",
            "birthdate": "2015-05-10",
            "marital_status": 5,
            "sex": 3,
            "blood_type": "",
            "hobbies": ""
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

            <div id="response-section-3" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-3-container" class="response" style="display:none;">
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
    <div id="section-4" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Work Experience</h3>

        <p class="section-description">This endpoint retrieves the work experience table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get work experience of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/work_experience</p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-4" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-4-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-4" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-4-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 1,
            "company": "hrswift",
            "address": "Eastwood City, Libis",
            "job_title": "Vice President",
            "date_from": "2014-01-01",
            "date_to": "2015-05-01",
            "comment": ""
        },
        {
            "id": 1,
            "company": "hrswift",
            "address": "Eastwood City, Libis",
            "job_title": "CEO",
            "date_from": "2015-01-01",
            "date_to": "2015-05-10",
            "comment": ""
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
    <div id="section-5" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Skills</h3>

        <p class="section-description">This endpoint retrieves the work experience table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get work experience of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/skills</p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-5" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-5-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-5" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-5-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 1,
            "skill": "Sales",
            "years_experience": 5,
            "comment": ""
        },
        {
            "id": 1,
            "skill": "Management",
            "years_experience": 5,
            "comment": ""
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
    <div id="section-6" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Job Details</h3>

        <p class="section-description">This endpoint retrieves the job details table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get work experience of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/job_details</p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-6" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-6-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-6" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-6-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 1,
            "joined_date": "2015-01-01",
            "contract_end_date": "0000-00-00",
            "probation_date": "2015-04-01",
            "permanency_date": "2015-07-01",
            "job_title": "CEO",
            "employment_status": 15,
            "job_specification": "",
            "work_shift": 17,
            "department": 29,
            "comment": "",
            "contract_path": ""
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
    <div id="section-7" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Dependents</h3>

        <p class="section-description">This endpoint retrieves the dependents table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get work experience of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/dependents</p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-7" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-7-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-7" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-7-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 2,
            "name": "John Doe",
            "relationship": 40,
            "birthdate": "1955-01-01"
        }
    ]
}
                </div>
            </pre>
            </div>
        </div>
    </aside>
</section>

<section style="visibility:hidden;">
    <div id="section-8" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
        <h3>Dependents</h3>

        <p class="section-description">This endpoint retrieves the work experience table's data</p>

        <h4 class="endpoint-title">Endpoints</h4>
        <p>REQUEST TYPE: <span class="pill">GET</span></p>
        <span>Get work experience of a specific user:</span>
        <p class="endpoint-container">https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/dependents</p>
    </div>

    <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
        <div class="hidden-xs separator"></div>
        <div class="sample-sidebar">
            <div id="request-section-8" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="request-section-8-container" class="request" style="display:none;">
                <div class="request-data-container" >
                    <center>Required HTTP Headers</center>
                </div>
            </div>

            <div id="response-section-8" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
            <div id="response-section-8-container" class="response" style="display:none;">
            <pre>
                <div class="response-data-container">
{
    "status": 200,
    "message": "Success",
    "result": [
        {
            "id": 2,
            "name": "John Doe",
            "relationship": 40,
            "birthdate": "1955-01-01"
        }
    ]
}
                </div>
            </pre>
            </div>
        </div>
    </aside>
</section>
@stop