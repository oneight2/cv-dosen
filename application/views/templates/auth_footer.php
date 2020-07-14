<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
 <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
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
                $(document).ready(function(){
                    var sample_data = new Bloodhound({
                        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
                        queryTokenizer: Bloodhound.tokenizers.whitespace,
                        prefetch:'<?php base_url();?>welcome/fetch',
                        remote:{
                            url:'<?= base_url();?>welcome/fetch/%QUERY',
                            wildcard:'%QUERY'
                        }
                    });
                    $('#prefetch .typeahead').typeahead(null, {
                    name: 'sample_data',
                    display:'name',
                    source: sample_data,
                    limit: 5,
                    templates:{
                        suggestion:Handlebars.compile(`
                            <div class="row">
                                <a href="welcome/curriculumvitae?nidn={{nidn}}" style="text-decoration:none; color:black; display:inline">
                                <div class="row p-2">
                                    <div class="col-md-2" style="padding-right:5px; padding-left:5px;">
                                        <img src="assets/img/profile/{{image}}" class="img-thumbnail" width="48" />
                                    </div>
                                    <div class="col-md-10" style="padding-right:5px; padding-left:5px;">
                                        <p>{{nidn}} - {{name}}</p> 
                                    </div>
                                    </div>
                                </a>
                            </div>`)
                    }
                })
                    
                })
                
            </script>

</body>

</html> 