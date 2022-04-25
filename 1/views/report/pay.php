$("#sec1").submit(function(e) {
                e.preventDefault();
                let names = $("#complaint").val();
                let sub1=$("#sub1").val();
                alert(name);
                    $.ajax({
                        type: "POST",
                        url: "pay.php",
                        data:{name : names,
                        sub1 : btn1},
                        success: function(data,status){
                            $('#sec2').fadeIn().css("display","block");
                            readrecord();
                        }
                        
                    });
            });