<?php 
session_start();
ob_start();
include_once('../includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");

$id = $_SESSION['id'];
if (!isset($id)) {
  header("location:login.php");
}

if (isset($_POST['btnPostJob']))
{
  $job_title = $db->escapeString($_POST['job_title']);
  $job_category = $db->escapeString($_POST['job_category']);
  $job_location = $db->escapeString($_POST['job_location']);
  $job_type = $db->escapeString($_POST['job_type']);
  $job_experience = $db->escapeString($_POST['job_experience']);
  $job_salary_range = $db->escapeString($_POST['job_salary_range']);
  $job_qualification = $db->escapeString($_POST['job_qualification']);
  $job_gender = $db->escapeString($_POST['job_gender']);
  $job_vacancy = $db->escapeString($_POST['job_vacancy']);
  $job_last_date = $db->escapeString($_POST['job_last_date']);
  $job_description = $db->escapeString($_POST['job_description']);
  $responsibilities = $db->escapeString($_POST['responsibilities']);
  $education = $db->escapeString($_POST['education']);
  $other_benefits = $db->escapeString($_POST['other_benefits']);
  $country = $db->escapeString($_POST['country']);
  $city = $db->escapeString($_POST['city']);
  $pincode = $db->escapeString($_POST['pincode']);
  $location = $db->escapeString($_POST['location']);
  $company_name = $db->escapeString($_POST['company_name']);
  $web_address = $db->escapeString($_POST['web_address']);
  $company_profile	 = $db->escapeString($_POST['company_profile']);
  $package = $db->escapeString($_POST['package']);
  $payment_method = $db->escapeString($_POST['payment_method']);

  $data = array(
    'job_title' => $job_title,
    'job_category' => $job_category,
    'job_location' => $job_location,
    'job_type' => $job_type,
    'job_experience' => $job_experience,
    'job_salary_range' => $job_salary_range,
    'job_qualification' => $job_qualification,
    'job_gender' => $job_gender,
    'job_vacancy' => $job_vacancy,
    'job_last_date' => $job_last_date,
    'job_description' => $job_description,
    'responsibilities' => $responsibilities,
    'education' => $education,
    'other_benefits' => $other_benefits,
    'country' => $country,
    'city' => $city,
    'pincode' => $pincode,
    'location' => $location,
    'company_name' => $company_name,
    'web_address' => $web_address,
    'company_profile' => $company_profile,
    'package' => $package,
    'payment_method' => $payment_method
);
if($db->insert('jobs', $data, 'id=' . $id)){
  header("location: ../company/employer-dashboard.php");

}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lewansys</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/et-line.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/plyr.css" />
    <link rel="stylesheet" href="assets/css/flag.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" />
    <link rel="stylesheet" href="assets/css/html5-simple-date-input-polyfill.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="dashboard/css/dashboard.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

     <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="employer-dashboard.php"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>
              <div class="top-nav">
                <div class="dropdown header-top-notification">
                  <a href="#" class="notification-button">Notification</a>
                  <div class="notification-card">
                    <div class="notification-head">
                      <span>Notifications</span>
                      <a href="#">Mark all as read</a>
                    </div>
                    <div class="notification-body">
                      <a href="home-2.html" class="notification-list">
                        <i class="fas fa-bolt"></i>
                        <p>Your Resume Updated!</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-check-square"></i>
                        <p>You applied for Project Manager <span>@homeland</span></p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-user"></i>
                        <p>You changed password</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                    </div>
                    <div class="notification-footer">
                      <a href="#">See all notification</a>
                    </div>
                  </div>
                </div>
                <div class="dropdown header-top-account">
                  <a href="#" class="account-button">My Account</a>
                  <div class="account-card">
                    <div class="header-top-account-info">
                      <a href="#" class="account-thumb">
                        <img src="images/account/thumb-1.jpg" class="img-fluid" alt="">
                      </a>
                      <div class="account-body">
                        <h5><a href="#">Robert Chavez</a></h5>
                        <span class="mail">chavez@domain.com</span>
                      </div>
                    </div>
                    <ul class="account-item-list">
                      <li><a href="#"><span class="ti-user"></span>Account</a></li>
                      <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                      <li><a href="#"><span class="ti-power-off"></span>Log Out</a></li>
                    </ul>
                  </div>
                </div>
                <!-- <select class="selectpicker select-language" data-width="fit">
                  <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                  <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                </select> -->
              </div>
            </div>
            <nav class="navbar navbar-expand-lg cp-nav-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="menu-item active"><a title="Home" href="employer-dashboard.php">Home</a></li>
                 <!--  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="job-listing.html">Job Listing</a></li>
                      <li class="menu-item"><a  href="job-listing-with-map.html">Job Listing With Map</a></li>
                      <li class="menu-item"><a  href="job-details.html">Job Details</a></li>
                      <li class="menu-item"><a  href="post-job.html">Post Job</a></li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="candidate.html">Candidate Listing</a></li>
                      <li class="menu-item"><a  href="candidate-details.html">Candidate Details</a></li>
                      <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                    </ul>
                  </li> -->
                 <!--  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="employer-listing.html">Employer Listing</a></li>
                      <li class="menu-item"><a  href="employer-details.html">Employer Details</a></li>
                      <li class="menu-item"><a  href="employer-dashboard-post-job.php">Post a Job</a></li>
                    </ul>
                  </li> -->
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                    <ul class="dropdown-menu">
                          <li class="menu-item"><a href="employer-dashboard.php">Employer Dashboard</a></li>
                          <li class="menu-item"><a href="employer-dashboard-edit-profile.php">Edit Profile</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>
                          <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                          <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                          <li class="menu-item"><a href="employer-dashboard-post-job.php">Post Job</a></li>
                        </ul>
                  </li>
                  <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                  <li class="menu-item post-job"><a href="post-job.html"><i class="fas fa-plus"></i>Post a Job</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <!-- <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <form action="#" class="dashboard-form job-post-form">
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Post A Job</h4>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Job Title</label>
                      <div class="col-md-9">
                        <input name="job_title" type="text" class="form-control" placeholder="Your job title here">
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Summery</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="job_category" class="form-control">
                                <option>Select Category</option>
                                <option>Accounting / Finance</option>
                                <option>Health Care</option>
                                <option>Garments / Textile</option>
                                <option>Telecommunication</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input name="job_location" type="text" class="form-control" placeholder="Job Location">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="job_type" class="form-control">
                                <option>Job Type</option>
                                <option>Part Time</option>
                                <option>Full Time</option>
                                <option>Temperory</option>
                                <option>Permanent</option>
                                <option>Freelance</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="job_experience" class="form-control">
                                <option>Experience (Optional)</option>
                                <option>Less than 1 Year</option>
                                <option>2 Year</option>
                                <option>3 Year</option>
                                <option>4 Year</option>
                                <option>Over 5 Year</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input name="job_salary_range" type="text" class="form-control" placeholder="Salary Range">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="job_qualification" class="form-control">
                                <option>Qualification</option>
                                <option>Matriculation</option>
                                <option>Intermidiate</option>
                                <option>Gradute</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="job_gender" class="form-control">
                                <option>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input name="job_vacancy" type="text" class="form-control" placeholder="Vacancy">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group datepicker">
                              <input name="job_last_date" type="date" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Description</label>
                      <div class="col-md-9">
                        <textarea name="job_description" id="mytextarea" class="tinymce-editor tinymce-editor-1" placeholder="Description text here"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Responsibilities</label>
                      <div class="col-md-9">
                        <textarea name="responsibilities" id="mytextarea2" class="tinymce-editor tinymce-editor-2" placeholder="Responsibilities (Optional)"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Education</label>
                      <div class="col-md-9">
                        <textarea name="education" id="mytextarea3" class="tinymce-editor tinymce-editor-2" placeholder="Education (Optional)"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Other Benefits</label>
                      <div class="col-md-9">
                        <textarea name="other_benefits" id="mytextarea4" class="tinymce-editor tinymce-editor-2" placeholder="Description text here"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Your Location</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select name="country" class="form-control">
                                <option>Country</option>
                                <option>USA</option>
                                <option>United Kindom</option>
                                <option>Spain</option>
                                <option>France</option>
                                <option>Germany</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                            <div class="form-group">
                              <select name="city" class="form-control" id="exampleFormControlSelect11">
                                <option>City</option>
                                <option>New Work</option>
                                <option>Washington D.C</option>
                                <option>California</option>
                                <option>Las Vegas</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                            <div class="form-group">
                              <input name="pincode" type="text" class="form-control" placeholder="Zip Code">
                            </div>
                            <div class="form-group">
                              <input name="location" type="text" class="form-control" placeholder="Your Location">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="set-location">
                              <h5>Pin Location</h5>
                              <div id="map-area" class="contact-location">
                                <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">About Company</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input name="company_name" type="text" class="form-control" placeholder="Company Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input name="web_address" type="text" class="form-control" placeholder="Web Address">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea name="company_profile" class="form-control" placeholder="Company Profile"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Select Package</label>
                      <div class="col-md-9">
                        <div class="package-select">
                          <div class="package-select-inputs">
                            <div class="form-group">
                              <input name="package" class="custom-radio" type="radio" id="radio_1" name="my-radio" value="1" checked>
                              <label for="radio_1">
                              <span class="dot"></span> <span class="package-type">Free</span> $0.00
                            </label>
                            </div>
                            <div class="form-group">
                              <input name="package" class="custom-radio" type="radio" id="radio_2" name="my-radio" value="1">
                              <label for="radio_2">
                              <span class="dot"></span> <span class="package-type">Stater</span> $22.00
                            </label>
                            </div>
                            <div class="form-group">
                              <input name="package" class="custom-radio" type="radio" id="radio_3" name="my-radio" value="1">
                              <label for="radio_3">
                              <span class="dot"></span> <span class="package-type">Advance</span> $44.00
                            </label>
                            </div>
                          </div>
                          <div class="payment-method">
                            <a href="#" class="credit active"><i class="fas fa-credit-card"></i>Credit Card</a>
                            <a href="#" class="paypal"><i class="fab fa-cc-paypal"></i>PayPal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9 offset-md-3">
                        <div class="form-group terms">
                          <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                          <label for="radio-4">
                            <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button  name="btnPostJob" type="submit" class="button">Post Your Job</button>
                        
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>Degoin</h5>
                    <span>@username</span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                <div class="dashboard-menu">
                  <ul>
                    <li><i class="fas fa-home"></i><a href="employer-dashboard.php">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.php">Edit Profile</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.html">Manage Jobs</a></li>
                    <li><i class="fas fa-users"></i><a href="employer-dashboard-manage-candidate.html">Manage Candidates</a></li>
                    <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li>
                    <li class="active"><i class="fas fa-plus-square"></i><a href="employer-dashboard-post-job.php">Post New Job</a></li>
                    <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li>
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
                    <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li>
                  </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job.</p>
              </div>
              <div class="call-to-action-button">
                <a href="add-resume.html" class="button">Add Resume</a>
                <span>Or</span>
                <a href="post-job.html" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

    <!-- Footer -->
    <footer class="footer-bg">
      <div class="footer-top border-bottom section-padding-top padding-bottom-40">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-logo">
                <a href="#">
                  <img src="images/footer-logo.png" class="img-fluid" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-social">
                <ul class="social-icons">
                  <li><a href="#"><i data-feather="facebook"></i></a></li>
                  <li><a href="#"><i data-feather="twitter"></i></a></li>
                  <li><a href="#"><i data-feather="linkedin"></i></a></li>
                  <li><a href="#"><i data-feather="instagram"></i></a></li>
                  <li><a href="#"><i data-feather="youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Information</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Job Seekers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Career Counseling</a></li>
                    <li><a href="#">My Oficiona</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Video Guides</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Employers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Products/Service</a></li>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-sm-6">
              <div class="footer-widget footer-newsletter">
                <h4>Newsletter</h4>
                <p>Get e-mail updates about our latest news and Special offers.</p>
                <form action="#" class="newsletter-form form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email address...">
                  </div>
                  <button class="btn button primary-bg">Submit<i class="fas fa-caret-right"></i></button>
                  <p class="newsletter-error">0 - Please enter a value</p>
                  <p class="newsletter-success">Thank you for subscribing!</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer-bottom border-top">
                <div class="row">
                  <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="footer-app-download">
                      <a href="#" class="apple-app">Apple Store</a>
                      <a href="#" class="android-app">Google Play</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 order-lg-1">
                    <p class="copyright-text">Copyright Lewansys 2021, All right reserved.<br> Designed and Developed by <a href="https://aitechnologies.co.in/" target="_blank">AiTechnologies</a></p>
                  </div>
                  <div class="col-xl-4 col-lg-3 order-lg-3">
                    <div class="back-to-top">
                      <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/html5-simple-date-input-polyfill.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>

  </body>
</html>