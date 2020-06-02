@auth()
    <div class="container-fluid bootstrap snippet">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-home text-green"></i> Our Customers</h4>
                        </div>
                        <div class="portlet-widgets">
                            <span class="divider"></span>
                            <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="chat" class="panel-collapse collapse in">
                        <div>
                            <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                                {{--                            //Commant div--}}
                                @foreach($checkout_comments as $checkout_comment)
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4 class="media-heading">{{$checkout_comment->user_name}}
                                                        {{--                                                <span class="small pull-right">{{$checkout_comment->created_at}}</span>--}}
                                                    </h4>
                                                    <p>{{$checkout_comment->review}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--                            //Commant div--}}
                            </div>
                        </div>
                        <div class="form-group" id="showForm">
                            <button type="button" class=" w-100 btn btn-primary" style="width: 100%">Checkout</button>
                            <div class="clearfix bg-primary" style="margin: 0;padding: 0;"></div>
                        </div>
                        <div class="portlet-footer" style="display:none" id="form">
                            <form action="{{route('write.checkout', ['id' => $hotel->id])}}" method = 'POST'>
                                {{csrf_field()}}
                                <div class="form-group">
                                    <textarea name="review" class="form-control" placeholder="Enter message..."></textarea>
                                </div>
                                <input type="hidden" name="review_type" value="1">
                                <input type="hidden" name="latitude" id="latitude">
                                <input type="hidden" name="longitude" id="longitude">
                                <div class="form-group">
                                    <button type="submit" class=" col-md-12 btn btn-default pull-right">Checkout</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>

                        </div>
                        @if($errors->has('distance'))
                            <small class="text-danger"> You are not near the hotel!</small>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>
@endauth
<script>
    $('#showForm').click(function () {
        $(this).hide();
        $('#form').show();
        let position = $(window).scrollTop()
        $(window).scrollTop(position+100);
    });
</script>
<script>
function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} else {
console.log("Geolocation is not supported by this browser.");
}
}

function showPosition(position) {
document.getElementById('latitude').value = position.coords.latitude;
document.getElementById('longitude').value = position.coords.longitude;
}
getLocation();
</script>