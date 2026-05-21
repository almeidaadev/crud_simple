$(function () {
    // Create php
    $("form").on("submit", function (e) {
        e.preventDefault();

        let data = $(this).serialize() + "&action=create";

        $.ajax({
            url: "./actions/actions.php",
            type: "POST",
            data: data,
            dataType: "json",

            success: function (response) {
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
});
