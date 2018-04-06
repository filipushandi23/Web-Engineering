<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>CRM - Filipus - Satria - Melvern</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">
    </head>

    <body>

        <section id="container" >
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.html" class="logo"><b>CRM - FMSR</b></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <ul class="nav top-menu">
                        <li><a href="#">Leads</a></li>
                        <li><a href="#">Opportunities</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Order</a></li>
                        <li><a href="#">Customer</a></li>
                        <li><a href="#">Add-On Order</a></li>
                        <li><a href="#">Recharge</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">API Log Manager</a></li>
                    </ul>
                </div>

            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">FMSR</h5>


                        <li class="sub-menu">
                            <a class="active" href="javascript:;" >
                                <i class="fa fa-th"></i>
                                <span>Customer List</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="crm_home.jsp">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Recently Modified</span>
                            </a>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-9 main-chart">
                            <!--<input type="text" class="form-control">-->
                            <div align="left">
                                <table>
                                    <tr><td><input type="text" class="form-control" placeholder="Search here..."></td>
                                        <td> <button type="button" class="btn btn-info">
                                                <span class="glyphicon glyphicon-search"></span> Search
                                            </button></td>
                                    </tr>
                                </table>

                            </div>
                            <form action="crm_home_dao.php" method="post">
                                <div align="right">
                                    <input type="submit" name ="submit_button" class="btn btn-round btn-primary" value="Save">
                                    <input type="submit" name ="submit_button" class="btn btn-round btn-primary" value="Add">
                                    <input type="submit" name ="submit_button" class="btn btn-round btn-primary" value="Edit">
                                    <input type="submit" name ="submit_button" class="btn btn-round btn-primary" value="Delete">
                                    <input type="submit" name ="submit_button" class="btn btn-round btn-primary" value="Check Dukcapil">
                                </div>
                                <table class="table table-hover" border='2'>
                                    <h4><i class="fa fa-angle-right"></i> Customer Details</h4>
                                    <tr>
                                        <td><b>Customer Segment</b></td>
                                        <td><select class="form-control" name="cust_segment">
                                                <option value="Retail">Retail</option>
                                                <option value="Business">Business</option>
                                            </select></td>
                                        <td><b>Customer Account Number</b></td>
                                        <td><input type="text" class="form-control"name="account_number"></td>
                                        <td><b>Dukcapil Status</b></td>
                                        <td><select class="form-control" disabled="true" name="status_dukcapil">
                                                <option value="Valid" selected="true">Valid</option>
                                                <option value="Not Valid">Not Valid</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><b>Customer Category</b></td>
                                        <td><select class="form-control" name="cust_category">
                                                <option value="Default">Default</option>
                                                <option value="Enterprise">Enterprise</option>
                                            </select></td>
                                        <td><b>Longitude</b></td>
                                        <td><input type="text" class="form-control" disabled="true" name="longitude"></td>
                                        <td><b>Latitude</b></td>
                                        <td><input type="text" class="form-control" disabled="true" name="latitude"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Residence Type</b></td>
                                        <td><select class="form-control" name="residence_type">
                                                <option value="Domestic">Domestic</option>
                                                <option value="Foreign">Foreign</option>
                                            </select></td>
                                        <td><b>NPWP Number</b></td>
                                        <td colspan="3" ><input type="text" onkeyup="checkNumbers(this.id)" id="inputNPWP" class="form-control" name="npwp_num"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Date Of Birth</b></td>
                                        <td><input type="text" class="form-control" name="dob"></td>
                                        <td><b>Is Converted From Lead</b></td>
                                        <td><input type="text" class="form-control" name="is_converted_from_lead" disabled="true"></td>
                                        <td><b>Customer Status</b></td>
                                        <td><select class="form-control" disabled="true" name="cust_status">
                                                <option value="Registered" selected="true">Registered</option>
                                                <option value="Active">Active</option>
                                                <option value="Suspended">Suspended</option>
                                                <option value="Deactivate">Deactivate</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td><b>Occupation</b></td>
                                        <td><select class="form-control" name="occupation">
                                                <option value="Employed">Employed</option>
                                                <option value="Private">Private</option>
                                            </select></td>
                                        <td><b>Primary Mobile</b></td>
                                        <td><input type="text" onkeyup="checkNumbers(this.id)" id="inputMobile" class="form-control" name="primary_mobile"></td>
                                        <td><b>BSS Status</b></td>
                                        <!--                                              isinya prepaid ato postpaid (field yg tidak diisi karakternya 15)
                                                                                            all record cust id, nama  -->
                                        <td><input type="text" class="form-control" disabled="true" name="bss_status" value="Prepaid"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Modified Time</b></td>
                                        <td><input type="text" class="form-control" disabled="true" name="modified_time"></td>
                                        <td><b>Corporate Tax ID</b></td>
                                        <td colspan="3"><input type="text" onkeyup="checkNumbers(this.id)" id="inputTaxID" class="form-control" name="corp_tax_id"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Shared Balance Group</b></td>
                                        <td><input type="text" class="form-control" name="shared_balance_group"></td>
                                        <td><b>Created Time</b></td>
                                        <td><input type="text" class="form-control" name="created_time" disabled="true"></td>
                                        <td><b>Customer Username</b></td>
                                        <td><input type="text" class="form-control" name="cust_username"></td>
                                    </tr>
                                </table>

                            <bn><hr>
                                    <table class="table table-hover" border='2'>
                                        <h4><i class="fa fa-angle-right"></i> PIC Details</h4>
                                        <tr>
                                            <td><b>First Name</b></td>
                                            <td><input type="text" class="form-control" name="first_name"></td>
                                            <td><b>Last Name</b></td>
                                            <td><input type="text" class="form-control" name="last_name"></td>
                                            <td><b>Gender</b></td>
                                            <td><select class="form-control" name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><b>Facebook Account ID</b></td>
                                            <td><input type="text" class="form-control" name="fb"></td>
                                            <td><b>Customer ID Type</b></td>
                                            <td><select class="form-control" name="cust_id_type">
                                                    <option value="KTP">KTP</option>
                                                    <option value="Passport">Passport</option>
                                                </select></td>
                                            <td><b>Contact Number</b></td>
                                            <td><input type="text" onkeyup="checkNumbers(this.id)" name="contact_number" id="inputContNumber" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Customer ID</b></td><td><input type="text" name="customer_id" class="form-control"></td>
                                            <td><b>Mother Maiden Name</b></td>
                                            <td><input type="text" class="form-control" name="mother_name"></td>
                                            <td><b>Primary Email</b></td>
                                            <td><input type="email" id="inputEmail" class="form-control" name="email"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Prefered Language</b></td>
                                            <td><select class="form-control" name="language">
                                                    <option value="English">English</option>
                                                    <option value="Bahasa">Bahasa</option>
                                                </select></td>
                                            <td><b>KK Number</b></td>
                                            <td><input type="text" onkeyup="checkNumbers(this.id)" name="kk_number" id="inputKKNum" class="form-control"></td>
                                            <td><b>Home Phone</b></td>
                                            <td><input type="text" onkeyup="checkNumbers(this.id)" name="home_phone" id="inputHomePhone" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><b>Home Status</b></td>
                                            <td><select class="form-control" name="home_status">
                                                    <option value="Own House">Own House</option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Apartment">Apartment</option>
                                                </select></td>
                                            <td><b>Office Phone</b></td>
                                            <td><input type="text" onkeyup="checkNumbers(this.id)" name="office_phone" id="inputOfficePhone" class="form-control"></b></td>
                                            <td><b>Marital Status</b></td>
                                            <td><select class="form-control" name="marital_status">
                                                    <option name="Married">Married</option>
                                                    <option name="Not Married">Not Married</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><b>Fax</b></td>
                                            <td><input type="text" onkeyup="checkNumbers(this.id)" name="fax" id="inputFaxNumber" class="form-control"></td>
                                        </tr>
                                    </table>
                                  </form>
                        </div><!-- /col-lg-9 END SECTION MIDDLE -->


                        <!-- **********************************************************************************************************************************************************
                        RIGHT SIDEBAR CONTENT
                        *********************************************************************************************************************************************************** -->

                        <div class="col-lg-3 ds" style="background-color: #424A5D">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><p style="color:white">Basic</p></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr><td><a href="">Customer Summary</a></td></tr>
                                                <tr><td><a href="">Customer Details</a></td></tr>
                                                <tr><td><a href="">Comments</a></td></tr>
                                                <tr><td><a href="">Updates</a></td></tr>
                                                <tr><td><a href="">CCI Details</a></td></tr>
                                                <tr><td><a href="">Opportunities</a></td></tr>
                                                <tr><td><a href="">Quotes</a></td></tr>
                                                <tr><td><a href="">Documents</a></td></tr>
                                                <tr><td><a href="">Campaigns</a></td></tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><p style="color:white">Customer</p></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table">

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><p style="color:white">Account</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr><td><a href="">Change Password</a></td></tr>
                                            <tr><td><a href="">Notifications</a> <span class="label label-info">5</span></td></tr>
                                            <tr><td><a href="">Import/Export</a></td></tr>
                                            <tr><td><span class="glyphicon glyphicon-trash text-danger"></span><a href="" class="text-danger">Delete Account</a></td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><p style="color:white">Order</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">

                                        </table>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><p style="color:white">Add-On</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">

                                        </table>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><p style="color:white">Bills</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">

                                        </table>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><p style="color:white">Transaction Details</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">

                                        </table>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="background-color: #424A5D">
                                    <div class="panel-heading"style="background-color: #424A5D">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight"><p style="color:white">Others</p></a>
                                        </h4>
                                    </div>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </section><!-- /MAIN CONTENT -->
            <script>
                function checkNumbers(id) {
                    var input = document.getElementById(id).value;
                    if (isNaN(input))
                    {
                        document.getElementById(id).value = "Input must be numbers!";
                        document.getElementById(id).focus();
                    }
                }
                function ValidateEmail(inputText)
                {
                    var emailInput = document.getElementById("inputEmail").value;
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (emailInput.match(mailformat))
                    {
                        return true;
                    } else
                    {
                        document.getElementById("inputEmail").value = "Wrong Email";
                        document.getElementById("inputEmail").focus();
                        return false;
                    }
                }
            </script>
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2018 Copyright
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <!--script for this page-->


    </body>
</html>
