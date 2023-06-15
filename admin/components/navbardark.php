<!-- navbar -->
<nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-dark">
    <div class="container">
        <a href="./" class="navbar-brand"><img src="assets/images/virtlogowhite.png" alt="Logo"></a>
  
        <ul class="navbar-nav navbar-nav-secondary order-lg-3">
            <li class="nav-item d-lg-none">
                <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a href="quote" class="btn btn-outline-white rounded-pill ms-2">Get Quote</a>
            </li>
        </ul>
  
        <!-- primary -->
        <div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>

                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown-2">
                        <div class="row g-0">
                            <div class="col-6">
                                <div class="p-4">
                                    <a class="dropdown-item <?php if($page=='Social'){echo 'active';}?>" href="social-media-management">Social Media Management</a>
                                    <a class="dropdown-item <?php if($page=='Public'){echo 'active';}?>" href="public-corporate-relations">Public & Corporate Relations</a>
                                    <a class="dropdown-item <?php if($page=='Web'){echo 'active';}?>" href="web-design-development">Web Design/Development</a>
                                    <a class="dropdown-item <?php if($page=='Branding'){echo 'active';}?>" href="branding-advertising">Branding And Advertising</a>
                                    <a class="dropdown-item <?php if($page=='Brand'){echo 'active';}?>" href="brand-activation">Brand Activation</a>
                                    <a class="dropdown-item <?php if($page=='Email'){echo 'active';}?>" href="email-marketing">Email Marketing</a>
                                    <a class="dropdown-item <?php if($page=='Content'){echo 'active';}?>" href="content-creation">Content Creation</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="quote"
                                    class="card card-arrow inverted bg-black">
                                    <div class="card-footer mt-auto">
                                    <h4 class="lead lh-3 fw-light">Get Quote</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>

                <li class="nav-item d-lg-none pt-5">
                    <a href="quote" class="nav-link btn btn-outline-white">Get Quote</a>
                </li>
            </ul>
        </div>
    </div>
</nav>