<?php
require_once './header.php';
if($_SESSION['admin']!='Admin')
{
    echo "<script>
        alert('Error, Access Denied ');
        window.location='../'
        </script>";
}
require_once './topmenu.php';
?>

    <!-- Page Content -->
    <main id="main">

        <!-- Breadcrumbs-->
        <div class="bg-white border-bottom py-3 mb-5">
          <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
            <nav class="mb-0" aria-label="breadcrumb">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
          </nav>
          <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <!-- <a class="btn btn-sm btn-primary" href="#"><i class="ri-add-circle-line align-bottom"></i> New Project</a>
            <a class="btn btn-sm btn-primary-faded ms-2" href="#"><i class="ri-settings-3-line align-bottom"></i> Settings</a>
            <a class="btn btn-sm btn-secondary-faded ms-2 text-body" href="#"><i class="ri-question-line align-bottom"></i> Help</a> -->
          </div>
          </div>
        </div>        <!-- / Breadcrumbs-->

        <!-- Content-->
        <section class="container-fluid">

            <!-- Page Title-->
            <h2 class="fs-3 fw-bold mb-2">Welcome back, Admin👋</h2>
            <!-- <p class="text-muted mb-5">Get a quick overview of your company's current status below, or click into one of the sections for a more detailed breakdown.</p> -->
            <!-- / Page Title-->

            <!-- Top Row Widgets-->
            <div class="row g-4">       
           
        
    

                <!-- Latest Orders-->
                <div class="col-12">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Latest orders</h6>
                            <!-- <a href="#" class="btn btn-outline-secondary btn-sm text-body"><i class="ri-download-2-line align-middle"></i> Export</a> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table m-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Billing Name</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Items</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1234-5679</span>
                                            </td>
                                            <td>Patria Nelson</td>
                                            <td class="text-muted">24th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-0">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1235-7755</span>
                                            </td>
                                            <td>Dominic Patterson</td>
                                            <td class="text-muted">22nd June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-1">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1236-6579</span>
                                            </td>
                                            <td>Steven Smith</td>
                                            <td class="text-muted">21st June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-paypal-line ri-lg me-2"></i> **** 7766
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-danger-faded text-danger">cancelled</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-2">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1237-1122</span>
                                            </td>
                                            <td>Courtney Lawes</td>
                                            <td class="text-muted">19th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-mastercard-fill ri-lg me-2"></i> **** 9087
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-3" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-3">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1238-4433</span>
                                            </td>
                                            <td>Haley Jackson</td>
                                            <td class="text-muted">19th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-visa-line ri-lg me-2"></i> **** 6789
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-success-faded text-success">completed</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-4" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-4">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bolder">#1239-8865</span>
                                            </td>
                                            <td>Sairaj Tackoo</td>
                                            <td class="text-muted">18th June, 2021</td>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ri-mastercard-fill ri-lg me-2"></i> **** 1233
                                                </div>
                                            </td>
                                            <td class="text-muted">5</td>
                                            <th class="text-muted">$123.99</th>
                                            <td><span class="badge rounded-pill bg-info-faded text-info">processing</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                                        id="dropdownOrder-5" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown" aria-labelledby="dropdownOrder-5">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>    
                            <nav>
                                <ul class="pagination justify-content-end mt-3 mb-0">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
                <!-- Latest Orders-->

            </div>
            <!-- / Middle Row Widgets-->

            <!-- Bottom Row Widgets-->
            <div class="row g-4 mb-5">

                <!-- Top Products-->
                <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Categories</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownTop">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table m-0">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <!-- <img class="f-w-12 rounded" src="./assets/images/logos/logo-13.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket"> -->
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Nike Mens Running Shoes</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <!-- <span class="fw-bolder me-3">£834.98</span> -->
                                                <span class="badge bg-transparent text-success d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <!-- <img class="f-w-12 rounded" src="./assets/images/logos/logo-15.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket"> -->
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Adidas Womens Jackets</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <!-- <span class="fw-bolder me-3">£695.54</span> -->
                                                <span class="badge bg-transparent text-success d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <picture>
                                                <!-- <img class="f-w-12 rounded" src="./assets/images/logos/logo-14.svg"
                                                    alt="HTML Bootstrap Admin Template by Pixel Rocket"> -->
                                            </picture>
                                        </td>
                                        <td class="d-none d-xl-table-cell">
                                            <span class="text-muted">Under Armour Golf Shorts</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-end">
                                                <!-- <span class="fw-bolder me-3">£313.18</span> -->
                                                <span class="badge bg-transparent text-danger d-flex align-items-center ">
                                                    <span class="f-w-4 d-block">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                    </span>
                                                </span>                        </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <div class="progress f-w-20 m-0 me-0 ms-auto f-h-1">
                                                <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-outline-secondary btn-sm text-body me-0 ms-auto d-table mt-3 pb-2" role="button">See all &rarr;</a>
                        </div>
                    </div>                </div>
                <!-- Top Products-->

                <!-- Newsletter Stats-->
                <div class="col-12 col-lg-6">
                    <div class="card mb-4 h-100">
                        <div class="card-header justify-content-between align-items-center d-flex">
                            <h6 class="card-title m-0">Poducts</h6>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-icon fw-bold p-0" type="button"
                                    id="dropdownNewsletter" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown" aria-labelledby="dropdownNewsletter">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <h4 class="fs-3 fw-bold mb-3">$123,778</h4> -->
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                    aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="Gross sales"></div>
                                <div class="progress-bar opacity-75" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Net sales"></div>
                                <div class="progress-bar opacity-50" role="progressbar" style="width: 35%" aria-valuenow="35"
                                    aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Total profit"></div>
                            </div>
                    
                            <table class="table mb-0 mt-4">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block"></span>
                                                <span class="text-muted ms-2">Gross sales</span>
                                            </div>
                                        </td>
                                        <!-- <td><span class="fw-bolder">$3,289.99 <span class="text-muted">(54.3%)</span></span></td> -->
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-success d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block opacity-75"></span>
                                                <span class="text-muted ms-2">Net sales</span>
                                            </div>
                                        </td>
                                        <!-- <td><span class="fw-bolder">$1,758.99 <span class="text-muted">(32.3%)</span></span></td> -->
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-danger d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="f-w-2 f-h-2 rounded-circle bg-primary d-block opacity-50"></span>
                                                <span class="text-muted ms-2">Total profit</span>
                                            </div>
                                        </td>
                                        <!-- <td><span class="fw-bolder">$699.54  <span class="text-muted">(12.3%)</span></span></td> -->
                                        <td class="text-end">
                                            <span class="badge bg-transparent text-success d-flex align-items-center justify-content-end">
                                                <span class="f-w-4 d-block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-100"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </span>
                                            </span>                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Newsletter Stats-->

            </div>
            <!-- / Bottom Row Widgets-->

            <!-- Footer -->
            <footer class="  footer">
                <p class="small text-muted m-0">All rights reserved | © 2021</p>
                <p class="small text-muted m-0">Template created by <a href="https://www.pixelrocket.store/">PixelRocket</a></p>
            </footer>
            
            
            <!-- Sidebar Menu Overlay-->
            <div class="menu-overlay-bg"></div>
            <!-- / Sidebar Menu Overlay-->
            
            <!-- Modal Imports-->
            <!-- Place your modal imports here-->
            
            <!-- Default Example Modal Import-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Here goes modal body content
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Offcanvas Imports-->
            <!-- Place your offcanvas imports here-->
            
            <!-- Default Example Offcanvas Import-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                  </div>
                  <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                      Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <!-- Activity Offcanvas Import-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
              <div class="offcanvas-header d-flex align-items-center justify-content-between">
                <h5 class="offcanvas-title" id="offcanvasActivityLabel">Activity</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="list-group list-group-flush">
            
                    <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                          <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-7.jpeg" alt="">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex flex-column flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                          <p class="fw-semibold mb-0 me-3">John Doe</p>
                          <span class="small d-block text-muted fw-bolder">5m ago</span>
                        </div>
                        <span class="small d-block text-muted">Submitted quarterly marketing report for review.</span>
                          <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                            <div class="d-flex align-items-start me-3">
                              <i class="ri-file-word-line ri-2x lh-1 me-2 text-primary"></i>
                              <div>
                                <span class="d-block fw-bolder small">Year End Report</span>
                                <span class="text-muted d-block fs-xs">24KB</span>
                              </div>
                            </div>
                          </div>
                      </div>
                    </li>
                    <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                          <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg" alt="">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex flex-column flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                          <p class="fw-semibold mb-0 me-3">Sally Field</p>
                          <span class="small d-block text-muted fw-bolder">1h ago</span>
                        </div>
                        <span class="small d-block text-muted">Marked project status as completed.</span>
                      </div>
                    </li>
                    <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                          <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg" alt="">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex flex-column flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                          <p class="fw-semibold mb-0 me-3">Mark Robinson</p>
                          <span class="small d-block text-muted fw-bolder">2h ago</span>
                        </div>
                        <span class="small d-block text-muted">Created 2 new products in Mens Shoes</span>
                          <div class="bg-light border rounded-md p-2 mt-2 d-flex justify-content-start align-items-start">
                            <picture class="me-2">
                              <img class="f-w-12 rounded" src="./assets/images/1.png"
                                alt="">
                            </picture>
                            <picture>
                              <img class="f-w-12 rounded" src="./assets/images/3.png"
                                alt="">
                            </picture>
                          </div>
                      </div>
                    </li>
                    <li class="list-group-item pt-0 pb-5 list-group-activity d-flex align-items-start">
                      <div class="avatar avatar-xs me-3 flex-shrink-0">
                        <picture>
                          <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg" alt="">
                        </picture>
                        <span class="avatar-dot bg-success"></span>
                      </div>
                      <div class="d-flex flex-column flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                          <p class="fw-semibold mb-0 me-3">Jeffrey Way</p>
                          <span class="small d-block text-muted fw-bolder">6h ago</span>
                        </div>
                        <span class="small d-block text-muted">Set user status as &#x27;offline&#x27;</span>
                      </div>
                    </li>
            
                </ul>
                <a href="#" class="btn btn-outline-secondary btn-sm text-body d-flex align-items-center justify-content-center py-3 mb-4">
                  <span class="f-w-4 text-muted d-block me-2">
                    <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </span>
                  View All Activity
                </a>
              </div>
            </div>
            <!-- Message Offcanvas Import-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMessage" aria-labelledby="offcanvasMessageLabel">
                <div class="offcanvas-header position-relative">
                  <div class="d-flex flex-column w-100">
                    <h5 class="offcanvas-title mb-3" id="offcanvasMessageLabel">Company Meetup</h5>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="avatar-group me-4">
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-2.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <picture class="avatar-group-img">
                            <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                            alt="HTML Bootstrap Admin Template by Pixel Rocket">
                        </picture>
                        <span class="small fw-bolder ms-2 text-muted opacity-90">+ 12 others</span>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle dropdown-toggle-icon p-0" type="button"
                            id="dropdownTop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-settings-3-line text-muted ri-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown" aria-labelledby="dropdownTop">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    </div>
                  </div>
                  <button type="button" class="btn-close text-reset position-absolute top-20 end-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-100 d-flex justify-content-between flex-column pb-0">
                  <div class="overflow-auto py-4">
                    <div class="overflow-hidden">
                      <!-- Messages-->
                      <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                          <div class="avatar avatar-xs me-3 flex-shrink-0">
                              <picture>
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                          <div class="d-flex justify-content-start flex-column align-items-start col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 2 mins ago</small>
                              <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                              </div>
                          </div>
                      </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                          <div class="d-flex justify-content-end flex-column align-items-end col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">You</span> &middot; 5 mins ago</small>
                              <div class="bg-primary text-white p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-s-4">
                                  Maecenas aliquet eu felis vel.
                              </div>
                          </div>
                          <div class="avatar avatar-xs ms-3 flex-shrink-0">
                              <picture>
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-3.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                      </div>          <div class="d-flex align-items-end justify-content-start mb-4 flex-wrap">
                          <div class="avatar avatar-xs me-3 flex-shrink-0">
                              <picture>
                                  <img class="f-w-10 rounded-circle" src="./assets/images/profile-small-4.jpeg"
                                  alt="HTML Bootstrap Admin Template by Pixel Rocket">
                              </picture>
                              <span class="avatar-dot bg-success"></span>
                          </div>
                          <div class="d-flex justify-content-start flex-column align-items-start col">
                              <small class="text-muted fs-xs fw-bolder"><span class="fw-bold">Patrick Johnson</span> &middot; 25 mins ago</small>
                              <div class="bg-light p-3 mt-2 rounded-t-s-4 rounded-t-e-4 rounded-b-e-4">
                                  Cras sit amet gravida augue.
                              </div>
                          </div>
                      </div>          <!-- / Messages-->
                    </div>
                  </div>
                  <div class="border-top p-4 mx-n3">
                    <div class="d-flex flex-column align-items-end">
                      <input type="text" class="form-control d-flex w-100 bg-light border-0 text-muted mb-3" placeholder="Add new message...">
                      <div class="d-flex justify-content-between w-100 align-items-center">
                        <i class="ri-attachment-line text-muted ri-lg"></i>
                        <button class="btn btn-sm btn-primary">Send</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>            <!-- / Footer-->

        </section>
        <!-- / Content-->

    </main>
    <!-- /Page Content -->

    <!-- Page Aside-->
   <?php require_once 'aside.php';?>
    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>
