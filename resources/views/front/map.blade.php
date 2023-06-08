      @foreach($contact as $c)
   
   
   <div class="col-lg-12">
                        <iframe src="{{$c->map}}" width="100" height="558" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                       @endforeach