<?php
    include('includes/header.php');
?>

<!-- Content -->
<div>
    <aside class="col-lg-2 col-md-2 col-sm-2 hidden-xs sidebar">
        <div class="sidebar-title-container">
            <h4><i class="glyphicon glyphicon-th-list is-hidden"></i> Authentication</h4>
        </div>
    </aside>

    <section>
        <div id="authentication" class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-12 section-container">
            <h3>Authentication</h3>

            <p class="section-description">
                The HRSwift API uses basic authentication with a base 64 encoded username and password.
                HRSwift expects the base 64 encoded login credentials to be included in all API requests to the server in a header that looks like the following:

                <br />
                <p><i class="glyphicon glyphicon-info-sign"></i> <b>Important</b>: You must replace 'token' with your personal base 64 encoded login credentials. Also, please note that the username and password must be separated by a colon before encoding it to base 64.</p>
                
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

                <h5>SHELL</h5>
                <p>curl -X GET -H "Authorization: Basic token" http://<span class="pill pill-green">API URL</span>/HRSwift/public/api/v1/mobile_data/access_network_kpi</p>

                <br />
                <h5>PHP</h5>
                <p>You can build the 'Authorization' header in PHP by doing 'Basic ' + base_64_encode($username . ':' . $password)</p>

                <br />
                <h5>Javascript</h5>
                <p>You can build the 'Authorization' header in javascript by doing 'Basic ' + btoa(username + ':' + password')</p>
                <br />
                <p><b>Sample Script</b></p>
                <p>
                    $.ajax({<br/>
                      &nbsp;&nbsp;url: 'http://<span class="pill pill-green">API URL</span>/HRSwift/public/api/v1/mobile_data/access_network_kpi',<br/>
                      &nbsp;&nbsp;type: 'GET',<br/>
                      &nbsp;&nbsp;beforeSend: function(xhr) {<br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;xhr.setRequestHeader('Authorization', 'Basic ' + token) <br/>
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
</div>
<!-- End Content -->

<?php
    include('includes/footer.php');
?>