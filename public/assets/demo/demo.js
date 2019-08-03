$(function() {
    function getData() {
        console.log("Getting message");
        $("#paid-loading").show();
        $.get("/admin/payment/", function(data) {
            data.forEach(function(item) {
                $("#paid").append(
                    `<tr data-key=${item.id} class="table-paid"><td>${
                        item.id
                    }</td><td>${item.car_number}</td><td>${item.name}</td><td>${
                        item.type
                    }</td><td>${item.year}</td><td>${item.amount}</td><td>${
                        item.status
                    }</td></tr>`
                );
            });
            $("#paid-loading").hide();
        });
    }
    getData();
    $("#load-data").click(function() {
        $("#search-data-input").val("");
        getData();
    });
    $("#add-modal").click(function() {
        $(
            "input[name*='car_number'],input[name*='type'],input[name*='status'],input[name*='year'],input[name*='amount'],input[name*='name']"
        ).val("");
        var year = new Date().getFullYear();
        $("#thisyear").val(year);
        $("#add-payment").modal("show");
        $("#delete-data").addClass("d-none");
        $("#paid-modal").hide();
        $("#data-id").val(0);
    });
    $("#paid").on("click", ".table-paid", function() {
        var id = $(this).attr("data-key");
        console.log(id);
        $(".data-content").hide();
        $("#paid-modal").show();
        $("#add-payment").modal("show");
        $("#delete-data")
            .removeClass("d-none")
            .attr("data-key", id);
        $("#data-id").val(id);
        $.get("/admin/payment/" + id, function(data) {
            console.log(data);
            $("input[name*='car_number']").val(data.car_number);
            $("input[name*='name']").val(data.name);
            $("input[name*='type']").val(data.type);
            $("input[name*='year']").val(data.year);
            $("input[name*='amount']").val(data.amount);
            $("input[name*='status']").val(data.status);
        })
            .done(function() {
                $(".data-content").show();
                $("#paid-modal").hide();
            })
            .fail(function() {
                $("#paid-modal").html("Some thing went wrong");
            });
    });
    $("#search-data").submit(function(e) {
        e.preventDefault();
        $("#paid").html("");
        $("#paid-loading").show();
        var search = $("#search-data-input").val();
        $.get("/admin/payment/search/" + search, function(data) {
            data.forEach(function(item) {
                $("#paid").append(
                    `<tr data-key=${item.id} class="table-paid"><td>${
                        item.id
                    }</td><td>${item.car_number}</td><td>${item.name}</td><td>${
                        item.type
                    }</td><td>${item.year}</td><td>${item.amount}</td><td>${
                        item.status
                    }</td></tr>`
                );
            });
            $("#paid-loading").hide();
        });
    });

    $("#delete-data").click(function() {
        var id = $(this).attr("data-key");
        console.log(id);
        var token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: "/admin/payment/",
            type: "DELETE",
            data: {
                id: id,
                _token: token
            },
            success: function(result) {
                console.log(result.status);
                if (result.status) {
                    getData();
                    $("#add-payment").modal("hide");
                } else {
                    console.log(result);
                }
            }
        });
    });
});
