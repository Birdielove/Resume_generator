<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
  <!-- BOOTSTRAP STYLES-->
    
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    
    <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
     <!-- MORRIS CHART STYLES-->
    
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css') ?>" rel="stylesheet">
        <!-- CUSTOM STYLES-->
    
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo $username ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Welcome,&nbsp;<?php echo $fullname ?>&nbsp; <a class="btn btn-danger square-btn-adjust" href="<?php echo site_url('home/logout') ?>" role="button">Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url('assets/img/find_user.png') ?>" class="user-image img-responsive"/>
                   
          </li> 
        
          
                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-edit fa-3x"></i> Create Resume</a>
                    </li>
                     <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> Show / Edit Resume</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Download Resume</a>
                    </li>
               <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Forms</a>
                    </li> 
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> </a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-dashboard fa-3x"></i>  </a>
                    </li>       
          
                             
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Resume generator</h2>   
                        <h5>Welcome <?php echo $fullname ?> , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">            
      <input type="text" class="form-control" placeholder="Username" >
      <br>
      <input type="text" class="form-control" placeholder="Mobile No." aria-label="...">
      <br>
      <textarea rows="4" cols="50" class="form-control" placeholder="Address"></textarea>
      <br>
      <input type="text" class="form-control" placeholder="E-mail" aria-label="...">
      <hr />
      <div><h3>Carrer Objective</h3></div>
      <br>
      <textarea rows="4" cols="50" class="form-control" placeholder="...."></textarea>
      <hr />
      <div><h3>Work Experience</h3></div>
      <br>
      <input type="text" class="form-control" placeholder="...." aria-label="...">
      <hr />
      <div><h3>Speciliazation</h3></div>
      <br>
      <input type="text" class="form-control" placeholder="...." aria-label="...">
      <hr />
      <div><h3>Educational Qualification</h3></div
      <br>
    <table class="table" >
      <tr>
      <td>Qualification</td>
      <td>Institute</td>
      <td>Board</td>
      <td>Year</td>
      <td>Marks</td>
      </tr>
    <tr>
      <td> <input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td> <input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td> <input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td> <input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td> <input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      


</table>

  <hr/>
<div><h3>Extra Activity</h3></div>
<br>
<textarea rows="4" cols="50" class="form-control" placeholder="Address"></textarea>
<hr>
<div><h3>Personal Information</h3></div>
<br>
<table class="table" >
      <tr>
      <td>Father's Name</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Mother's Name</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Date of Birth</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Sex</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Martial Status</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Nationality</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Language Known</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      <tr>
      <td>Email-id</td>
      <td><input type="text" class="form-control" placeholder="" aria-label="..."></td>
      </tr>
      </table>
      <hr/>
      <div><h3>Declaration</h3></div>
      <br>
      <textarea rows="4" cols="50" class="form-control" placeholder="Address"></textarea>
      <hr>
      <div><h3>date</h3></div>
      <input type="date" class="form-control" >
      <br>


<p><a class="btn btn-primary btn-lg" href="" role="button">Submit</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-lg" href="" role="button">Generate PDF</a></p>


             </div>
         </div>
                   
      </div>
                 <!-- /. ROW  -->
                <hr />                
               

                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->

    
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- METISMENU SCRIPTS -->
    
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js') ?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
    
     <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js') ?>"></script>
    
    <script src="<?php echo base_url('assets/js/morris/morris.js') ?>"></script>
      <!-- CUSTOM SCRIPTS -->
    
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    
   
</body>
</html>
