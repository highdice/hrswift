<?php
    include('includes/header.php');
?>

<!-- Content -->
<div>
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

            <p class="section-description">This endpoint retrieves the user table data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <span>Get all users:</span>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/user</p>
            <span>Get a specific user:</span>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-get-section-1" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-get-section-1-container" class="request" style="display:none;">
                    <div class="request-data-container" >
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-get-section-1" class="response-title">Response  <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-get-section-1-container" class="response" style="display:none;">
                    <pre>
                        <div class="response-data-container">
                            <!-- -->
                        </div>
                    </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section>
        <div id="section-2" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Personal Details</h3>

            <p class="section-description">This endpoint retrieves the personal details data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <span>Get personal details of a specific user:</span>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/personal_details</p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-get-section-2" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-get-section-2-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-get-section-2-core" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-get-section-2-core-container" class="response" style="display:none;">
                <pre>
                  <div class="response-data-container">
                        <!-- -->
                  </div>
                </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section>
        <div id="section-3" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Contact Details</h3>

            <p class="section-description">This endpoint retrieves the contact details data</p>

            <h5 class="endpoint-title">Endpoint</h5>
            <span>Get personal details of a specific user:</span>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/user/<span class="pill pill-green">USER ID</span>/contact_details</p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-3" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-3-container" class="request" style="display:none;">
                    <div class="request-data-container" >
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-3-3g" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-3g-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">

                    </div>
                </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section class="is-hidden">
        <div id="section-4" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>HTTP Success Rate</h3>

            <p class="section-description">This endpoint retrieves the http success rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/http_success_rate/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/http_success_rate/<span class="pill pill-green">lte</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-4" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-4-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-4-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-4-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "prepaid_http_success_rate": 43.8,
            "prepaid_dns_success_rate": 96.3,
            "postpaid_http_success_rate": 87.1,
            "postpaid_dns_success_rate": 95.2
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-4-lte" class="response-title">Response [LTE] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-4-lte-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "prepaid_http_success_rate": 75.1,
            "prepaid_dns_success_rate": 94.2,
            "postpaid_http_success_rate": 87,
            "postpaid_dns_success_rate": 95.6
        }
    ]
}
                    </div>
                </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section class="is-hidden">
        <div id="section-5" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Throughput</h3>

            <p class="section-description">This endpoint retrieves the throughput data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/throughput/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/throughput/<span class="pill pill-green">lte</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-5" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-5-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-5-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-5-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "upload": 259,
            "download": 1.1
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-5-lte" class="response-title">Response [LTE] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-5-lte-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "upload": 2.9,
            "download": 3.4
        }
    ]
}
                    </div>
                </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section class="is-hidden">
        <div id="section-6" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Top 5 URLs</h3>

            <p class="section-description">This endpoint retrieves the data for the top 5 URLs</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/top_5_urls/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/api/v1/mobile_data/top_5_urls/<span class="pill pill-green">lte</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-6" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-6-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-6-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-6-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "domain": "FACEBOOK",
            "seconds": 15.35
        },
        {
            "domain": "GOOGLE",
            "seconds": 10.81
        },
        {
            "domain": "MEDIAN",
            "seconds": 14.22
        },
        {
            "domain": "TWITTER",
            "seconds": 14.63
        },
        {
            "domain": "YAHOO",
            "seconds": 22.55
        },
        {
            "domain": "YOUTUBE",
            "seconds": 15.69
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-6-lte" class="response-title">Response [LTE] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-6-lte-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "domain": "FACEBOOK",
            "seconds": 13
        },
        {
            "domain": "GOOGLE",
            "seconds": 10.22
        },
        {
            "domain": "MEDIAN",
            "seconds": 8.6
        },
        {
            "domain": "TWITTER",
            "seconds": 11.03
        },
        {
            "domain": "YAHOO",
            "seconds": 16.2
        },
        {
            "domain": "YOUTUBE",
            "seconds": 14.25
        }
    ]
}
                    </div>
                </pre>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs" style="height: 500px;"></div>
</div>
<!-- End Content -->

<?php
    include('includes/footer.php');
?>

<script>
$(window).scroll(function () { 
    var scrollValue = $(window).scrollTop();
    var section_1 = $("#section-1").position().top - 50;
    var section_2 = $("#section-2").position().top - 50;
    var section_3 = $("#section-3").position().top - 50;
    var section_4 = $("#section-4").position().top - 50;
    var section_5 = $("#section-5").position().top - 50;
    var section_6 = $("#section-6").position().top - 50;

    if(scrollValue == 0) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-1").addClass("active");
    }
    else if(scrollValue >= section_2 && scrollValue < section_3) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-2").addClass("active");
    }
    else if(scrollValue >= section_3 && scrollValue < section_4) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-3").addClass("active");
    }
    else if(scrollValue >= section_4 && scrollValue < section_5) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-4").addClass("active");
    }
    else if(scrollValue >= section_5 && scrollValue < section_6) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-5").addClass("active");
    }
    else if(scrollValue >= section_6) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-6").addClass("active");
    }
});
</script>