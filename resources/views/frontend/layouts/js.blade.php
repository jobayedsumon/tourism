<!-- Page Scripts Starts -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.colorpanel.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/custom-navigation.js')}}"></script>
<script src="{{asset('frontend/js/custom-flex.js')}}"></script>
<script src="{{asset('frontend/js/custom-owl.js')}}"></script>
<script src="{{asset('frontend/js/custom-date-picker.js')}}"></script>
<script src="{{asset('frontend/js/popup-ad.js')}}"></script>

<!-- Page Scripts Ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            } 
        });

        $('#search').keyup(function(){
            var search = $('#search').val();
            if(search==""){
                $("#memList").html("");
                $('#result').hide();
            }
            else{
                $.get("{{ URL::to('search') }}",{search:search}, function(data){
                    $('#memList').empty().html(data);
                    $('#result').show();
                })
            }
        });
    }); 
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#search2').keyup(function(){
            var search = $('#search2').val();
            if(search==""){
                $("#memList").html("");
                $('#result').hide();
            }
            else{
                $.get("{{ URL::to('find-tourist') }}",{search:search}, function(data){
                    $('#memList').empty().html(data);
                    $('#result').show();
                })
            }
        });
    }); 
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#search3').keyup(function(){
            var search = $('#search3').val();
            if(search==""){
                $("#memList").html("");
                $('#result').hide();
            }
            else{
                $.get("{{ URL::to('find-transport') }}",{search:search}, function(data){
                    $('#memList').empty().html(data);
                    $('#result').show();
                })
            }
        });
    });
</script>
