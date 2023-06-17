
<main>
    <form id="drop-area" enctype="multipart/form-data" action="./process/upload.php" method="POST">
        <div class="pointer"></div>
        <div class="drop-inner">
            <p>Drop Image</p>
            <div class="flexer">
                <hr>
                <p>Or</p>
                <hr>
            </div>
            <button type="button" id="select-btn">
                Select File
            </button>
            <input type="file" name="file" id="file-input" required>
        </div>
    </form>
    <div class="upload-btn-container">
        <button id="upload-btn">
            Upload
        </button>
    </div>
</main>
<script src="./js/drop-area.js"></script>