    <footer class="footer">
      <div class="container">
        <p class="text-muted" align="center">&copy; 2015</p>
      </div>
    </footer>
    <script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>    
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
        //var refreshInterval = setInterval(load_data,3000);
        var hidenotid = setInterval(hide_notif_hapus,5000);
         $('#buku').click(function(){
            $('#home').removeClass('active');
            $('#peminjaman').removeClass('active');
            $('#pengembalian').removeClass('active');
            $('#anggota').removeClass('active');
            $('#buku').hide();
            $('.loading').show();
            $('#buku').addClass('active').fadeIn(500);
    		$("#content").fadeOut(100).load('<?php echo site_url('Page/page') ?>').fadeIn(500);
    	    load_data();
        });
         function hide_notif_hapus(){
            $('.notif').slideUp('slow');
         }
         function load_data(){
                $.ajax({
                       type: "POST",
                       url: "http://perpus.local/index.php/Buku/get_book",
                       dataType: "html",
                       success: function (data) {
                                $('.data').html(data);
                       }
                });
            }   
        $('body').on('click','#removebook',function(){
            var id = $(this).attr('data-id');
                if(confirm('Apakah anda yakin ?')){
                    remove_data(id);
                }
        });
        function remove_data(id){
            $.ajax({
                       type: "POST",
                       url: "http://perpus.local/index.php/Buku/remove_book",
                       data: "id_buku="+id,
                       dataType: "json",
                       success: function (data) {
                               if(data.status == 'true'){
                                    load_data();
                                    $('.notif').slideDown();
                               }else {
                                    alert('Data Gagal Dihapus');
                               }
                       }
            });
        }
    	$('#home').click(function(){
            $('#buku').removeClass('active');
            $('#peminjaman').removeClass('active');
            $('#pengembalian').removeClass('active');
            $('#anggota').removeClass('active');
            $('#home').hide();
            $('.loading').show();
            $('#home').addClass('active').fadeIn(500);
    		$("#content").fadeOut(100).load('<?php echo site_url('Page/home') ?>').fadeIn(500);
        }); 
        $('#peminjaman').click(function(){
            $('#buku').removeClass('active');
            $('#home').removeClass('active');
            $('#pengembalian').removeClass('active');
            $('#anggota').removeClass('active');
            $('.loading').show();
            $('#peminjaman').addClass('active').fadeIn(500);
            $("#content").fadeOut(100).load('<?php echo site_url('Page/peminjaman') ?>').fadeIn(500);
        }); 
        $('#pengembalian').click(function(){
            $('#buku').removeClass('active');
            $('#home').removeClass('active');
            $('#peminjaman').removeClass('active');
            $('#anggota').removeClass('active');
            $('.loading').show();
            $('#pengembalian').addClass('active').fadeIn(500);
            $("#content").fadeOut(100).load('<?php echo site_url('Page/pengembalian') ?>').fadeIn(500);
        });
        $('#anggota').click(function(){
            $('#buku').removeClass('active');
            $('#home').removeClass('active');
            $('#peminjaman').removeClass('active');
            $('#pengembalian').removeClass('active');
            $('.loading').show();
            $('#anggota').addClass('active').fadeIn(500);
            $("#content").fadeOut(100).load('<?php echo site_url('Page/anggota') ?>').fadeIn(500);
        });
    </script>
  </body>
</html>