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
              Access Network KPI
            </li>
            <li class="left-sidebar-item section-2">
              Network Utilization
            </li>
            <li class="left-sidebar-item section-3">
              Page Download Time
            </li>
            <li class="left-sidebar-item section-4">
              HTTP Success Rate
            </li>
            <li class="left-sidebar-item section-5">
              Throughput
            </li>
            <li class="left-sidebar-item section-6">
              Top 5 URLs
            </li>
        </ul>
    </aside>
     
    <aside class="col-lg-3 col-md-3 col-sm-3 hidden-xs sidebar-container"></aside>

    <section>
        <div id="section-1" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Access Network KPI</h3>

            <p class="section-description">This endpoint retrieves the access network kpi data</p>

            <h5 class="endpoint-title">Endpoint</h5>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/access_network_kpi</p>
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
 {
    "status": 200,
    "result": [
        {
            "name": "ACCESSIBILITY",
            "region": "NLZ",
            "value_3g": 2.23,
            "value_lte": 1.1,
            "color_3g": "#FF3333",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITYBH",
            "region": "NLZ",
            "value_3g": 0.22,
            "value_lte": 0.97,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITYBH",
            "region": "NLZ",
            "value_3g": 2.85,
            "value_lte": 1.82,
            "color_3g": "#FF3333",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITY",
            "region": "NLZ",
            "value_3g": 0.17,
            "value_lte": 0.72,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITYBH",
            "region": "NCR",
            "value_3g": 0.21,
            "value_lte": 0.88,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITYBH",
            "region": "NCR",
            "value_3g": 1.44,
            "value_lte": 1.2,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITY",
            "region": "NCR",
            "value_3g": 0.16,
            "value_lte": 0.65,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITY",
            "region": "NCR",
            "value_3g": 1.25,
            "value_lte": 1.19,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITYBH",
            "region": "SLZ",
            "value_3g": 1.65,
            "value_lte": 1.2,
            "color_3g": "#FF3333",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITY",
            "region": "SLZ",
            "value_3g": 0.2,
            "value_lte": 0.95,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITY",
            "region": "SLZ",
            "value_3g": 1.43,
            "value_lte": 1.08,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITYBH",
            "region": "SLZ",
            "value_3g": 0.25,
            "value_lte": 1.25,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITY",
            "region": "VIS",
            "value_3g": 0.1,
            "value_lte": 0.58,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITY",
            "region": "VIS",
            "value_3g": 1.3,
            "value_lte": 0.65,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITYBH",
            "region": "VIS",
            "value_3g": 0.1,
            "value_lte": 0.73,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITYBH",
            "region": "VIS",
            "value_3g": 0.93,
            "value_lte": 0.68,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITYBH",
            "region": "MIN",
            "value_3g": 2.27,
            "value_lte": 1.35,
            "color_3g": "#FF3333",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "ACCESSIBILITY",
            "region": "MIN",
            "value_3g": 2.5,
            "value_lte": 1.75,
            "color_3g": "#FF3333",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITY",
            "region": "MIN",
            "value_3g": 0.12,
            "value_lte": 0.68,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
        },
        {
            "name": "RETAINABILITYBH",
            "region": "MIN",
            "value_3g": 0.17,
            "value_lte": 0.88,
            "color_3g": "#66FF33",
            "color_lte": "#66FF33\r"
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

    <section>
        <div id="section-2" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Network Utilization</h3>

            <p class="section-description">This endpoint retrieves the network utilization data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: core</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/network_utilization/<span class="pill pill-green">core</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/network_utilization/<span class="pill pill-green">access</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/network_utilization/<span class="pill pill-green">backend</span></p>
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

                <div id="response-get-section-2-core" class="response-title">Response [core] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-get-section-2-core-container" class="response" style="display:none;">
                <pre>
                  <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "priority": 2,
            "date": "2014-12-28 00:00:00",
            "name": "SAU 2G",
            "value": "3.99M",
            "CAPACITY": 100,
            "percent_util": 3.99,
            "color": "#66FF33\r"
        },
        {
            "priority": 3,
            "date": "2014-12-28 00:00:00",
            "name": "SAU 3G",
            "value": "4.55M",
            "CAPACITY": 100,
            "percent_util": 4.55,
            "color": "#66FF33\r"
        },
        {
            "priority": 4,
            "date": "2014-12-28 00:00:00",
            "name": "SAU LTE",
            "value": ".16M",
            "CAPACITY": 0.5,
            "percent_util": 32.06,
            "color": "#66FF33\r"
        },
        {
            "priority": 5,
            "date": "2014-12-28 00:00:00",
            "name": "PDP 2G",
            "value": "1.1M",
            "CAPACITY": 6,
            "percent_util": 18.3,
            "color": "#66FF33\r"
        },
        {
            "priority": 6,
            "date": "2014-12-28 00:00:00",
            "name": "PDP 3G",
            "value": "1.45M",
            "CAPACITY": 6,
            "percent_util": 24.17,
            "color": "#66FF33\r"
        },
        {
            "priority": 7,
            "date": "2014-12-28 00:00:00",
            "name": "PDP LTE",
            "value": ".16M",
            "CAPACITY": 0.5,
            "percent_util": 32.29,
            "color": "#66FF33\r"
        },
        {
            "priority": 8,
            "date": "2014-12-28 00:00:00",
            "name": "Mbps UL",
            "value": "14.36Gbps",
            "CAPACITY": 100,
            "percent_util": 14.36,
            "color": "#66FF33\r"
        },
        {
            "priority": 9,
            "date": "2014-12-28 00:00:00",
            "name": "Mbps DL",
            "value": "88.33Gbps",
            "CAPACITY": 100,
            "percent_util": 88.33,
            "color": "#FF3333\r"
        }
    ]
}
                  </div>
                </pre>
                </div>

            <div id="response-get-section-2-access" class="response-title">Response [access] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-get-section-2-access-container" class="response" style="display:none;">
                <pre>
                  <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "name": "CE Resource",
            "value": "4289",
            "value2": "3",
            "value3": "0"
        },
        {
            "name": "IUB Resource",
            "value": "4236",
            "value2": "20",
            "value3": "36"
        },
        {
            "name": "PACKET LOSS",
            "value": "3531",
            "value2": "149",
            "value3": "35"
        },
        {
            "name": "HSUPA Users",
            "value": "16866",
            "value2": "7474",
            "value3": "958\r"
        },
        {
            "name": "HSDPA Users",
            "value": "14570",
            "value2": "9770",
            "value3": "3564"
        },
        {
            "name": "TCP",
            "value": "25298",
            "value2": "0",
            "value3": "0"
        },
        {
            "name": "Mean RTWP",
            "value": "23728",
            "value2": "374",
            "value3": "1196"
        }
    ]
}
                  </div>
                </pre>
                </div>

            <div id="response-get-section-2-backend" class="response-title">Response [backend] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-get-section-2-backend-container" class="response" style="display:none;">
                  <div class="response-data-container">
                    <center>Not Available As of The Moment</center>
                  </div>
                </div>
            </div>
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section>
        <div id="section-3" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Page Download Time</h3>

            <p class="section-description">This endpoint retrieves the page download time data</p>

            <h5 class="endpoint-title">Endpoint</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/page_download_time/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/page_download_time/<span class="pill pill-green">lte</span></p>
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

                <div id="response-section-3-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-3g-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "http_procedure_duration": 13.8,
            "color": "#66FF33\r",
            "dns_response_time": 94,
            "tcp_roundtrip_time": 665
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-3-lte" class="response-title">Response [LTE] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-lte-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "http_procedure_duration": 6.9,
            "color": "#66FF33\r",
            "dns_response_time": 66,
            "tcp_roundtrip_time": 601
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

    <section>
        <div id="section-4" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>HTTP Success Rate</h3>

            <p class="section-description">This endpoint retrieves the http success rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/http_success_rate/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/http_success_rate/<span class="pill pill-green">lte</span></p>
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

    <section>
        <div id="section-5" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Throughput</h3>

            <p class="section-description">This endpoint retrieves the throughput data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/throughput/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/throughput/<span class="pill pill-green">lte</span></p>
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

    <section>
        <div id="section-6" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Top 5 URLs</h3>

            <p class="section-description">This endpoint retrieves the data for the top 5 URLs</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: 3g</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/top_5_urls/<span class="pill pill-green">3g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_data/top_5_urls/<span class="pill pill-green">lte</span></p>
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