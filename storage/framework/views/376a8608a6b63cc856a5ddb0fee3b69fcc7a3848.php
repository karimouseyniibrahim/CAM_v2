<script>
    var controllers = $('#controllers'), type = $('#type'), type_id, out, controller, output, methodName = $('#method_name'), selected;
    var selectController = "<?php echo e($controller_name ? str_replace('\\' , '-' , $item->namespace ) : ''); ?>",  selectMethod=  "<?php echo e($method_name); ?>";
    type.on('change', function () {
        getControllers();
    });
    controllers.on('change', function () {
        getMethods();
    });
    function getControllers() {
        out = '';
        controllers.val('');
        type_id = type.val();
        $.ajax({
            type: "get",
            url: '/<?php echo e(getCurrentLang()); ?>/admin/getControllerByType/' + type_id,
            success: function (data) {
                var a = data; // This line shows error.
                $.each(JSON.parse(data), function (key, value) {
                    selected = selectController != '' && selectController == key  ? 'selected' : '';
                    out += '<option value="' + key + '" '+selected+' >' + value + '</option>';
                });
                controllers.html(out);
                getMethods();
            }
        });
    }

    function getMethods() {
        out = '';
        methodName.html('');
        type_id = type.val();
        controller = controllers.val();
        $.get('/<?php echo e(getCurrentLang()); ?>/admin/getMethodByController/' + controller + '/' + type_id, function (response) {
            $.each(JSON.parse(response), function (key, value) {
                selected = selectMethod != '' && selectMethod == value  ? 'selected' : '';
                out += '<option value="' + value + '"  '+selected+' >' + value + '</option>';
            });
            methodName.html(out);
        });
    }
    type.trigger('change');
</script>