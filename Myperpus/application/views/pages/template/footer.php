    <footer class="footer">
      <div class="container">
        <p class="text-muted" align="center">&copy; 2015</p>
      </div>
    </footer>
    <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>    
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
    	$('#buku').click(function(){
            $('#home').removeClass('active');
            $('#buku').hide();
            $('.loading').show();
            $('#buku').addClass('active').fadeIn(500);
    		$("#content").fadeOut(100).load('<?php echo site_url('Welcome/page') ?>').fadeIn(500);
    	});
    	$('#home').click(function(){
            $('#buku').removeClass('active');
            $('#home').hide();
            $('.loading').show();
            $('#home').addClass('active').fadeIn(500);
    		$("#content").fadeOut(100).load('<?php echo site_url('Welcome/home') ?>').fadeIn(500);
        });
    </script>
  </body>
</html>