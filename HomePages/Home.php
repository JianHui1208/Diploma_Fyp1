<?php
require_once "config.php";
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="google.css">
    <link href="../mario.png" rel="icon">
</head>

<body>
    <div class="navbar">
        <a href="#news" class="a1" style="color: #ffffff">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stickies-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z" />
                <path fill-rule="evenodd"
                    d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z" />
            </svg>
            Notice</a>
        <div class="dropdown">
            <button class="dropbtn">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                    <path
                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                </svg>
                Branch Company
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <div class="header">
                    <h2>Branch Company Situation</h2>
                </div>
                <div class="row">
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Malaysia</h3>
                        <a href="../graph/grahp_M.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_M_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_M_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_M_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_M_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_M_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Taiwan</h3>
                        <a href="../graph/grahp_Tai.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_Tai_F.php" style="color: #000000">Financial
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tai_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_Tai_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_Tai_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tai_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">China</h3>
                        <a href="../graph/grahp_C.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_C_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_C_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_C_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_C_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_C_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Thailand</h3>
                        <a href="../graph/grahp_Tha.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_Tha_F.php" style="color: #000000">Financial
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tha_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_Tha_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_Tha_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_Tha_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h3 style="text-align: center; padding-bottom: 10px;">Singapore</h3>
                        <a href="../graph/grahp_S.php" style="color: #000000">Sales Order Analysis</a>
                        <div class="dropdown_Department">
                            <button class="dropbtn_Department">Department</button>
                            <div class="dropdown_content_Department">
                                <a href="../Flowchart/flowchart_S_F.php" style="color: #000000">Financial Department</a>
                                <a href="../Flowchart/flowchart_S_HR.php" style="color: #000000">Human Resourse
                                    Departments</a>
                                <a href="../Flowchart/flowchart_S_IT.php" style="color: #000000">Information and
                                    Technology Department</a>
                                <a href="../Flowchart/flowchart_S_M.php" style="color: #000000">Maintenance
                                    Department</a>
                                <a href="../Flowchart/flowchart_S_Ma.php" style="color: #000000">Marketing
                                    Department</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-right links">
            <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
			?>
            <a href="../AccountSystem1/welcome.php" class="a1" style="color: #ffffff">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg>
                Home</a>
            <?php
                }else{
			?>
            <a href="../AccountSystem1/login.php" class="a1" style="color: #ffffff">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                </svg>
                Login</a>
            <?php
                }
            ?>
        </div>
    </div>
    <br><br>
    <table style="margin: auto;">
        <tr>
            <td colspan="2">
                <div class="slideshow-container" style="text-align:center">
                    <div class="mySlides fade">
                        <img src="1.jpg" style="width:70%">
                    </div>

                    <div class="mySlides fade">
                        <img src="2.png" style="width:70%">
                    </div>

                    <div class="mySlides fade">
                        <img src="3.png" style="width:70%">
                    </div>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <script>
                    var slideIndex = 0;
                    showSlides();
                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) { slideIndex = 1 }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 2000); // Change image every 2 seconds
                    }
                </script>
            </td>
            
        </tr>
        <tr style="height: 50px"></tr>
        <tr>
            <td>
                <div class="news">
                    <div class="title" style="text-align:center"><a href="#">Company News</a></div>
                    <div class="images1">
                        <div class="images2"><img src="220.jpg" width="188"></div>
                        </div>
                    <span class="content">Google Inc. was founded on September 4, 1998, co-founded by Larry Page and Sergey Brin, and is recognized as the world's largest search engine company. Google is a multinational technology company based in the United States. Its business includes Internet search, cloud computing, and advertising technology. It also develops and provides a large number of Internet-based products and services. Its main profits come from advertising services such as AdWords.</span>
                </div>
            </td>
            <td style="text-align:center"><iframe width="560" height="315" src="https://www.youtube.com/embed/OK_JCtrrv-c" frameborder="0"
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
        </tr>
    </table>
    <br><br>
    <footer class="footer" data-about-footer="" data-ng-class="{'footer--hidden': footerCtrl.footerHidden}">
        <div class="main">
            <div class="main-inner">
                <section class="social" data-gtm-vis-recent-on-screen-1691437_111="19045"
                    data-gtm-vis-first-on-screen-1691437_111="19045" data-gtm-vis-total-visible-time-1691437_111="100"
                    data-gtm-vis-has-fired-1691437_111="1">
                    <div class="social-inner">
                        <h2>Follow us on:</h2>
                        <ul>
                            <li>
                                <a href="https://instagram.com" target="_blank" aria-label="Instagram"
                                    data-g-category="footer" data-g-action="follow us" data-g-label="Instagram"
                                    data-g-href="https://instagram.com">
                                    <svg alt="Instagram" class="" xmlns="http://www.w3.org/2000/svg" width="24px"
                                        height="24px" viewBox="0 0 24 24" fill="#000">
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank" aria-label="YouTube"
                                    data-g-category="footer" data-g-action="follow us" data-g-label="YouTube"
                                    data-g-href="https://www.youtube.com">
                                    <svg alt="YouTube" class="" xmlns="http://www.w3.org/2000/svg" width="24px"
                                        height="24px" viewBox="0 0 24 24" fill="#000">
                                        <path
                                            d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com" target="_blank" aria-label="Twitter"
                                    data-g-category="footer" data-g-action="follow us" data-g-label="Twitter"
                                    data-g-href="https://twitter.com">
                                    <svg alt="Twitter" class="" xmlns="http://www.w3.org/2000/svg" width="24px"
                                        height="24px" viewBox="0 0 24 24" fill="#000">
                                        <path
                                            d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com" target="_blank" aria-label="Facebook"
                                    data-g-category="footer" data-g-action="follow us" data-g-label="Facebook"
                                    data-g-href="https://www.facebook.com">
                                    <svg alt="Facebook" class="" xmlns="http://www.w3.org/2000/svg" width="24px"
                                        height="24px" viewBox="0 0 24 24" fill="#000">
                                        <path
                                            d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="sitemap" data-gtm-vis-has-fired-1691437_111="1">
                    <ul class="cols-row footer-links glue-zippy-set-single" id="footer-sitemap-links">
                        <li id="footer-sitemap-about" class="glue-zippy glue-a-zippy--v-smooth-expand glue-c-zippy">
                            <h2 class="glue-zippy-btn glue-c-zippy__btn" tabindex="0" aria-expanded="false"
                                aria-controls="footer-sitemap-about-content">More about us
                                <svg alt="" class="icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24">
                                    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="currentcolor"></path>
                                </svg>

                            </h2>
                            <div class="glue-zippy-content glue-c-zippy__content">
                                <div glue-collapse="zippyCtrl.collapsed" role="region"
                                    class="glue-c-zippy__collapse-region glue-collapse-collapsed" data-min-height="0"
                                    aria-expanded="false" id="footer-sitemap-about-content">
                                    <div class="glue-c-zippy__content-container" ng-transclude="">
                                        <ul class="links-list">
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="more about us" data-g-label="Contact us"
                                                    data-g-href="#" tabindex="0">
                                                    Contact us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="more about us" data-g-label="Investor relations"
                                                    data-g-href="#" tabindex="0">
                                                    Investor relations
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="more about us" data-g-label="Careers" data-g-href="#"
                                                    tabindex="0">
                                                    Careers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="more about us" data-g-label="Locations"
                                                    data-g-href="#" tabindex="0">
                                                    Locations
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="footer-sitemap-related" class="glue-zippy glue-a-zippy--v-smooth-expand glue-c-zippy">
                            <h2 class="glue-zippy-btn glue-c-zippy__btn" tabindex="0" aria-expanded="false"
                                aria-controls="footer-sitemap-related-content">Press room
                                <svg alt="" class="icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24">
                                    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="currentcolor"></path>
                                </svg>
                            </h2>
                            <div class="glue-zippy-content glue-c-zippy__content">
                                <div glue-collapse="zippyCtrl.collapsed" role="region"
                                    class="glue-c-zippy__collapse-region glue-collapse-collapsed" data-min-height="0"
                                    aria-expanded="false" id="footer-sitemap-related-content">
                                    <div class="glue-c-zippy__content-container" ng-transclude="">
                                        <ul class="links-list">
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="related information" data-g-label="Press inquiries"
                                                    data-g-href="#" tabindex="0">
                                                    Press inquiries
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="related information"
                                                    data-g-label="Images &amp; B-roll" data-g-href="#" tabindex="0">
                                                    Images &amp; B-roll
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="related information" data-g-label="Permissions"
                                                    data-g-href="#" tabindex="0">
                                                    Permissions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="related information" data-g-label="Speaker requests"
                                                    data-g-href="#" tabindex="0">
                                                    Speaker requests
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="footer-sitemap-policy-content"
                            class="glue-zippy glue-a-zippy--v-smooth-expand glue-c-zippy">
                            <h2 class="glue-zippy-btn glue-c-zippy__btn" tabindex="0" aria-expanded="false"
                                aria-controls="footer-sitemap-policy-content-content">Policy
                                <svg alt="" class="icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24">
                                    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="currentcolor"></path>
                                </svg>
                            </h2>
                            <div class="glue-zippy-content glue-c-zippy__content">
                                <div glue-collapse="zippyCtrl.collapsed" role="region"
                                    class="glue-c-zippy__collapse-region glue-collapse-collapsed" data-min-height="0"
                                    aria-expanded="false" id="footer-sitemap-policy-content-content">
                                    <div class="glue-c-zippy__content-container" ng-transclude="">
                                        <ul class="links-list">
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="policy" data-g-label="Application security"
                                                    data-g-href="#" tabindex="0">
                                                    Application security
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="policy" data-g-label="Software principles"
                                                    data-g-href="#" tabindex="0">
                                                    Software principles
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="policy" data-g-label="Unwanted software policy"
                                                    data-g-href="#" tabindex="0">
                                                    Unwanted software policy
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="policy" data-g-label="Responsible supply chain"
                                                    data-g-href="#" tabindex="0">
                                                    Responsible supply chain
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="social-responsibility" class="glue-zippy glue-a-zippy--v-smooth-expand glue-c-zippy">
                            <h2 class="glue-zippy-btn glue-c-zippy__btn" tabindex="0" aria-expanded="false"
                                aria-controls="social-responsibility-content">Responsibility
                                <svg alt="" class="icon" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                    viewBox="0 0 24 24">
                                    <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" fill="currentcolor"></path>
                                </svg>
                            </h2>
                            <div class="glue-zippy-content glue-c-zippy__content">
                                <div glue-collapse="zippyCtrl.collapsed" role="region"
                                    class="glue-c-zippy__collapse-region glue-collapse-collapsed" data-min-height="0"
                                    aria-expanded="false" id="social-responsibility-content">
                                    <div class="glue-c-zippy__content-container" ng-transclude="">
                                        <ul class="links-list">
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="responsibility" data-g-label="#" data-g-href="#"
                                                    tabindex="0">
                                                    Company.org
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="responsibility" data-g-label="Sustainability"
                                                    data-g-href="#" tabindex="0">
                                                    Sustainability
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="responsibility" data-g-label="Crisis response"
                                                    data-g-href="#" tabindex="0">
                                                    Crisis Response
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" data-g-category="footer"
                                                    data-g-action="responsibility"
                                                    data-g-label="Diversity &amp; Inclusion" data-g-href="#"
                                                    tabindex="0">
                                                    Diversity &amp; Inclusion
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="foot" data-gtm-vis-has-fired-1691437_111="1"
                    data-gtm-vis-recent-on-screen-1691437_805="38523" data-gtm-vis-first-on-screen-1691437_805="38523"
                    data-gtm-vis-total-visible-time-1691437_805="100" data-gtm-vis-has-fired-1691437_805="1">
                    <ul class="bottom-links">
                        <li>
                            <a href="#" target="_blank" data-g-category="footer" data-g-action="navigation"
                                data-g-label="Help" data-g-href="#">
                                <svg alt="" class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="20px"
                                    height="20px" viewBox="0 0 24 24" fill="#000">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                                    </path>
                                </svg>
                                Help
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank" data-g-category="footer" data-g-action="navigation"
                                data-g-label="Privacy" data-g-href="#">
                                Privacy
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank" data-g-category="footer" data-g-action="navigation"
                                data-g-label="Terms" data-g-href="#">
                                Terms
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </footer>
</body>

</html>