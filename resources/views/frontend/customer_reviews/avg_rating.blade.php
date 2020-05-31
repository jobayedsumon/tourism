<div class="rating-block">

    <h4>Average user rating</h4>
    <h2 class="bold padding-bottom-7">{{number_format($avg_rating->avg_rating,1)}} <small>/ 5</small></h2>
    <div class="rating" data-rate-value={{number_format($avg_rating->avg_rating,1)}} style="font-size: 30px;margin: -10px;"></div>
</div>

<script>
    $(".rating").rate({readonly: true,});
</script>