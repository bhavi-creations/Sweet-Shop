<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sweet-Shop</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom styles for this template-->
    <linl href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
            .table-container {
                display: none;
            }

            .table-container.active {
                display: block;
            }
        </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column   bg-white">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'navbar.php';
                ?>
                <!-- End of Topbar -->

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12   col-lg-12 dashBox">

                                <div class="col-md-3 col-lg-3  dash-box1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/b1.png" alt="" class="b1">
                                        </div>
                                        <div class="col-md-8">
                                            <img src="img/bg.png" alt="" class="bgg">

                                        </div>
                                        <div class="col-md-12">
                                            <h6 class="Total12">Total Staff</h6>
                                            <h2 class="100total">100</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3  dash-box2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/b2.png" alt="" class="b2">
                                        </div>
                                        <div class="col-md-8">
                                            <img src="img/bg.png" alt="" class="bgg">

                                        </div>
                                        <div class="col-md-12">
                                            <h6 class="Total12">Total Branches</h6>
                                            <h2 class="100total">04+</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3  dash-box3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/b3.png" alt="" class="b3">
                                        </div>
                                        <div class="col-md-8">
                                            <img src="img/bg.png" alt="" class="bgg">

                                        </div>
                                        <div class="col-md-12">
                                            <h6 class="Total12">Total Billings</h6>
                                            <h2 class="100total">100+</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3  dash-box4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/b4.png" alt="" class="b2">
                                        </div>
                                        <div class="col-md-8">
                                            <img src="img/bg.png" alt="" class="bgg">

                                        </div>
                                        <div class="col-md-12">
                                            <h6 class="Total12">No of Items</h6>
                                            <h2 class="100total">50+</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12   col-lg-12 ul_border">
                                <h6 class="staff_dtls pt-4">Shop Sale </h6>

                                <img src="img/g1.png" alt="" class="graph1 img-fluid">
                                <img src="img/g2.png" alt="" class="graph">
                            </div>

                            <div class="col-md-12   col-lg-12 ul_border">


                                <div id="addReportTable" class="table-container  ">

                                    <div class="container">
                                        <div class="row d-flex flex-row justify-content-between pt-4 pb-3">
                                            <div class="">
                                                <h6 class="staff_dtls">Add Branch </h6>
                                            </div>

                                        </div>
                                    </div>


                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">




                                                <div class="col-md-6 mt-5">
                                                    <label class="control-label mb-2 field_txt"> Upload Image</label>
                                                    <input type="file" class="form-control field_input_bg" name="address">

                                                </div>
                                                <div class="col-md-6  mt-5">
                                                    <label class="control-label mb-2 field_txt">Incharge Name</label>
                                                    <input type="text" class="form-control field_input_bg" name="age">
                                                </div>

                                                <div class="col-md-6  mt-5">
                                                    <label class="control-label mb-2 field_txt">Brance Area</label>
                                                    <input type="number" class="form-control field_input_bg" name="phone">


                                                </div>
                                                <div class="col-md-6 mt-5">
                                                    <label class="control-label mb-2 field_txt"> No. of staff</label>
                                                    <input type="text" class="form-control field_input_bg" name="address">

                                                </div>
                                                <div class="col-md-6  mt-5">
                                                    <label class="control-label mb-2 field_txt">Monthly Expenses</label>
                                                    <input type="text" class="form-control field_input_bg" name="age">
                                                </div>
                                                <div class="col-md-6  mt-5">
                                                    <label class="control-label mb-2 field_txt">Phone NO.</label>
                                                    <input type="Number" class="form-control field_input_bg" name="age">
                                                </div>
                                                <div class="col-md-6  mt-5">
                                                    <label class="control-label mb-2 field_txt">No. of Items</label>
                                                    <input type="Number" class="form-control field_input_bg" name="age">
                                                </div>
                                                <div class="col-md-6 mt-5">


                                                    <div class="row last_back_submit  d-flex flex-row justify-content-between  px-3">
                                                        <button class="back_btn_staff">Back</button>
                                                        <button class="submit_btn_staff">Submit</button>

                                                    </div>

                                                </div>



                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="reportsTable" class="table-container active">


                                    <div class="container">
                                        <div class="row d-flex flex-row justify-content-between pt-4 pb-3">
                                            <div class="">
                                                <h6 class="staff_dtls">Items Sales</h6>
                                            </div>

                                        </div>
                                    </div>

                                    <table class="table_stf">
                                        <thead class="table_bg indexTr">
                                            <tr>
                                                <th class="th_names">Sno</th>
                                                <th class="th_names">Items</th>
                                                <th class="th_names">Total Sales</th>
                                                <th class="th_names">Orders</th>
                                                <th class="th_names">Rate</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr_hover">
                                                <td class="td_id_num">1</td>
                                                <td class="td_id_mob">

                                                    <img src="img/profile (1).png" alt="John Doe" class="td_profile_pic">
                                                    Ram
                                                </td>


                                                <td class="td_id_mob">20,000</td>
                                                <td class="td_id_num">800+</td>
                                                <td class="td_id_num">250/kg</td>
                                                <!-- <td>
                                                    <button class="edit_icon"><i
                                                            class="fa-regular fa-pen-to-square"></i></button>
                                                    <button class="dlt_icon"><i
                                                            class="fa-regular fa-trash-can"></i></button>
                                                </td> -->
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>

                                <!-- <div id="totalBranchTable" class="table-container  ">


                                    <div class="container">
                                        <div class="row d-flex flex-row justify-content-between pt-4 pb-3">
                                            <div class="">
                                                <h6 class="staff_dtls">Total Items</h6>
                                            </div>
                                            <div class="">
                                                <h6 class="kkd_brnch">Kakinada Branch
                                                    <svg class="kkdIcon ml-3" xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                                        <path d="M17.7178 4.96555L10 12.1861L2.28216 4.96555C1.67358 4.33767 1.06501 4.32459 0.456432 4.9263C-0.152144 5.52802 -0.152144 6.11665 0.456432 6.6922L9.08714 14.8546C9.30844 15.1162 9.61272 15.247 10 15.247C10.3873 15.247 10.6916 15.1162 10.9129 14.8546L19.5436 6.6922C20.1521 6.11665 20.1521 5.52802 19.5436 4.9263C18.935 4.32459 18.3264 4.33767 17.7178 4.96555Z" fill="#202224" />
                                                    </svg>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table_stf">
                                        <thead class="table_bg">
                                            <tr>
                                                <th class="th_names">ID</th>
                                                <th class="th_names">Items</th>                                                
                                                <th class="th_names">Kg's</th>
                                                <th class="th_names">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr_hover">
                                                <td class="td_id_num">1</td>

                                                <td class="td_id_num">
                                                    <img src="img/profile (1).png" alt="John Doe" class="td_profile_pic">
                                                    Kaja        
                                                </td>
                                                <td class="td_id_mob">55</td>
                                                
                                                <td>
                                                    <button class="edit_icon"><i class="fa-regular fa-pen-to-square"></i></button>
                                                    <button class="dlt_icon"><i class="fa-regular fa-trash-can"></i></button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </section>


                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <div class="footer-widget__copyright">
                                <p class="mini_text" style="color:black"> ©2024 ----- . All Rights Reserved. Designed &
                                    Developed by <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none;color:black">Bhavi
                                        Creations</a></p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script>
            (function($) {

                $.fn.graphiq = function(options) {

                    // Default options
                    var settings = $.extend({
                        data: {},
                        colorLine: "#d3a2ef",
                        colorDot: "#c3ecf7",
                        colorXGrid: "#7f7f7f",
                        colorYGrid: "#7f7f7f",
                        colorLabels: "#FFFFFF",
                        colorUnits: "#FFFFFF",
                        colorRange: "#FFFFFF",
                        colorFill: "#533c68",
                        colorDotStroke: "#FFFFFF",
                        dotStrokeWeight: 0,
                        fillOpacity: 0.25,
                        rangeOpacity: 0.5,
                        dotRadius: 3,
                        lineWeight: 2,
                        yLines: true,
                        dots: true,
                        xLines: true,
                        xLineCount: 5,
                        fill: true,
                        height: 100,
                        fluidParent: null
                    }, options);

                    var values = [];
                    var entryDivision;
                    var dataRange = settings.height + settings.dotRadius;
                    var parent = this;
                    var maxVal;
                    var scaleFactor = settings.height / 100;
                    var pathPoints = "";
                    for (var key in settings.data) {
                        values.push(settings.data[key]);
                    }

                    parent.append(
                        '<div class="graphiq__graph-values"></div><div class="graphiq__graph-layout"><svg class="graphiq__graph" viewBox="0 0 960 ' +
                        (settings.height + 10) + '" shape-rendering="geometricPrecision"><path fill="' +
                        settings.colorFill + '" style="opacity: ' + settings.fillOpacity +
                        '" class="graphiq__fill-path" d="" stroke-width="0" stroke="#000" fill="cyan"/></svg><div class="graphiq__graph-key"></div></div>'
                    );
                    if (settings.fluidParent) {
                        this.closest(".col").css("overflow", "auto");
                    }
                    parent.addClass('graphiq');

                    var graph = this.find(".graphiq__graph");

                    // Get data from table
                    for (var key in settings.data) {
                        this.find(".graphiq__graph-key").append('<div class="key" style="color: ' + settings
                            .colorLabels + '">' + key + "</div>");
                    }

                    maxVal = Math.max.apply(Math, values);


                    this.find('.graphiq__graph-values').append('<span style="color: ' + settings.colorRange +
                        '; opacity: ' + settings.rangeOpacity + '">' + maxVal + '</span><span style="color: ' +
                        settings.colorRange + '; opacity: ' + settings.rangeOpacity + '" >0</span>');



                    // Set even spacing in the graph depending on amount of data

                    var width = parent.find(".graphiq__graph-layout").width();

                    if (settings.xLines) {
                        unitLines(width, maxVal);
                    }

                    layoutGraph(width, true);

                    $(window).on("resize", function() {
                        pathPoints = "";
                        width = parent.find(".graphiq__graph-layout").width();
                        layoutGraph(width, false);
                    });

                    // buildFillPath();

                    function percentageOf(max, current) {
                        return (current / max * 100) * scaleFactor;
                    }

                    function layoutGraph(width, initial) {
                        graph.attr({
                            viewBox: "0 0 " + width + " " + (settings.height + 10),
                            width: width
                        });
                        entryDivision = width / (values.length - 1);
                        getCoordinates(initial, entryDivision);
                    }

                    function getCoordinates(initial, entryDivision) {


                        for (i = 0; i < values.length; i++) {

                            var offset;

                            if (i == 0) {
                                offset = (settings.dotRadius + (settings.dotStrokeWeight)) + 1;
                            } else if (i == values.length - 1) {
                                offset = ((settings.dotRadius + (settings.dotStrokeWeight)) * -1) - 1;
                            } else {
                                offset = 0;
                            }

                            var lineOffset = i == values.length - 2 ? (settings.dotRadius + (settings
                                .dotStrokeWeight)) / 2 : 0;

                            let nextI = i + 1;
                            let xAxis = (entryDivision * i) + offset;
                            let xAxis2 = entryDivision * nextI;

                            console.log(offset);


                            let yAxis = dataRange - percentageOf(maxVal, values[i]);

                            let yAxis2 = dataRange - percentageOf(maxVal, values[nextI]);

                            if (i == values.length - 1) {
                                yAxis2 = yAxis;
                                xAxis2 = xAxis;
                            }

                            pathPoints += " L " + xAxis + " " + yAxis;


                            if (i == values.length - 1 && settings.fill) {
                                buildFillPath(pathPoints);
                            }

                            if (initial) {

                                if (settings.yLines) {

                                    $(document.createElementNS("http://www.w3.org/2000/svg", "line"))
                                        .attr({
                                            class: "graphiq__y-division",
                                            x1: xAxis,
                                            y1: yAxis,
                                            x2: xAxis,
                                            y2: settings.height + 5,
                                            stroke: settings.colorYGrid,
                                            "stroke-dasharray": "5 6",
                                            "stroke-width": 1
                                        })
                                        .prependTo(graph);

                                }

                                // Draw the line


                                $(document.createElementNS("http://www.w3.org/2000/svg", "line"))
                                    .attr({
                                        class: "graphiq__line",
                                        x1: xAxis,
                                        y1: yAxis,
                                        x2: xAxis2 - lineOffset,
                                        y2: yAxis2 + (settings.dotStrokeWeight / 2),
                                        stroke: settings.colorLine,
                                        "stroke-width": settings.lineWeight,
                                        "vector-effect": "non-scaling-stroke"
                                    }).appendTo(graph);

                                // Draw the circle


                                $(document.createElementNS("http://www.w3.org/2000/svg", "circle"))
                                    .attr({
                                        class: "graphiq__graph-dot",
                                        cx: xAxis,
                                        cy: yAxis + (settings.dotStrokeWeight / 2),
                                        r: settings.dots ? settings.dotRadius : 0,
                                        fill: settings.colorDot,
                                        stroke: settings.colorDotStroke,
                                        "stroke-width": settings.dotStrokeWeight,
                                        "data-value": values[i],
                                        "vector-effect": "non-scaling-stroke"
                                    })
                                    .appendTo(graph);


                                // Resize instead of draw, used in resize
                            } else {

                                parent.find(".graphiq__graph-dot")
                                    .eq(i)
                                    .attr({
                                        cx: xAxis,
                                    });
                                parent.find(".graphiq__line")
                                    .eq(i)
                                    .attr({
                                        x1: xAxis,
                                        x2: xAxis2 - lineOffset,
                                    });
                                parent.find(".graphiq__y-division")
                                    .eq(values.length - i - 1)
                                    .attr({
                                        x1: xAxis,
                                        x2: xAxis
                                    });
                                parent.find(".graphiq__x-line").each(function() {
                                    $(this).attr({
                                        x2: width
                                    });
                                });
                            }
                        }
                    }

                    function buildFillPath(pathPoints) {

                        parent.find('.graphiq__fill-path').attr("d", "M  " + (4 + settings.dotStrokeWeight) + " " +
                            (settings.height + 5 + settings.dotStrokeWeight) + pathPoints + " L " + (width -
                                settings.dotRadius - settings.dotStrokeWeight) + " " + (settings.height + 5 +
                                settings.dotStrokeWeight))
                    }

                    function unitLines(width, maxVal) {
                        // Draw the max line

                        var iteration = 100 / (settings.xLineCount - 1);


                        for (i = 0; i < settings.xLineCount; i++) {

                            $(document.createElementNS("http://www.w3.org/2000/svg", "line"))
                                .attr({
                                    class: "graphiq__x-line",
                                    y1: iteration * i + (settings.dotRadius + settings.dotStrokeWeight),
                                    x2: width,
                                    y2: iteration * i + (settings.dotRadius + settings.dotStrokeWeight),
                                    stroke: settings.colorXGrid,
                                    // "stroke-dasharray": "5 6",
                                    "stroke-width": 1
                                })
                                .prependTo(graph);

                        }

                    }

                    parent.hover(function() {

                        $(this).find('.graphiq__graph-dot').each(function(index) {
                            $('body').append('<span style="color: ' + settings.colorUnits +
                                '" class="graphiq__value-dialog value-' + index + '">' + $(this)
                                .attr("data-value") + '</span>');
                            $('.value-' + index).css({
                                top: $(this).position().top - 20,
                                left: $(this).position().left - ($('.value-' + index)
                                    .outerWidth() / 2) + 3
                            })
                        })
                    }, function() {
                        $('.graphiq__value-dialog').remove();
                    })

                };

            }(jQuery));

            // Initiate graphs

            var songs = {
                "Mon": 80,
                "Tues": 40,
                "Wed": 60,
                "Thu": 80,
                "Fri": 40,
                "Sat": 60,

            };

            var coffees = {
                "Mon": 3,
                "Tues": 2,
                "Wed": 3,
                "Thu": 2,
                "Fri": 1.5,
                "Sat": 1,
                "Sun": 2
            };

            var cats = {
                "10/12": 1,
                "10/13": 4,
                "10/14": 15,
                "10/15": 27,
                "10/16": 48,
                "10/17": 34,
                "10/18": 12,
            }

            var reddit = {
                "10/12": 3.5,
                "10/13": 2.3,
                "10/14": 2,
                "10/15": 1.5,
                "10/16": 3,
                "10/17": 4,
                "10/18": 7,
            }

            var feature = {
                "1am": 20,
                "2am": 15,
                "3am": 26,
                "4am": 23,
                "5am": 36,
                "6am": 48,
                "7am": 89,
                "8am": 109,
                "9am": 140,
                "10am": 162,
                "11am": 173,
                "12pm": 201
            }


            $('.graph-songs').graphiq({
                data: songs,
                fluidParent: ".col",
                height: 100,
                xLineCount: 5,
                dotRadius: 4,
                yLines: true,
                xLines: true,
                dots: true,
                fillOpacity: 0.5,
                fill: true,
                colorUnits: "#c3ecf7"
            });

            $('.graph-coffees').graphiq({
                data: coffees,
                fluidParent: ".col",
                height: 100,
                xLineCount: 3,
                dotRadius: 5,
                yLines: true,
                xLines: true,
                dots: true,
                colorLine: "#d3d1b1",
                colorDot: "#726d60",
                colorXGrid: "#634e1b",
                colorUnits: "#d3d1b1",
                colorFill: "#3a2f23",
                dotStrokeWeight: 3,

            });

            $('.graph-cats').graphiq({
                data: cats,
                fluidParent: ".col",
                yLines: false,
                xLines: false,
                dots: false,
                colorLine: "#efede5",
                colorLabels: "#efede5",
                fill: false
            });

            $('.graph-hours').graphiq({
                data: reddit,
                fluidParent: ".col",
                height: 100,
                xLineCount: 2,
                dotRadius: 5,
                yLines: false,
                xLines: true,
                dots: true,
                colorLine: "#2F9C95",
                colorDot: "#A3F7B5",
                colorXGrid: "#788476",
                colorUnits: "#A3F7B5",
                colorFill: "#2a4151"
            });

            $('.graph-feature').graphiq({
                data: feature,
                fluidParent: ".col",
                colorFill: "#0B4F6C",
                colorRange: "#0B4F6C",
                colorLabels: "#0B4F6C",
                colorLine: "#145C9E",
                fillOpacity: 0.6,
                yLines: false,
                xLineCount: 2,
                dotRadius: 2,
                colorUnits: "#8ecde2",
                lineWeight: 0,
                dots: false,
                colorDot: "#ffc744",
                colorYGrid: "#041e28",
                colorXGrid: "#eeeeee",
                height: 180
            })
        </script>
</body>

</html>