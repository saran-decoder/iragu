<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col-sm my-1">
                <p class="m-0">Design and Developed By <a href="https://blutocrop.com/" style="color: red;" target="_blank">Bluto Corporation</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Required Js -->
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/simplebar.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/fonts/custom-font.js"></script>
<script src="assets/js/pcoded.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>

<script>
    layout_change("light");
</script>

<script>
    change_box_container("false");
</script>

<script>
    layout_rtl_change("false");
</script>

<script>
    preset_change("preset-1");
</script>

<script>
    font_change("Public-Sans");
</script>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toolbarOptions = [
            [{ 'font': [] }, { 'size': ['small', false, 'large', 'huge'] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'header': 1 }, { 'header': 2 }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }],
            [{ 'indent': '-1' }, { 'indent': '+1' }],
            [{ 'align': [] }],
            [{ 'direction': 'rtl' }],
            ['blockquote', 'code-block'],
            ['link', 'image', 'formula'],
            ['clean']
        ];

        document.querySelectorAll(".quill-editor").forEach(editorDiv => {
            let fieldName = editorDiv.getAttribute("data-name");
            let hiddenInput = document.querySelector(`input[name="${fieldName}"]`);

            let quill = new Quill(editorDiv, {
                theme: "snow",
                modules: {
                    toolbar: toolbarOptions
                }
            });

            // Load the initial content from hidden input
            if (hiddenInput.value.trim() !== "") {
                quill.root.innerHTML = hiddenInput.value;
            }

            // Sync content on change
            quill.on("text-change", function () {
                hiddenInput.value = quill.root.innerHTML;
            });
        });

        // Save content on submit
        document.querySelector("form")?.addEventListener("submit", function () {
            document.querySelectorAll(".quill-editor").forEach(editorDiv => {
                let fieldName = editorDiv.getAttribute("data-name");
                let hiddenInput = document.querySelector(`input[name="${fieldName}"]`);
                let quillEditor = Quill.find(editorDiv);
                hiddenInput.value = quillEditor.root.innerHTML;
            });
        });
    });
</script>