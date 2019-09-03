
 <div class="row">
		<div class="col-md-12 col-sm-12  col-xs-12 col-lg-12">

            <!-- Fluid width widget -->
            <div class="card border-primary mb-3" >
                <div class="card-header bg-primary"><strong>Recent Comments</strong></div>
                <div class="card-body text-secondary">
                  @foreach($comments as $comment)
                      <li class="media">

                          <div class="media-body">
                              <h4 class="media-heading">
                                  <small><a> {{ $comment->user->name}}</a>   -  {{ $comment->user->email}}</small>
                              </h4>
                              <br>
                              <p>{{ $comment->body }}</p>
                              <small class="text-muted">  commented on {{ $comment->created_at}}</small>
                              <div class="card-footer bg-transparent border-success"></div>
                          </div>
                      </li>

                      @endforeach
                  <!-- <h5 class="card-title">Secondary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>

            <!-- End fluid width widget -->

		</div>
	</div>
