<?php
    session_start();
    if(isset($_SESSION["current_upload"])){
        $link = $_SESSION["current_upload"];
    }else{
        header("Location:./index.php");
    }
?>
<main>
    <section class="result-container">
        <div class="result-link">
            <div class="result-preview">
                <a href="">
                    <img src="<?= $link ?>" alt="Result">
                </a>
            </div>
            <p>Image Sucessfully uploaded!</p>
            <button id="open-btn">Open</button>
            <br>
            <button id="copy-btn">Copy link</button>
            <br>
            <button id="re-upload">Upload another</button>
        </div>
    </section>
</main>
<script src="./js/result.js"></script>
<script>
    const openBtn = document.querySelector("#open-btn");
    const copyBtn = document.querySelector("#copy-btn");
    const link = "<?= $link ?>";

    openBtn.addEventListener("click", (e) => {
        open(link);
    })

    copyBtn.addEventListener("click", (e) => {
        navigator.clipboard.writeText(link);
        e.target.textContent = "Link copied"

        setTimeout(() => {
            e.target.textContent = "Copy text"
        }, 5000)
    })
</script>