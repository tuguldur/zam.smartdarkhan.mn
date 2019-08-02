(function($) {
    $("#check").on("submit", function(e) {
        $("#search-found").addClass("d-none");
        e.preventDefault();
        var regex = new RegExp("^[0-9]{4}[А-Я,а-я]{3}$");
        var value = $("#check-input")
            .val()
            .trim();
        var check = value.replace(/ /g, "");
        if (regex.test(check)) {
            $("#result-text").html("");
            $.get(`/check/${check.toUpperCase()}`, function(datas) {
                console.log(datas);
                if (datas === undefined || datas.length == 0) {
                    $("#search-result").html(
                        `<small class="form-text" style="color: rgb(235,13,13);font-family: 'Roboto Condensed', sans-serif;font-size: 16px;margin: -1px;"><strong>ТАНЫ МЭДЭЭЛЭЛ ОЛДСОНГҮЙ&nbsp;</strong></small>`
                    );
                    $("#search-found").addClass("d-none");
                    console.log("no data");
                } else if (datas) {
                    $("#search-result").html("");
                    datas.forEach(data => {
                        $("#search-result").append(`
                    <tr>
                    <td>${data.car_number}</td>
                    <td>${data.name}</td>
                    <td>${data.type}</td>
                    <td>${data.year}</td>
                    <td>${data.amount}₮</td>
                    <td>${data.status}</td>
                 </tr>`);
                    });
                    $("#result-text").html(
                        `<small class="form-text" style="color: rgb(15,217,11);font-family: 'Roboto Condensed', sans-serif;font-size: 16px;margin: -1px;"><strong>САНГААС ТАНЫ МЭДЭЭЛЭЛ ОЛДЛОО&nbsp;</strong></small>`
                    );
                    $("#search-found").removeClass("d-none");
                } else {
                    $("#result-text").html(
                        `<small class="form-text" style="color: rgb(235,13,13);font-family: 'Roboto Condensed', sans-serif;font-size: 16px;margin: -1px;"><strong>ТАНЫ МЭДЭЭЛЭЛ ОЛДСОНГҮЙ&nbsp;</strong></small>`
                    );
                    $("#search-found").addClass("d-none");
                    console.log("no data");
                }
            });
        } else
            $("#result-text").html(
                `<small class="form-text" style="color: rgb(235,13,13);font-family: 'Roboto Condensed', sans-serif;font-size: 16px;margin: -1px;"><strong>ДУГААРАА ЗӨВ ОРУУЛНА УУ</strong></small>`
            );
    });
})(jQuery);
