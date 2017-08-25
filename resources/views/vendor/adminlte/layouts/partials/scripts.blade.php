<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

  <!-- bootstrap datepicker -->
<script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Parsley -->
<script src="/js/parsley.min.js"></script>
<!-- Select2 -->
<script src="/plugins/select2/select2.full.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->



<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<!--Javascript show/hide function-->
<script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
};
</script>


<script>
  $(document).ready(function(){

    //Initialize Select2 Elements
    $(".select2").select2();

    //Date picker
    $('#datepicker,#today').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#datepicker,.form-control pull-right').datepicker({
      autoclose: true
    });

    $('#today').datepicker().datepicker('setDate', 'today');

  
    $('#res').wysihtml5();
});


 </script>



