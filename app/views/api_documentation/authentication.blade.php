@extends('layouts.documentation'))

{{-- Web site Title --}}
@section('title')
HRSwift API Documentation
@stop

{{-- Content --}}
@section('content')
<aside class="col-lg-2 col-md-2 col-sm-2 hidden-xs sidebar">
    <div class="sidebar-title-container">
        <h4><i class="glyphicon glyphicon-th-list is-hidden"></i> Authentication</h4>
    </div>
</aside>

<section>
    <div id="authentication" class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-12 section-container">
        <h3>Authentication</h3>

        <br />
        <h5>API URLs:</h5>
        <p>STAGING: http://hrswift.com/hrswift</p>
        <p>PRODUCTION: http://hrswift.com</p>
        <br />

        <p class="section-description">
            To use HRSwift's API, you must authenticate first by calling 'http://<span class="pill pill-green">API URL</span>/api/v1/login'.
            HRSwift expects a base 64 encoded login credential to be included in an http header that looks like the following:

            <br />

            <p><i class="glyphicon glyphicon-info-sign"></i> <b>Important</b>: Please note that the username and password must be separated by a colon before encoding it to base 64.</p>

            <p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                        <th>Format</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Authorization: [encodeBase64 ("username:password")]</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </p>

            If successful, HRSwift will return the following response:

            <br /><br />

            <pre>
            {
                "status": 200,
                "message": "Success",
                "result": {
                    "user_id": 1
                }
            }
            </pre>

            After retrieving the user ID, it is now time to build your signature. You can do this by using HMAC SHA256 hashing. 
            Included inside the hash will be your concatenated username and user ID. You will also have to use the API key given to you for generating the HMAC variant.
            Please refer to the following PHP example:

            <br /><br />

            <h5>PHP</h5>
            <p>You can build the signature in PHP by using hash_hmac("sha256", $username.$user_id, $apikey)</p>

            <br />

            Lastly, please note that all API requests aside from "login" will require X-Public and X-Hash headers to be included in every API call. 
            The X-Public header should include your user ID while the X-Hash header should include your signature. Following are few examples:

            <p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                        <th>Format</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>X-Public: [encodeBase64 ("user ID")]</td>
                        </tr>
                        <tr>
                            <td>X-Hash: [signature]</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </p>

            <h5>SHELL</h5>
            <p>curl -X GET -H "X-Public: user_id" -H "X-Hash: signature" http://<span class="pill pill-green">API URL</span>/api/v1/user</p>

            <br />
            <h5>Javascript</h5>
            <p>
                $.ajax({<br/>
                  &nbsp;&nbsp;url: 'http://<span class="pill pill-green">API URL</span>/api/v1/user',<br/>
                  &nbsp;&nbsp;type: 'GET',<br/>
                  &nbsp;&nbsp;beforeSend: function(xhr) {<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;xhr.setRequestHeader('X-Public', user_id) <br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;xhr.setRequestHeader('X-Hash', signature) <br/>
                  &nbsp;&nbsp;},<br/>
                  &nbsp;&nbsp;success: function(data) {<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;console.log(data);<br/>
                  &nbsp;&nbsp;},<br/>
                  &nbsp;&nbsp;error: function(data) {<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;console.log(data);<br/>
                  &nbsp;&nbsp;}<br/>
                });<br/>
            </p> 
            
        </p>
    </div>
</section>

<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs" style="height: 500px;"></div>
@stop