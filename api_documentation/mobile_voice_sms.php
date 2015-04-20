<?php
    include('includes/header.php');
?>

<!-- Content -->
<div>
    <aside class="col-lg-2 col-md-2 col-sm-2 hidden-xs sidebar">
        <div class="sidebar-title-container">
            <h4><i class="glyphicon glyphicon-th-list is-hidden"></i> Mobile Voice & SMS</h4>
        </div>
        <ul>
            <li class="active left-sidebar-item section-1">
              Access Network KPI
            </li>
            <li class="left-sidebar-item section-2">
              Network Utilization
            </li>
            <li class="left-sidebar-item section-3">
              Call Setup Time
            </li>
            <li class="left-sidebar-item section-4">
              Call Success Rate
            </li>
            <li class="left-sidebar-item section-5">
              Drop Call Rate
            </li>
            <li class="left-sidebar-item section-6">
              SMS Sending Time
            </li>
            <li class="left-sidebar-item section-7">
              SMS Sending Success Rate
            </li>
             <li class="left-sidebar-item section-8">
              SMS Delivery Success Rate
            </li>
             <li class="left-sidebar-item section-9">
              SMS Delivery Time Within 30 Seconds
            </li>
        </ul>
    </aside>
     
    <aside class="col-lg-3 col-md-3 col-sm-3 hidden-xs sidebar-container"></aside>

    <section>
        <div id="section-1" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Access Network KPI</h3>

            <p class="section-description">This endpoint retrieves the access network kpi data</p>

            <h5 class="endpoint-title">Endpoint</h5>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/access_network_kpi</p>
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
            "name": "DROP CALL RATE",
            "region": "NLZ",
            "value_2g": 0.313,
            "value_3g": 0.433,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "CALL SETUP FAILURE RATE",
            "region": "NLZ",
            "value_2g": 0.213,
            "value_3g": 0.25,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "SMS FAILURE RATE",
            "region": "NLZ",
            "value_2g": 1.7,
            "value_3g": 0,
            "color_2g": "#66FF33",
            "color_3g": "0\r"
        },
        {
            "name": "SMS FAILURE RATE",
            "region": "NCR",
            "value_2g": 2,
            "value_3g": 0,
            "color_2g": "#66FF33",
            "color_3g": "0\r"
        },
        {
            "name": "DROP CALL RATE",
            "region": "NCR",
            "value_2g": 0.4,
            "value_3g": 0.4,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "CALL SETUP FAILURE RATE",
            "region": "NCR",
            "value_2g": 0.279,
            "value_3g": 0.35,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "SMS FAILURE RATE",
            "region": "SLZ",
            "value_2g": 1.8,
            "value_3g": 0,
            "color_2g": "#66FF33",
            "color_3g": "0\r"
        },
        {
            "name": "CALL SETUP FAILURE RATE",
            "region": "SLZ",
            "value_2g": 0.242,
            "value_3g": 0.375,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "DROP CALL RATE",
            "region": "SLZ",
            "value_2g": 0.575,
            "value_3g": 0.45,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "CALL SETUP FAILURE RATE",
            "region": "VIS",
            "value_2g": 0.289,
            "value_3g": 0.2,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "DROP CALL RATE",
            "region": "VIS",
            "value_2g": 0.456,
            "value_3g": 0.35,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "SMS FAILURE RATE",
            "region": "VIS",
            "value_2g": 1.5,
            "value_3g": 0,
            "color_2g": "#66FF33",
            "color_3g": "0\r"
        },
        {
            "name": "CALL SETUP FAILURE RATE",
            "region": "MIN",
            "value_2g": 0.407,
            "value_3g": 0.467,
            "color_2g": "#66FF33",
            "color_3g": "#66FF33\r"
        },
        {
            "name": "DROP CALL RATE",
            "region": "MIN",
            "value_2g": 0.521,
            "value_3g": 0.567,
            "color_2g": "#66FF33",
            "color_3g": "#FFCC66\r"
        },
        {
            "name": "SMS FAILURE RATE",
            "region": "MIN",
            "value_2g": 1.4,
            "value_3g": 0,
            "color_2g": "#66FF33",
            "color_3g": "0"
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
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/network_utilization/<span class="pill pill-green">core</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/network_utilization/<span class="pill pill-green">access</span></p>
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
            "name": "HLR(FE)",
            "value": "39.6M",
            "percent_util": 73,
            "color": "#66ff33"
        },
        {
            "name": "MSS(VLR)",
            "value": "27.96M",
            "percent_util": 62,
            "color": "#66ff33"
        },
        {
            "name": "MSS(BHCA)",
            "value": "13.24M",
            "percent_util": 58,
            "color": "#66ff33"
        },
        {
            "name": "MSS(BHSMS)",
            "value": "124M",
            "percent_util": 52,
            "color": "#66ff33"
        },
        {
            "name": "MGW(Erl)",
            "value": "0.45M",
            "percent_util": 36,
            "color": "#66ff33"
        },
        {
            "name": "MGW(TCU)",
            "value": "0.42M",
            "percent_util": 52,
            "color": "#66ff33"
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
        </aside>
    </section>

    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 hidden-xs section-separator"></div>

    <section>
        <div id="section-3" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>Call Setup Time</h3>

            <p class="section-description">This endpoint retrieves the call setup time data</p>

            <h5 class="endpoint-title">Endpoint</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: both</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/call_setup_time/<span class="pill pill-green">2g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/call_setup_time/<span class="pill pill-green">3g</span></p>
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

                <div id="response-section-3-both" class="response-title">Response [both]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-both-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 7.73,
            "average_3g": 6.44,
            "immediate_assignment_time": 2,
            "moc_rrc_setup_time": 2,
            "2g_mss_call_setup_time": 5.73,
            "3g_mss_call_setup_time": 4.44
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-3-2g" class="response-title">Response [2G]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-2g-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 7.73,
            "immediate_assignment_time": 2,
            "2g_mss_call_setup_time": 5.73
        }
    ]
}
                    </div>
                </pre>
                </div>

                 <div id="response-section-3-3g" class="response-title">Response [3G]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-3-3g-container" class="response" style="display:none;">
                <pre>
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_3g": 6.44,
            "moc_rrc_setup_time": 2,
            "3g_mss_call_setup_time": 4.44
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
            <h3>Call Success Rate</h3>

            <p class="section-description">This endpoint retrieves the call success rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: both</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/call_success_rate/<span class="pill pill-green">2g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/call_success_rate/<span class="pill pill-green">3g</span></p>
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

                <div id="response-section-4-both" class="response-title">Response [both]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-4-both-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 91.58,
            "average_3g": 94.9,
            "immediate_assignment_failure_rate": 2.81,
            "moc_rrc_setup_failure_rate": 0,
            "2g_mss_success_rate": 94.23,
            "3g_mss_success_rate": 94.9
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-4-2g" class="response-title">Response [2G]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-4-2g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 91.58,
            "immediate_assignment_failure_rate": 2.81,
            "2g_mss_success_rate": 94.23
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-4-3g" class="response-title">Response [3G]<i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-4-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_3g": 94.9,
            "moc_rrc_setup_failure_rate": 0,
            "3g_mss_success_rate": 94.9
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
            <h3>Drop Call Rate</h3>

            <p class="section-description">This endpoint retrieves the drop call rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: both</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/drop_call_rate/<span class="pill pill-green">2g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/drop_call_rate/<span class="pill pill-green">3g</span></p>
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

                <div id="response-section-5-both" class="response-title">Response [both] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-5-both-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 1.27,
            "average_3g": 0.28
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-5-2g" class="response-title">Response [2G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-5-2g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 1.27
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-5-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-5-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_3g": 0.28
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
            <h3>SMS Sending Time</h3>

            <p class="section-description">This endpoint retrieves the SMS sending time data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/sms_sending_time</p>
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

                <div id="response-section-6-both" class="response-title">Response <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-6-both-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average": 3.14,
            "immediate_assignment_or_rrc_setup_time": 2,
            "average_sms_sending_time": 1.14
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
        <div id="section-7" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>SMS Sending Success Rate</h3>

            <p class="section-description">This endpoint retrieves the SMS sending success rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: both</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/sms_sending_success_rate/<span class="pill pill-green">2g</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/sms_sending_success_rate/<span class="pill pill-green">3g</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-7" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-7-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-7-both" class="response-title">Response [both] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-7-both-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 95.04,
            "average_3g": 94.25,
            "immediate_assignment_failure_rate": 2.44,
            "mo_sms_success_rate": 97.41,
            "mo_sms_setup_failure_rate": 3.25
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-7-2g" class="response-title">Response [2G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-7-2g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_2g": 95.04,
            "immediate_assignment_failure_rate": 2.44,
            "mo_sms_success_rate": 97.41,
            "mo_sms_setup_failure_rate": 3.25
        }
    ]
}
                    </div>
                </pre>
                </div>

                <div id="response-section-7-3g" class="response-title">Response [3G] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-7-3g-container" class="response" style="display:none;">
                <pre>    
                    <div class="response-data-container">
{
    "status": 200,
    "result": [
        {
            "average_3g": 94.25
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
        <div id="section-8" class="col-lg-offset-2 col-lg-7 col-md-offset-2 col-md-7 col-sm-offset-2 col-sm-7 col-xs-12 section-container">
            <h3>SMS Delivery Success Rate</h3>

            <p class="section-description">This endpoint retrieves the SMS delivery success rate data</p>

            <h5 class="endpoint-title">Endpoints</h5>
            <p><i class="glyphicon glyphicon-info-sign"></i> default route: both</p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/sms_delivery_success_rate/<span class="pill pill-green">2g_3g_fda</span></p>
            <p class="endpoint-container"><span class="pill">GET</span> https://<span class="pill pill-green">API URL</span>/amalgam/public/api/v1/mobile_voice_sms/sms_delivery_success_rate/<span class="pill pill-green">undelivered</span></p>
        </div>

        <aside class="col-lg-3 col-md-3 col-sm-3 col-xs-12 section-container-sidebar">
            <div class="hidden-xs separator"></div>
            <div class="sample-sidebar">
                <div id="request-section-8" class="request-title">Request <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="request-section-8-container" class="request" style="display:none;">
                    <div class="request-data-container">
                        <center>Authentication Only</center>
                    </div>
                </div>

                <div id="response-section-8-2g-3g-fda" class="response-title">Response [2G/3G FDA] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-8-2g-3g-fda-container" class="response" style="display:none;">
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

                <div id="response-section-8-undelivered" class="response-title">Response [undelivered] <i class="glyphicon glyphicon-chevron-right"></i></div>
                <div id="response-section-8-undelivered-container" class="response" style="display:none;">
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
    var section_7 = $("#section-7").position().top - 50;
    var section_8 = $("#section-8").position().top - 50;

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
    else if(scrollValue >= section_6 && scrollValue < section_7) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-6").addClass("active");
    }
    else if(scrollValue >= section_7 && scrollValue < section_8) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-7").addClass("active");
    }
    else if(scrollValue >= section_8) {
        $(".left-sidebar-item").removeClass("active");
        $(".section-8").addClass("active");
    }
});
</script>