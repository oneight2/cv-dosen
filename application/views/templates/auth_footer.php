<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });



                $('.form-check-input').on('click', function() {
                    const menuId = $(this).data('menu');
                    const roleId = $(this).data('role');

                    $.ajax({
                        url: "<?= base_url('admin/changeaccess'); ?>",
                        type: 'post',
                        data: {
                            menuId: menuId,
                            roleId: roleId
                        },
                        success: function() {
                            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                        }
                    });

                });

                $('#nidn').on('keyup', function(){
                    const nidn = $('#nidn').val();
                    $.ajax({
                        url: "<?= base_url('welcome/cekData'); ?>",
                        type: 'post',
                        data: {
                            nidn: nidn
                        },
                        dataType: 'json',
                        success: function(data) {
                           if(data){
                            $('#notif').html('<span style="font-size:1rem; color:white;margin-bottom:0">Tes ada data</span>')
                           }else{
                             $('#notif').html('<span style="font-size:1rem; color:white; margin-bottom:0">data tidak ada </span>')
                           }
                        }
                    });
                })
            </script>

</body>

</html> 