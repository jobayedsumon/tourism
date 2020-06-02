

<div class="review-block">
    <div class="row">

            @foreach($user_review_info as $review)
                <div class="col-md-4" style="margin-bottom: 20px">
                    <div class="review-block-name">{{empty($review->user_name) ? 'Anonymous' :  $review->user_name}}</div>
                    <small>{{\Carbon\Carbon::parse($review->created_at)->format('d.m.Y')}}</small>
                    <div class="review-block-rate">
                        <div class="rating" style="font-size: 30px;margin: -10px;" data-rate-value={{$review->rating}} ></div>
                    </div>
                    <div class="review-block-description" style="margin-top: 10px;"> {{empty($review->review) ? '..' :  $review->review}}  </div>
                </div>
            @endforeach

    </div>
    <hr/>
    {{ $user_review_info->links() }}
</div>

<script>
    $(".rating").rate({readonly: true});
</script>