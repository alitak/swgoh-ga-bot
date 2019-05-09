$('document').ready(function () {
    var characters_dragula = dragula([document.getElementById("characters"), document.getElementById("right-copy")], {
        copy: function (el, source) {
            return source === document.getElementById("characters");
        },
        accepts: function (el, target) {
            return target !== document.getElementById("characters");
        },
        removeOnSpill: true,
        revertOnSpill: true
    });

    $(".save-new-squad").click(function () {
        selected_characters = new Array();
        $.each($(".new-squad .char-wrapper"), function (k, v) {
            selected_characters.push($(v).data("base_id"));
        });
        if (selected_characters.length != 3 && selected_characters.length != 5) {
            alert('nono');
            return false;
        }

        $(".new-squad").html("")
        return false;
    });

    $("#search_character").keyup(function () {
        var query = $(this).val();
        $.each($("#characters .char-wrapper"), function (k, v) {
            if ($(v).find(".char-name span").data("name").indexOf(query) === -1) {
                $(v).hide();
            } else {
                $(v).show();
            }
        });
    });
    
    $("#search_clear").click(function() {
        $("#search_character").val("");
        $("#characters .char-wrapper").show();
        return false;
    })
});