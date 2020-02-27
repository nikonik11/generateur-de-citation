$(function() {
    $("#generate").click(function() {
        $.ajax({
            url : 'php/bdd.php',success: function(myQuery){ 
            $('#lecture').html(myQuery);
            }
        });
    });
});

