$(function () {
    // Create php

    $("form").on("click", function (e) {
        e.preventDefault();
        let data = $(this).serialize();

        $.ajax({
            url: "./actions/actions.php",
            type: "POST",
            data: data,
            success: function (response) {
                console.log("Success:", response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
});
