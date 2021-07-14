$(function () {
    $("#parser-form").on("click", ".remove-block-btn", function () {
        $(this).closest(".input-block").remove();
    });

    $("#add-row-btn").on("click", () => {
        var content = getRowContent();
        $("#parser-rows-block").append(content);
    });

    function getRowContent() {
        var html = `<div class="row mt-2 input-block">
        <div class="col-12 col-sm-6 d-flex flex-row">
            <input type="text" name="strings[]" required maxlength="50" placeholder="Write here..." class="form-control form-control-sm">
            <i class="fas fa-lg mt-2 fa-arrow-right ml-4 d-none d-sm-inline"></i>
            <button type="button" class="btn btn-link p-0 m-0 remove-block-btn d-sm-none">
                <i class="text-dark fas fa-trash-alt ml-3"></i>
            </button>
        </div>
        <div class="col-6  d-none d-sm-flex">
            <input type="text" readonly class="form-control form-control-sm"
                value="Click on the 'parse' button to see the result here"><button type="button"
                class="btn btn-link p-0 m-0 remove-block-btn"><i
                    class="text-dark fas fa-trash-alt ml-3"></i></button>
        </div>
    </div>`;
return html;
    }
});
