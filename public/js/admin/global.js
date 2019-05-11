$('document').ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
            selected_characters.push($(v).data("id"));
        });
        if (selected_characters.length != 3 && selected_characters.length != 5) {
            alert('nono');
            return false;
        }

        $.ajax({
            type: 'POST',
            url: 'squads/store',
            data: {selected_characters: selected_characters},
            success: function (data) {
                $(".row.squads").prepend(data.data);
                setTimeout(function () {
                    $(".squads .card.w-100").eq(0).addClass("fade_in");
                }, 500);
                $(".new-squad").html("");
            },
            error: function (data) {
                alert('err');
            }
        });

        return false;
    });

    $(".squads").on("click", ".delete-squad", function () {
        var this_r = $(this);
        $.ajax({
            type: 'POST',
            url: 'squads/delete',
            data: {squad_id: this_r.data("id")},
            success: function (data) {
                this_r.closest(".card.w-100").addClass("fall-right");
                setTimeout(function () {
                    this_r.closest(".card.w-100").addClass("d-none");
                }, 950);
            },
            error: function (data) {
                alert('err');
            }
        });
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

    $("#search_clear").click(function () {
        $("#search_character").val("");
        $("#characters .char-wrapper").show();
        return false;
    })
});