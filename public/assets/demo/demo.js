$(function() {
    var year = new Date().getFullYear();
    $("#thisyear").val(year);
    function getData() {
        console.log("Getting message");
        $("#paid-loading").show();
        $.get("/admin/payment/", function(data) {
            console.log(data.length >= 1);
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
    $("#paid").on("click", ".table-paid", function() {
        var id = $(this).attr("data-key");
        var status = $(this).attr("data-paid");
        console.log(id, status);
        // $(".comment-delete").show();
        // $(".comment-edit").show();
        // // ADD ID
        // $(".comment-delete a").attr("data-key", id);
        // $(".comment-form,.comment-save").hide();
        // // ADD ID
        // $(".comment-edit a").attr("data-key", id);
        // $(".comment-delete").show();
        // $("#comment-modal").modal("show");
        // $.get("/admin/comment/english/" + id, function(data) {
        //     $(".comment-title").html(data.name);
        //     $("#comment-text").html(data.comment);
        // });
    });
});
