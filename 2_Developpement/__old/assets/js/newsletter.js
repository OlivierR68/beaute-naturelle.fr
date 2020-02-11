 $(document).ready(function( {
           }
            $("#newsletter").click(function(e) {
                e.preventDefault();
                var email = $("#inputNewsletter").val();
                var post_url = $("#urlnewsletter").val();
                $.ajax({
                type: "POST",
                url: post_url,
                data : {"email" : email},
                dataType: "json",
                success: function (data) {
                console.log(data);}
                });
            });
