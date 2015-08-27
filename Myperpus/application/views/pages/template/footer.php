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
        $('body').on('click','#editbook',function(){
            var id = $(this).attr('data-id');
                edit_data(id);
        });
        function remove_data(id){
            $.ajax({
                       type: "POST",
                       url: "<?php echo site_url('Buku/remove_book'); ?>",
                       data: "id_buku="+id,
                       dataType: "json",
                       success: function (data) {
                               if(data.status == 'true'){
                                    load_data();
                                    $('.text').html('Data Berhasil Dihapus');
                                    $('.notif').slideDown();
                               }else {
                                    alert('Data Gagal Dihapus');
                               }
                       }
            });
        }
        function edit_data(id){
            $.ajax({
                       type: "POST",
                       url: "<?php echo site_url('Buku/select_book'); ?>",
                       data: "id_buku="+id,
                       dataType: "json",
                       success: function (data) {
                               $('#nama').val(data.item.nama_buku);
                               $('#jenis').val(data.item.jenis_buku);
                               $('#id_buku').val(data.item.id_buku);
                               $('.form').slideDown();
                               $('.data').slideUp();
                               $('.show-form').hide();
                               $('.hide-form').show();
                               $('.value').html('Ubah');
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
        $('body').on('click','.show-form',function(){
            $('.form').slideDown();
            $('.show-form').hide();
            $('.data').slideUp();
            $('.hide-form').show();
            $('#id_buku').val('');
            $('.value').html('Simpan');
        });
        $('body').on('click','.hide-form',function(){
            $('.form').slideUp();
            $('.data').slideDown();
            $('.hide-form').hide();
            $('.show-form').show();
            $('.nama').hide();
            $('.jenis').hide();
            $('#group-jenis').removeClass('has-error');
            $('#group-nama').removeClass('has-error');
            $('#nama').val('');
            $('#jenis').val('');

        });
        function insert(){
            if($('#nama').val().length === 0){
                $('.nama').show();
                $('.jenis').hide();
                $('#group-nama').addClass('has-error');
                $('#group-jenis').removeClass('has-error');
            }else if($('#jenis').val().length === 0){
                $('#group-nama').removeClass('has-error');
                $('.nama').hide();
                $('.jenis').show();
                $('#group-jenis').addClass('has-error');
            }
            else {
                $('.nama').hide();
                $('.jenis').hide();
                $('#group-jenis').removeClass('has-error');
                $('#group-nama').removeClass('has-error');
                $.ajax({
                           type: "POST",
                           url: "<?php echo site_url('Buku/add_book') ?>",
                           data: {
                                nama: $('#nama').val(),
                                jenis: $('#jenis').val(),
                                id_buku: $('#id_buku').val()
                           },
                           dataType: "json",
                           success: function (data) {
                                        load_data();
                                        $('.form').slideUp();
                                        $('.data').slideDown();
                                        $('.show-form').show();
                                        $('.hide-form').hide();
                                    if($('#id_buku').val().length == 0){
                                        $('.text').html('Data Berhasil Ditambahkan');
                                    }else {
                                        $('.text').html('Data Berhasil Diubah');
                                    }
                                        $('.notif').slideDown();
                                        $('#nama').val('');
                                        $('#jenis').val('');
                                        $('#id_buku').val('');
                           }
                });
            }
        }
    </script>
  </body>
</html>