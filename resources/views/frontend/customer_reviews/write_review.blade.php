@if($from == 'hotel')
    @if(\App\UserReview::where('component_type',1)->where('user_name',Auth::user()->name)->exists())
        <h3 class="text-right"> {{Auth::user()->name}} </h3>
        <h4 class="text-right">
            @php
                $review = \App\UserReview::where('component_type',1)->where('user_name',Auth::user()->name)->first();
                echo $review->review;
            @endphp
        </h4>
    @else
    <form action="{{route('write.review', ['id' => $hotel->id])}}" method = 'POST'>
        {{csrf_field()}}
        <h4> Write a review</h4>
        <div class="row">
            <div class="form-group">
                <textarea class="form-control" name="review" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="rating" data-rate-value=0 style="font-size: 30px;margin: -10px;"></div>
                <input type="hidden" name="rating" id="rating_value">
                <input type="hidden" name="review_type" value="1">
            </div>
            <div class="col-md-6" style="text-align: right">
                <button type="submit" class="btn btn-outline-warning" >Submit</button>
            </div>
        </div>
    </form>
    @endif
@elseif($from == 'tourist')
    <form action="{{route('write.review', ['id' => $tourist->id])}}" method = 'POST'>
        {{csrf_field()}}
        <h4> Write a review</h4>
        <div class="row">
            <div class="form-group">
                <textarea class="form-control" name="review" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="rating" data-rate-value=0 style="font-size: 30px;margin: -10px;"></div>
                <input type="hidden" name="rating" id="rating_value">
                <input type="hidden" name="review_type" value="3">
            </div>
            <div class="col-md-6" style="text-align: right">
                <button type="submit" class="btn btn-outline-warning" >Submit</button>
            </div>
        </div>
    </form>

@elseif($from == 'transport')
    <form action="{{route('write.review', ['id' => $transport->id])}}" method = 'POST'>
        {{csrf_field()}}
        <h4> Write a review</h4>
        <div class="row">
            <div class="form-group">
                <textarea class="form-control" name="review" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="rating" data-rate-value=0 style="font-size: 30px;margin: -10px;"></div>
                <input type="hidden" name="rating" id="rating_value">
                <input type="hidden" name="review_type" value="2">
            </div>
            <div class="col-md-6" style="text-align: right">
                <button type="submit" class="btn btn-outline-warning" >Submit</button>
            </div>
        </div>
    </form>
@endif

<script>

    $(".rating").rate();
    $(".rating").on("change", function(ev, data){
        $('#rating_value').val(data.to);
    });
   // $('#rating_value').val($(".rating").rate("getValue"));

</script>