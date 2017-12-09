(function ($) {
    $(document).ready(function () {
        
        $("input[value=submit1_4_3]").click(function () {
            var t = $("input");
            t.prop("type", "hidden")
             .prop("name", "ra")
             .prop("value", "submit1_4_3");
            $(this).parents("form").append(t);
            $(this).parents("form").submit();
        });
        
        $("input[value=submit1_4_4]").click(function () {
            var t = $("input");
            t.prop("type", "hidden")
             .prop("name", "ra")
             .prop("value", "submit1_4_4");
            $(this).parents("form").append(t);
            $(this).parents("form").submit();
        });
        
        $(".button_ajax").click(function () {
            $.ajax({
                async   :true,
                url     :"./",
                data    :{
                    rc      :"top", 
                    ra      :"button_ajax"
                },
                dataType:"json",
                success :function (data, textStatus, jqXHR) {
                    for (var i = 0; i < data.length; i++) {
                        var r = data[i];
                        var t = $("<p>");
                        for (var j = 0; j < r.length; j++) {
                            var c = r[j];
                            var tc = $("<span>");
                            tc.text(c);
                            t.append(tc);
                        }
                        $(".result_ajax").append(t);
                    }
                }
            });
        });
        
    });
})($DEjQuery);



