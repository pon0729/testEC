{% if has_class == false %}
    <script>
        $(function() {
            $('div.row').each(function(i) {
                if($(this).text().match(/{{'admin.product.stock'|trans}}/)){
                    $elem = $('#deliveryplus_weight_size');
                    $(this).after($elem.html());
                    $elem.remove();
                }
            });
        });
    </script>
{% endif %}
