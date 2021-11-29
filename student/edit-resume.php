<?php
session_start();
ob_start();
include_once('../includes/functions.php');
$function = new functions;
include_once('../includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");

$id = $_SESSION['id'];
if (!isset($id)) {
  header("location:login.php");
}
$sql = "SELECT * FROM student WHERE id = $id";
$db->sql($sql);
$res = $db->getResult();

$about = $res[0]['about'];
$category = $res[0]['category'];
$location = $res[0]['location'];
$job_type = $res[0]['job_type'];
$experience = $res[0]['experience'];
$salary_range = $res[0]['salary_range'];
$gender = $res[0]['gender'];
$age = $res[0]['age'];
$qualification = $res[0]['qualification'];
$skill = $res[0]['skill'];

$edu_designation = $res[0]['edu_designation'];
$edu_institute = $res[0]['edu_institute'];
$edu_period = $res[0]['edu_period'];
$edu_description = $res[0]['edu_description'];

$exp_title = $res[0]['exp_title'];
$exp_company_name = $res[0]['exp_company_name'];
$exp_period = $res[0]['exp_period'];
$exp_description = $res[0]['exp_description'];

$pro_designation = $res[0]['pro_designation'];
$pro_title = $res[0]['pro_title'];
$pro_value = $res[0]['pro_value'];

$spl_qualification = $res[0]['spl_qualification'];

$port_title = $res[0]['port_title'];
$port_image = $res[0]['port_image'];
$port_link = $res[0]['port_link'];

$pd_name = $res[0]['pd_name'];
$pd_father_name = $res[0]['pd_father_name'];
$pd_mother_name = $res[0]['pd_mother_name'];
$pd_dob = $res[0]['pd_dob'];
$pd_nationality = $res[0]['pd_nationality'];
$pd_sex = $res[0]['pd_sex'];
$pd_address = $res[0]['pd_address'];
$pd_age = $res[0]['pd_age'];

$facebook = $res[0]['facebook'];
$twitter = $res[0]['twitter'];
$google = $res[0]['google'];
$linkedin = $res[0]['linkedin'];
$pinterest = $res[0]['pinterest'];
$instagram = $res[0]['instagram'];
$behance = $res[0]['behance'];
$dribbble = $res[0]['dribbble'];
$github = $res[0]['github'];

if (isset($_POST['btnUpdateSocLink'])){
  $facebook = $db->escapeString($_POST['facebook']);
  $twitter = $db->escapeString($_POST['twitter']);
  $google = $db->escapeString($_POST['google']);
  $linkedin = $db->escapeString($_POST['linkedin']);
  $pinterest = $db->escapeString($_POST['pinterest']);
  $instagram = $db->escapeString($_POST['instagram']);
  $behance = $db->escapeString($_POST['behance']);
  $dribbble = $db->escapeString($_POST['dribbble']);
  $github = $db->escapeString($_POST['github']);

  $data = array(
    'facebook' => $facebook,
    'twitter' => $twitter,
    'google' => $google,
    'linkedin' => $linkedin,
    'pinterest' => $pinterest,
    'instagram' => $instagram,
    'behance' => $behance,
    'dribbble' => $dribbble,
    'github' => $github
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }
  

}
if (isset($_POST['btnSkillUpdate'])){
  $skill = $db->escapeString($_POST['skill']);
  $data = array(
    'skill' => $skill
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }
  

}
if (isset($_POST['btnUpdateAbout']))
{
  $about = $db->escapeString($_POST['about']);
  $category = $db->escapeString($_POST['category']);
  $location = $db->escapeString($_POST['location']);
  $job_type = $db->escapeString($_POST['job_type']);
  $experience = $db->escapeString($_POST['experience']);
  $salary_range = $db->escapeString($_POST['salary_range']);
  $gender = $db->escapeString($_POST['gender']);
  $age = $db->escapeString($_POST['age']);
  $qualification = $db->escapeString($_POST['qualification']);
  $data = array(
    'about' => $about,
    'category' => $category,
    'location' => $location,
    'job_type' => $job_type,
    'experience' => $experience,
    'salary_range' => $salary_range,
    'gender' => $gender,
    'age' => $age,
    'qualification' => $qualification
  );

  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnUpdateEdu'])){
  $edu_designation = $db->escapeString($_POST['edu_designation']);
  $edu_institute = $db->escapeString($_POST['edu_institute']);
  $edu_period = $db->escapeString($_POST['edu_period']);
  $edu_description = $db->escapeString($_POST['edu_description']);
  $data = array(
    'edu_designation' => $edu_designation,
    'edu_institute' => $edu_institute,
    'edu_period' => $edu_period,
    'edu_description' => $edu_description
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnExpUpdate'])){
  $exp_title = $db->escapeString($_POST['exp_title']);
  $exp_company_name = $db->escapeString($_POST['exp_company_name']);
  $exp_period = $db->escapeString($_POST['exp_period']);
  $exp_description = $db->escapeString($_POST['exp_description']);
  $data = array(
    'exp_title' => $exp_title,
    'exp_company_name' => $exp_company_name,
    'exp_period' => $exp_period,
    'exp_description' => $exp_description
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnProUpdate'])){
  $pro_designation = $db->escapeString($_POST['pro_designation']);
  $pro_title = $db->escapeString($_POST['pro_title']);
  $pro_value = $db->escapeString($_POST['pro_value']);
  $data = array(
    'pro_designation' => $pro_designation,
    'pro_title' => $pro_title,
    'pro_value' => $pro_value
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }


}
if (isset($_POST['btnSqUpdate'])){
  $spl_qualification = $db->escapeString($_POST['spl_qualification']);
  $data = array(
    'spl_qualification' => $spl_qualification
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }


}
if (isset($_POST['btnPerUpdate'])){
  $pd_name = $db->escapeString($_POST['pd_name']);
  $pd_father_name = $db->escapeString($_POST['pd_father_name']);
  $pd_mother_name = $db->escapeString($_POST['pd_mother_name']);
  $pd_dob = $db->escapeString($_POST['pd_dob']);
  $pd_nationality = $db->escapeString($_POST['pd_nationality']);
  $pd_sex = $db->escapeString($_POST['pd_sex']);
  $pd_address = $db->escapeString($_POST['pd_address']);
  $pd_age = $db->escapeString($_POST['pd_age']);

  $data = array(
    'pd_name' => $pd_name,
    'pd_father_name' => $pd_father_name,
    'pd_mother_name' => $pd_mother_name,
    'pd_dob' => $pd_dob,
    'pd_nationality' => $pd_nationality,
    'pd_sex' => $pd_sex,
    'pd_address' => $pd_address,
    'pd_age' => $pd_age
  );
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnPortUpdate'])){
  $menu_image = $db->escapeString($_FILES['port_image']['name']);
  $port_title = $db->escapeString($_POST['port_title']);
  $port_link = $db->escapeString($_POST['port_link']);

  if (!empty($menu_image)) {
    
    $extension = end(explode(".", $_FILES["port_image"]["name"]));


    // create random image file name
    $string = '0123456789';
    $file = preg_replace("/\s+/", "_", $_FILES['port_image']['name']);
    $menu_image = $function->get_random_string($string, 4) . "-" . date("Y-m-d") . "." . $extension;
  
    // upload new image
    $upload = move_uploaded_file($_FILES['port_image']['tmp_name'], '../upload/images/' . $menu_image);
  
    // insert new data to menu table
    $upload_image = 'upload/images/' . $menu_image;
    $data = array(
      'port_title' => $port_title,
      'port_image' => $upload_image,
      'port_link' => $port_link
    );

  }
  else {
    $port_title = $db->escapeString($_POST['port_title']);
    $port_link = $db->escapeString($_POST['port_link']);
    $data = array(
      'port_title' => $port_title,
      'port_link' => $port_link
    );

  }
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnUpdateCVFile']))
{
  $menu_image = $db->escapeString($_FILES['cvfile']['name']);
  if (!empty($menu_image)) {
    $extension = end(explode(".", $_FILES["cvfile"]["name"]));


    // create random image file name
    $string = '0123456789';
    $file = preg_replace("/\s+/", "_", $_FILES['cvfile']['name']);
    $menu_image = $function->get_random_string($string, 4) . "-" . date("Y-m-d") . "." . $extension;
  
    // upload new image
    $upload = move_uploaded_file($_FILES['cvfile']['tmp_name'], '../upload/images/' . $menu_image);
  
    // insert new data to menu table
    $upload_image = 'upload/images/' . $menu_image;
    $data = array(
      'cv_file' => $upload_image
  );

  }
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
  }

}
if (isset($_POST['btnUpdateCoverFile']))
{
  $menu_image = $db->escapeString($_FILES['coverfile']['name']);
  if (!empty($menu_image)) {
    $extension = end(explode(".", $_FILES["coverfile"]["name"]));


    // create random image file name
    $string = '0123456789';
    $file = preg_replace("/\s+/", "_", $_FILES['coverfile']['name']);
    $menu_image = $function->get_random_string($string, 4) . "-" . date("Y-m-d") . "." . $extension;
  
    // upload new image
    $upload = move_uploaded_file($_FILES['coverfile']['tmp_name'], '../upload/images/' . $menu_image);
  
    // insert new data to menu table
    $upload_image = 'upload/images/' . $menu_image;
    $data = array(
      'cover_letter' => $upload_image
  );

  }
  if($db->update('student', $data, 'id=' . $id)){
    header("location: edit-resume.php");
  
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
                <a href="job-listing.html"><img src="images/logo-2.png" alt=""></a>
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
                  <li class="menu-item active"><a title="Home" href="job-listing.html">Home</a></li>
                  <!-- <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="job-listing.html">Job Listing</a></li>
                      <li class="menu-item"><a  href="job-listing-with-map.html">Job Listing With Map</a></li>
                      <li class="menu-item"><a  href="job-details.html">Job Details</a></li>
                      <li class="menu-item"><a  href="post-job.html">Post Job</a></li>
                    </ul>
                  </li> -->
                  <!-- <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="candidate.html">Candidate Listing</a></li>
                      <li class="menu-item"><a  href="candidate-details.html">Candidate Details</a></li>
                      <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                    </ul>
                  </li> -->
                  <!-- <li class="menu-item dropdown">
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
                          <li class="menu-item"><a  href="dashboard.php">Dashboard</a></li>
                          <li class="menu-item"><a  href="dashboard-edit-profile.php">Edit Profile</a></li>
                          <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                          <li class="menu-item"><a  href="resume.html">Resume</a></li>
                          <li class="menu-item"><a  href="edit-resume.php">Edit Resume</a></li>
                          <li class="menu-item"><a  href="dashboard-bookmark.html">Bookmarked</a></li>
                          <li class="menu-item"><a  href="dashboard-applied.html">Applied</a></li>
                          <li class="menu-item"><a  href="dashboard-pricing.html">Pricing</a></li>
                          <li class="menu-item"><a  href="dashboard-message.html">Message</a></li>
                          <li class="menu-item"><a  href="dashboard-alert.html">Alert</a></li>
                        </ul>
                      <!-- <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="employer-dashboard.php">Employer Dashboard</a></li>
                          <li class="menu-item"><a href="employer-dashboard-edit-profile.php">Edit Profile</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-job.php">Manage Job</a></li>
                          <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                          <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                          <li class="menu-item"><a href="employer-dashboard-post-job.php">Post Job</a></li>
                        </ul>
                      </li> -->
                
                 <!--  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a href="about-us.html">About Us</a></li>
                      <li class="menu-item"><a href="how-it-work.html">How It Works</a></li>
                      <li class="menu-item"><a href="pricing.html">Pricing Plan</a></li>
                      <li class="menu-item"><a href="faq.html">FAQ</a></li>
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">News &amp; Advices</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="blog.html">News</a></li>
                          <li class="menu-item"><a href="blog-grid.html">News Grid</a></li>
                          <li class="menu-item"><a href="blog-details.html">News Details</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                      <li class="menu-item"><a href="payment-complete.html">Payment Complete</a></li>
                      <li class="menu-item"><a href="invoice.html">Invoice</a></li>
                      <li class="menu-item"><a href="terms-and-condition.html">Terms And Condition</a></li>
                      <li class="menu-item"><a href="404.html">404 Page</a></li>
                      <li class="menu-item"><a href="login.php">Login</a></li>
                      <li class="menu-item"><a href="register.php">Register</a></li>
                    </ul>
                  </li> -->
                  <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                 <!--  <li class="menu-item post-job"><a href="post-job.html"><i class="fas fa-plus"></i>Post a Job</a></li> -->
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
              <h1>Edit Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="job-listing.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Resume</li>
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
              <form method="post" enctype="multipart/form-data" class="dashboard-form">
              <div class="download-resume dashboard-section">
                
                  <div class="update-file">
                    <input name="cvfile" type="file">Update CV <i data-feather="edit-2"></i>
                  </div>
                  <div class="update-file">
                    <input name="coverfile" type="file">Update Cover Letter <i data-feather="edit-2"></i>
                  </div>
                  <div class="call-to-action-button">
                  <button  name="btnUpdateCVFile" type="submit" class="button">Upload CV</button>
                  <button  name="btnUpdateCoverFile" type="submit" class="button">Upload Cover</button>
              </div>
                  
                  
                  
                </div>
              </form>
                
                <div class="skill-and-profile dashboard-section">
                  <div class="skill">
                    <label>Skills:</label>
                    <a href="#"><?php echo  $skill ?></a>
                    <!-- <a href="#">Illustration</a>
                    <a href="#">iOS</a> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-skill">
                      <i data-feather="edit-2"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-skill" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>MY SKILL</h4>
                              <!-- <a href="#" class="add-more">+ Add Skills</a> -->
                            </div>
                            <div class="content">
                              <form method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Type Skills</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">01</div>
                                      </div>
                                      <input name="skill" type="text" class="form-control" value="<?php echo  $skill ?>">
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">02</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">03</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">04</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">05</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">06</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div> -->
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      <button  name="btnSkillUpdate" type="submit" class="primary-bg">Save Update</button>
                                      
                                      <button class="" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="social-profile">
                    <label>Social:</label>
                    <a href="<?php echo  $facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo  $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="<?php echo  $google ?>" target="_blank"><i class="fab fa-google-plus"></i></a>
                    <a href="<?php echo  $linkedin ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?php echo  $pinterest ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href="<?php echo  $behance ?>" target="_blank"><i class="fab fa-behance"></i></a>
                    <a href="<?php echo  $dribbble ?>" target="_blank"><i class="fab fa-dribbble"></i></a>
                    <a href="<?php echo  $github ?>" target="_blank"><i class="fab fa-github"></i></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-social">
                      <i data-feather="edit-2"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-social" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>Social Networks</h4>
                              <!-- <a href="#" class="add-more">+ Add Social</a> -->
                            </div>
                            <div class="content">
                              <form method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Social Links</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                      </div>
                                      <input name="facebook" type="text" class="form-control"  placeholder="facebook.com/username" value="<?php echo  $facebook ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                      </div>
                                      <input name="twitter" type="text" class="form-control"  placeholder="twitter.com/username" value="<?php echo  $twitter ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
                                      </div>
                                      <input name="google" type="text" class="form-control"  placeholder="google.com/username" value="<?php echo  $google ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-linkedin-in"></i></div>
                                      </div>
                                      <input name="linkedin" type="text" class="form-control"  placeholder="linkedin.com/username" value="<?php echo  $linkedin ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-pinterest-p"></i></div>
                                      </div>
                                      <input name="pinterest" type="text" class="form-control"  placeholder="pinterest.com/username" value="<?php echo  $pinterest ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                      </div>
                                      <input name="instagram" type="text" class="form-control"  placeholder="instagram.com/username" value="<?php echo  $instagram ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-behance"></i></div>
                                      </div>
                                      <input name="behance" type="text" class="form-control"  placeholder="behance.com/username" value="<?php echo  $behance ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-dribbble"></i></div>
                                      </div>
                                      <input name="dribbble" type="text" class="form-control"  placeholder="dribbble.com/username" value="<?php echo  $dribbble ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-github"></i></div>
                                      </div>
                                      <input name="github" type="text" class="form-control"  placeholder="github.com/username" value="<?php echo  $github ?>">
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text dropdown-label">
                                          <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Select</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select><i class="fa fa-caret-down"></i>
                                        </div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="Input Profile Link">
                                    </div>
                                  </div>
                                </div> -->
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      
                                      <button  name="btnUpdateSocLink" type="submit" class="primary-bg">Save Update</button>
                                      <button class="" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="about-details details-section dashboard-section">
                  <h4><i data-feather="align-left"></i>About Me</h4>
                  <p><?php echo  $about ?></p>
                  
                  <div class="information-and-contact">
                    <div class="information">
                      <h4>Information</h4>
                      <ul>
                        <li><span>Category:</span> <?php echo  $category ?></li>
                        <li><span>Location:</span> <?php echo  $location ?></li>
                        <li><span>Job Type:</span> <?php echo  $job_type ?></li>
                        <li><span>Experience:</span> <?php echo  $experience ?> year(s)</li>
                        <li><span>Salary:</span> <?php echo  $salary_range ?></li>
                        <li><span>Gender:</span> <?php echo  $gender ?></li>
                        <li><span>Age:</span> <?php echo  $age ?> Year(s)</li>
                        <li><span>Qualification:</span> <?php echo  $qualification ?></li>
                      </ul>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-about-me">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-about-me" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>About Me</h4>
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Write Yourself</label>
                                <div class="col-sm-9">
                                  <textarea name="about" class="form-control" placeholder="Write Yourself"><?php echo  $about ?></textarea>
                                </div>
                              </div>
                              <h4><i data-feather="align-left"></i>Information</h4>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                  <input name="category" type="text" class="form-control"  placeholder="Design &amp; Creative" value="<?php echo  $category ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                  <input name="location" type="text" class="form-control"  placeholder="Los Angeles" value="<?php echo  $location ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Job Type</label>
                                <div class="col-sm-9">
                                    <select name="job_type" class="form-control">
                                    <option>Job Type</option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                    <option>Temperory</option>
                                    <option>Permanent</option>
                                    <option>Freelance</option>
                                  </select>
                                  
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Experience</label>
                                <div class="col-sm-9">
                                  <input name="experience" type="text" class="form-control"  placeholder="3 Year" value="<?php echo  $experience ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Salary Range</label>
                                <div class="col-sm-9">
                                  <input name="salary_range" type="text" class="form-control"  placeholder="30k - 40k" value="<?php echo  $salary_range ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                  <input name="gender" type="text" class="form-control"  placeholder="Male" value="<?php echo  $gender ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                  <input name="age" type="text" class="form-control"  placeholder="25 Years" value="<?php echo  $age ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Qualification</label>
                                <div class="col-sm-9">
                                  <input name="qualification" type="text" class="form-control"  placeholder="Gradute" value="<?php echo  $qualification ?>">
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button  name="btnUpdateAbout" type="submit" class="primary-bg">Save Update</button>
                                    
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="edication-background details-section dashboard-section">
                  <h4><i data-feather="book"></i>Education Background</h4>
                  <div class="education-label">
                    <span class="study-year"><?php echo  $edu_period ?></span>
                    <h5><?php echo  $edu_designation ?><span>@ <?php echo  $edu_institute ?></span></h5>
                    <p><?php echo  $edu_description ?></p>
                  </div>
                  
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-education">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-education" id="modal-education" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="book"></i>Education</h4>
                            <!-- <a href="#" class="add-more">+ Add Education</a> -->
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input name="edu_designation" type="text" class="form-control" value="<?php echo  $edu_designation ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Institute</div>
                                      </div>
                                      <input name="edu_institute" type="text" class="form-control" value="<?php echo  $edu_institute ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input name="edu_period" type="text" class="form-control" value="<?php echo  $edu_period ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea name="edu_description" class="form-control" >  <?php echo  $edu_description ?> </textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Institute</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    
                                    <button  name="btnUpdateEdu" type="submit" class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                  <div class="experience-section">
                    <span class="service-year"><?php echo  $exp_period ?></span>
                    <h5><?php echo  $exp_title ?><span>@ <?php echo  $exp_company_name ?></span></h5>
                    <p><?php echo  $exp_description ?></p>
                  </div>
                  <!-- <div class="experience-section">
                    <span class="service-year">2012 - 2016</span>
                    <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                  </div> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-experience">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-experience" id="modal-experience" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="briefcase"></i>Experience</h4>
                            <!-- <a href="#" class="add-more">+ Add Experience</a> -->
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="input-block-wrap">
                                <!-- <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div> -->
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">TITLE</div>
                                      </div>
                                      <input  name="exp_title" type="text" class="form-control" value="<?php echo  $exp_title ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Company</div>
                                      </div>
                                      <input  name="exp_company_name" type="text" class="form-control" value="<?php echo  $exp_company_name ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input  name="exp_period" type="text" class="form-control" value="<?php echo  $exp_period ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea name="exp_description" class="form-control"><?php echo  $exp_description ?></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Company</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button  name="btnExpUpdate" type="submit" class="button">Save Update</button>
                                    
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>Professional Skill</h4>
                  <p><?php echo  $pro_designation ?></p>
                  <div class="progress-group">
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on"><?php echo  $pro_title ?></p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo  $pro_value ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to"><?php echo  $pro_value ?>%</p>
                      </div>
                    </div>
                    <!-- <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">HTML/CSS</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">90%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">JavaScript</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">74%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">PHP</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">86%</p>
                      </div>
                    </div> -->
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-pro-skill">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-pro-skill" id="modal-pro-skill" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="feather"></i>Professional Skill</h4>
                            <!-- <a href="#" class="add-more">+ Add Skill</a> -->
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">About Skill</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea name="pro_designation" class="form-control"><?php echo  $pro_designation ?></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input name="pro_title" type="text" class="form-control" value="<?php echo  $pro_title ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input name="pro_value" type="text" class="form-control" value="<?php echo  $pro_value ?>" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 04</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    
                                    <button  name="btnProUpdate" type="submit" class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="special-qualification dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Special Qualification</h4>
                  <ul>
                    <li><?php echo  $spl_qualification ?></li>
                    <!-- <li>Skilled at any Kind Design Tools.</li>
                    <li>Passion for people-centered design, solid intuition.</li>
                    <li>Hard Worker & Quick Lerner.</li> -->
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-qualification">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-qualification" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>Special Qualification</h4>
                            <!-- <a href="#" class="add-more">+ Add Another</a> -->
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Type Here</label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">01</div>
                                    </div>
                                    <input name="spl_qualification" type="text" class="form-control" value="<?php echo  $spl_qualification ?>" >
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">02</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">03</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">04</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">05</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    
                                    <button  name="btnSqUpdate" type="submit" class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portfolio dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Portfolio</h4>
                  <div class="portfolio-slider owl-carousel">
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-portfolio">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-portfolio" id="modal-portfolio" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="grid"></i>Portfolio</h4>
                            <!-- <a href="#" class="add-more">+ Add Another</a> -->
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input name="port_title" type="text" class="form-control" value="<?php echo  $port_title ?>" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="../<?php echo  $port_image ?>" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input name="port_image" type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input name="port_link" type="text" class="form-control" value="<?php echo  $port_link ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    
                                    <button  name="btnPortUpdate" type="submit" class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="personal-information dashboard-section last-child details-section">
                  <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                  <ul>
                    <li><span>Full Name:</span> <?php echo  $pd_name ?></li>
                    <li><span>Father's Name:</span> <?php echo  $pd_father_name ?></li>
                    <li><span>Mother's Name:</span> <?php echo  $pd_mother_name ?></li>
                    <li><span>Date of Birth:</span> <?php echo  $pd_dob ?></li>
                    <li><span>Nationality:</span> <?php echo  $pd_nationality ?></li>
                    <li><span>Sex:</span> <?php echo  $pd_sex ?></li>
                    <li><span>Address:</span> <?php echo  $pd_address ?></li>
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-personal-details">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-personal-details" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="user-plus"></i>Personal Details</h4>
                          </div>
                          <div class="content">
                            <form method="post" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                  <input name="pd_name" type="text" class="form-control"  placeholder="Micheal N. Taylor" value="<?php echo  $pd_name ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Father’s Name</label>
                                <div class="col-sm-9">
                                  <input name="pd_father_name" type="text" class="form-control"  placeholder="Howard Armour" value="<?php echo  $pd_father_name ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mother’s Name</label>
                                <div class="col-sm-9">
                                  <input name="pd_mother_name" type="text" class="form-control"  placeholder="Megan Higbee" value="<?php echo  $pd_mother_name ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date Of Birth</label>
                                <div class="col-sm-9">
                                  <input name="pd_dob" type="text" class="form-control"  placeholder="22/08/1992" value="<?php echo  $pd_dob ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                  <input name="pd_nationality" type="text" class="form-control"  placeholder="American" value="<?php echo  $pd_nationality ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                  <input name="pd_sex" type="text" class="form-control"  placeholder="Male" value="<?php echo  $pd_sex ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                  <input name="pd_age" type="text" class="form-control"  placeholder="25 Years" value="<?php echo  $pd_age ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                  <input name="pd_address" type="text" class="form-control"  placeholder="2018 Nelm Street, Beltsville, VA 20705" value="<?php echo  $pd_address ?>">
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    
                                    <button  name="btnPerUpdate" type="submit" class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dashboard-sidebar">
                <div class="user-info">
                  <div class="thumb">
                    <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="user-body">
                    <h5>Lula Wallace</h5>
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
                    <li><i class="fas fa-home"></i><a href="dashboard.php">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.php">Edit Profile</a></li>
                    <li><i class="fas fa-file-alt"></i><a href="resume.html">Resume</a></li>
                    <li class="active"><i class="fas fa-edit"></i><a href="edit-resume.php">Edit Resume</a></li>
                    <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
                    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
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
                              <button class="" data-dismiss="modal">Cancel</button>
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
                <h2>Find Your Dream Job or Candidate</h2>
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
                    <p class="copyright-text">Copyright Lewansys 2021, All right reserved. <br> Designed And Developed by <a href="https://aitechnologies.co.in/" target="_blank">AiTechnologies</a>.</p>
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

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>
</html>