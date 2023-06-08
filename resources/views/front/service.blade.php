   <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- section title -->
                                @foreach ($services_pages as  $s_page)
                                    
                              
                                <div class="section-title text-center">
                                    <div class="title-header">
                                        <h5>{{$s_page->title}}</h5>
                                        <h2 class="title">{{$s_page->subtitle}}</h2>
                                    </div>
                                </div>
                                  @endforeach
                                <!-- section title end -->
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                           
                           @foreach($services_images as $image)
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>{{$image->title}}</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>{!!$image->subtitle !!}</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../assets/img/service/{{$image->image}}" alt="GPS position tracking">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                           @endforeach
                            {{-- <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Fuel Level on mobile and stationary tanks</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Monitoring of stationary and movable/mobile fuel tanks</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-02-768x512.jpg" alt="Fuel Level on mobile and stationary tanks">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Fuel consumption</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Fuel consumption monitoring of diesel engines</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-01-768x512.jpg" alt="Fuel consumption">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Axle load measurement</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Integration of standard analog sensors into telematics systems</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-05-768x512.jpg" alt="Axle load measurement">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Engine operation time monitoring</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Contactless reading, analysis and conversion of data from CAN buses</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-03-768x512.jpg" alt="Engine operation time monitoring">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Plant assistance on engine hours and distance travelled</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>for maintenance and service purposes</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-06-768x512.jpg" alt="Plant assistance on engine hours and distance travelled">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Tower crane installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-07-768x512.jpg" alt="Tower crane installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>External lift installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-08-768x512.jpg" alt="External lift installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Batching plants installation repair and maintenance</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>since 2006</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-09-768x512.jpg" alt="Batching plants installation repair and maintenance">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Injector pump repair</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-10-768x512.jpg" alt="Injector pump repair">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Nozzle repair</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-11-768x512.jpg" alt="Nozzle repair">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Diesel cleaning </h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>(coming soon)</p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-12-768x512.jpg" alt="Diesel cleaning">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!--featured-imagebox-->
                                <div class="featured-imagebox featured-imagebox-services style1">
                                    <div class="featured-content text-center">
                                        <div class="featured-title">
                                            <h3>Lease of Tower crane and external lifts</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p></p>
                                        </div>
                                    </div>
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="../images/services/services-13-768x512.jpg" alt="Lease of Tower crane and external lifts">
                                    </div>
                                    <!-- featured-thumbnail end-->
                                </div>
                                <!-- featured-imagebox end-->
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center padding_top10">Don’t hesitate, <a class="ttm-textcolor-skincolor font-weight-500" href="#contact"><u>contact us</u></a> for better help and more services.</p>
                            </div>
                        </div>
                    </div>