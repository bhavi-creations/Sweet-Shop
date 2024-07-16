 
<?php
ob_start(); // Start output buffering
?>
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
                            <div class="col-md-4 col-lg-2 ul_border">
                                <ul class="ul_style">
                                    <li id="addReport" class="add_staff_list_detils open_table">+ Add Branch</li>
                                    <li id="reports" class="staff_list_detils open_table active">Total Branches</li>
                                </ul>

                                <script>
                                    const listItems = document.querySelectorAll('.open_table');
                                    const tableContainers = document.querySelectorAll('.table-container');

                                    listItems.forEach(item => {
                                        item.addEventListener('click', function() {
                                            listItems.forEach(i => i.classList.remove('active'));
                                            this.classList.add('active');
                                            updateTable(this.id);
                                        });
                                    });

                                    function updateTable(id) {
                                        tableContainers.forEach(container => container.classList.remove('active'));
                                        document.querySelectorAll('.table-container').forEach(container => container.classList.remove('active'));
                                        document.getElementById(id + 'Table').classList.add('active');
                                    }

                                    // Initially show the details table
                                    document.getElementById('reportsTable').classList.add('active');
                                </script>
                            </div>

                            <div class="col-md-11 col-lg-9 ul_border">

                                <?php
                                include '..\..\db.connection\db_connection.php';

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if (isset($_POST['branch_area']) && !empty($_POST['branch_area'])) {
                                        $branch_area = $_POST['branch_area'];

                                        // Insert branch into database
                                        $sql = "INSERT INTO branches (branch_area) VALUES (?)";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bind_param("s", $branch_area);

                                        if ($stmt->execute()) {
                                            echo "New branch added successfully";
                                            header("Location: branches.php");
                                            exit();
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }

                                        $stmt->close();
                                    } else {
                                        echo "Branch area cannot be empty.";
                                    }
                                }

                                ?>

                                <div id="addReportTable" class="table-container">
                                    <div class="container">
                                        <div class="row d-flex flex-row justify-content-between pt-4 pb-3">
                                            <div class="">
                                                <h6 class="staff_dtls">Add Branch</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 mt-5">
                                                    <label class="control-label mb-2 field_txt">Branch Area</label>
                                                    <input type="text" class="form-control field_input_bg" name="branch_area">
                                                </div>
                                                <div class="col-md-6 mt-5">
                                                    <div class="row last_back_submit d-flex flex-row justify-content-between px-3">
                                                        <button class="back_btn_staff">Back</button>
                                                        <button type="submit" class="submit_btn_staff">Submit</button>
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
                                                <h6 class="staff_dtls">Total Branches</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table_stf">
                                        <thead class="table_bg">
                                            <tr>
                                                <th class="th_names">ID</th>
                                                <th class="th_names">Branch Area</th>
                                                <th class="th_names">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT id, branch_area FROM branches";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr class='tr_hover'>
                                                            <td class='td_id_num'>" . $row["id"] . "</td>
                                                            <td class='td_id_num'>" . $row["branch_area"] . "</td>
                                                            <td>
                                                                <button class='edit_icon'><i class='fa-regular fa-pen-to-square'></i></button>
                                                                <button class='dlt_icon'><i class='fa-regular fa-trash-can'></i></button>
                                                            </td>
                                                          </tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='3'>No branches found</td></tr>";
                                            }

                                            $conn->close();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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


            </div>


        </div>

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

</body>

</html>