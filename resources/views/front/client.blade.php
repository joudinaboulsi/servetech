    <div class="container">
                        <!--row -->
                        <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}},{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":400,"settings":{"slidesToShow": 1}}]}'>
                          @foreach($clients as $client)
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="{{$client->mini_title}}">
                                        <div class="client-thumbnail">
                                            @if(!empty($client->image))
                                            <img class="img-fluid auto_size" width="160" height="98" src="../assets/img/client/{{$client->image}}" alt="{{$client->title}}">
                                       @else
                                       <h3>{{$client->title}}</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="Darycet">
                                        <div class="client-thumbnail">
                                            <img class="img-fluid auto_size" width="160" height="98" src="../images/client/client-2.png" alt="Darycet">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="ATD">
                                        <div class="client-thumbnail">
                                            <h3>ATD</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="client-box">
                                    <div class="ttm-client-logo-tooltip" data-tooltip="Aleed">
                                        <div class="client-thumbnail">
                                            <h3>Aleed Construction</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- row end -->
                    </div>