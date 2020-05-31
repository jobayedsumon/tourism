
<div style="position: relative">
    <button style="position: absolute;top: 0;right: -10;z-index: 1" class="btn" id="date">calender</button>
    <input  style="position: relative;top: 0;right: 0;width: 0px;padding: 0px;margin-top: 15px;border:none;" id="datepicker" >
</div>

<script>
    $('#date').click(function () {
        $( "#datepicker" ).datepicker('show');

    });
</script>