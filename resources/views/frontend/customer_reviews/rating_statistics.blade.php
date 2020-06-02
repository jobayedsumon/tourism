<h4>User Rating </h4>

@for($i = 5; $i>= 1; $i--)
    <?php $flag = 0;  ?>
    @foreach($review_statistics as $index => $review)
           @if($review->rating == $i)
               <div class="pull-left">
                   <div class="pull-left" style="width:35px; line-height:1;">
                       <div style="height:9px; margin:5px 0;">{{$review->rating}} <span class="glyphicon glyphicon-star"></span></div>
                   </div>
                   <div class="pull-left" style="width:180px;">
                       <div class="progress" style="height:9px; margin:8px 0;">
                           <div class="progress-bar
                           @php
                               if($i == 5) echo 'progress-bar-success';
                               if($i == 4) echo 'progress-bar-info';
                               if($i == 3) echo 'progress-bar-warning';
                               if($i == 2) echo 'progress-bar-danger';
                               if($i == 1) echo '';
                           @endphp"

                                role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width:{{($review->total*100)/$user_review_info->count()}}%">
                               <span class="sr-only">80% Complete (danger)</span>
                           </div>
                       </div>
                   </div>
                   <div class="pull-right" style="margin-left:10px;">{{$review->total}}</div>
               </div>
               <?php $flag = 2;  ?>
           @endif
    @endforeach
    @if($flag == 0)
        <div class="pull-left">
            <div class="pull-left" style="width:35px; line-height:1;">
                <div style="height:9px; margin:5px 0;">{{$i}} <span class="glyphicon glyphicon-star"></span></div>
            </div>
            <div class="pull-left" style="width:180px;">
                <div class="progress" style="height:9px; margin:8px 0;">
                    <div class="progress-bar @php
                        if($i == 5) echo 'progress-bar-success';
                        if($i == 4) echo 'progress-bar-info';
                        if($i == 3) echo 'progress-bar-warning';
                        if($i == 2) echo 'progress-bar-danger';
                        if($i == 1) echo '';
                    @endphp" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 0%">
                        <span class="sr-only">80% Complete (danger)</span>
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin-left:10px;">{{0}}</div>
        </div>
    @endif
@endfor
