<!doctype html>
    <html lang="en">
        
    <?php require "_head.php" ?>

        <div  class="main-content">
           <div class="nav-bar sticky-top-xl bg-white shadow-sm w-100 p-3">
               <div class="row">
                   <div class="col-md-5">
                       <div class="input-group mb-0">
                          <input type="text" class="form-control border-end-0 mb-0" placeholder="Search Apps" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <span class="input-group-text sit border-start-0" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                   </div>
                   <div class="col-md-3"></div>
                   <div class="col-md-4 text-end">
                       <div class="dropdown pt-2">
                          <a class="cp pt-4 fw-bolder fs-8 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Tera Byte
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">My Downloads</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                          </ul>
                        </div>
                   </div>
               </div>
           </div>
           <div class="section-container p-2 p-xl-4">
            <div class="row m-0">

            <?php require_once "_apps.php" ?>
            <?php require_once "_movies.php" ?>

               <!-- <h4 class="fs-6 fw-bolder my-4">Mobile Apps  <a class="float-end text-primary text-decoration-underline" href=""><small class="fs-8">View All</small></a></h4>
               <div class="row mt-2">
                   <div class="col-md-3 mb-3">
                       <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                             <div class="img-cover"> <img class="rounded" src="assets/images/apps/1.png" alt=""></div>
                             <div class="det mt-2">
                                 <h5 class="mb-1 fs-6">Facebook</h5>
                                 <ul class="row">
                                     <li class="col-8 ratfac">
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                     </li>
                                     <li class="col-4"><span class="text-success float-end">Free</span></li>
                                 </ul>
                             </div>
                          </div>
                       </a>
                   </div>

                   <div class="col-md-3 mb-3">
                       <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                             <div class="img-cover"> <img class="rounded" src="assets/images/apps/4.png" alt=""></div>
                             <div class="det mt-2">
                                 <h5 class="mb-1 fs-6">Facebook</h5>
                                 <ul class="row">
                                     <li class="col-8 ratfac">
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                     </li>
                                     <li class="col-4"><span class="text-success float-end">Free</span></li>
                                 </ul>
                             </div>
                          </div>
                       </a>
                   </div>

                   <div class="col-md-3 mb-3">
                       <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                             <div class="img-cover"> <img class="rounded" src="assets/images/apps/2.png" alt=""></div>
                             <div class="det mt-2">
                                 <h5 class="mb-1 fs-6">Facebook</h5>
                                 <ul class="row">
                                     <li class="col-8 ratfac">
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                     </li>
                                     <li class="col-4"><span class="text-success float-end">Free</span></li>
                                 </ul>
                             </div>
                          </div>
                       </a>
                   </div>

                   <div class="col-md-3 mb-3">
                       <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                             <div class="img-cover"> <img class="rounded" src="assets/images/apps/3.png" alt=""></div>
                             <div class="det mt-2">
                                 <h5 class="mb-1 fs-6">Facebook</h5>
                                 <ul class="row">
                                     <li class="col-8 ratfac">
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi text-warning bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                         <i class="bi bi-star-fill"></i>
                                     </li>
                                     <li class="col-4"><span class="text-success float-end">Free</span></li>
                                 </ul>
                             </div>
                          </div>
                       </a>
                   </div>
               </div> -->

                <!-- <h4 class="fs-6 fw-bolder my-4 mb-3">Top Books  <a class="float-end text-primary text-decoration-underline" href=""><small class="fs-8">View All</small></a></h4>
                <div class="col-md-4 mb-3">
                       <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/1.jpg" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">No Man of God</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                    </a>
               </div>

               <div class="col-md-4 mb-3">
                    <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/2.png" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">Super Sonic 2</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                   </a>
               </div>


               <div class="col-md-4 mb-3">
                    <a href="single.php">
                      <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/3.png" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">The Lost City</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                   </a>
               </div>


               <div class="col-md-4 mb-3">
                    <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/4.png" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">Spider Man</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                   </a>
               </div>


               <div class="col-md-4 mb-3">
                      <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/5.png" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">Resident Evil</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                             <i class="bi bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                   </a>
               </div>

               <div class="col-md-4 mb-3">
                    <a href="single.php">
                          <div class="app-cover p-2 shadow-md bg-white">
                            <div class="row">
                                 <div class="img-cover pe-0 col-4"> <img class="rounded" src="assets/images/books/6.jpg" alt=""></div>
                                 <div class="det mt-2 col-8">
                                     <h5 class="mb-0 fs-6">Bad Guys</h5>
                                     <span class="fs-8">Racing</span>
                                     <ul class="row my-2">
                                         <li class="col-8 ratfac">
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                             <i class="bi text-warning bi-star-fill"></i>
                                         </li>
                                         <li class="col-4"><span class="text-success fs-8 float-end">Featured</span></li>
                                     </ul>
                                     <b class="fs-8">Price : 18$</b>
                                 </div>
                            </div>
                       </div>
                   </a>
               </div> -->


            </div>
           </div>
        </div>
    <body>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>
