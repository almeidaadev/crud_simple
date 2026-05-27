$(function () {
    // Delete php

    $(".deleting").on("click", function (e) {
        e.preventDefault();
        let data = $(".deleting").data("id");

        $.ajax({
            url: "./actions/actions.php",
            type: "GET",
            data: data + "&action=delete",
            dataType: "json",

            success: function (response) {
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });

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
                console.log(response.message);
            },
            error: function (xhr, status, error) {
                console.error("Error:", error);
            },
        });
    });
});
