(function($) {
    $("#license").on("click", "#license-confirm-action", function() {
        var id = $(this).attr("data-key");
        console.log(id);
        $("#license-id").val(id);
        $("#license-status").val("true");
        $("#edit-license").modal("show");
    });
    $("#license").on("click", "#license-remove-action", function() {
        var id = $(this).attr("data-key");
        console.log(id);
        $("#license-id").val(id);
        $("#license-remove").val("true");
        $("#edit-license").modal("show");
    });
    $("#edit-license").on("hidden.bs.modal", function() {
        console.log("reset");
        // license-id - 0
        // license-status - false
        // license-remove - false
        $("#license-status,#license-remove").val("false");
        $("#license-id").val(0);
    });
})(jQuery); // End of use strict
