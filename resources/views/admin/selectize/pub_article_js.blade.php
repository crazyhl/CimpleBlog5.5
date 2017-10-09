<script type="text/javascript" src="/selectize/js/standalone/selectize.js"></script>
<script>
    $(function() {
        $('#tags').selectize({
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                }
            }
        });

        $('#categories').selectize({});
    });
</script>