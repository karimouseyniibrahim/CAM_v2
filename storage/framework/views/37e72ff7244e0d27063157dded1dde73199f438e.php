<script type="text/javascript">

function deleteThisfile(e,id) {
        var link = $(e).data('link');
        swal({
                title: "<?php echo e(trans("medias.ask-to-delete")); ?>",
                text: "<?php echo e(trans("medias.message-to-delete")); ?>",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<?php echo e(trans("medias.message-btn")); ?>",
                closeOnConfirm: false
            },
            function (isConfirm) {               
                if(isConfirm){
                    
                    $.get(link,function(infos,status){
                        $( "#file"+id ).remove();
                        swal("<?php echo e(trans("medias.message-delete")); ?>", "infos" , "success");   
                    });
                                   
                }
                
               // window.location = link;
            });
    }

</script>