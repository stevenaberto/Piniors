<?php
include("includes/header.php");
$message = isset($_GET["message"]) ? $_GET['message'] : '';
$error = isset($_GET["code"]) ? ($_GET["code"] == "1" ? true : false) : null;
if ($error) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
  <strong class="font-bold">🚨 Upsss!</strong>
  <span class="block sm:inline">' . $message . '</span></div>';
} else if ($error != null) {
    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
  <strong class="font-bold">😜</strong>
  <span class="block sm:inline">Tu archivo se ha subido con exito!' . $error . '</span></div>';
}

?>
<h1 class="text-3xl text-indigo-200 mb-4">Enviar captura y detalles del problemas presentados por el sistemas</h1>
<hr class="pt-2 mb-4 bg-indigo-400">
<form action="./sendEmail.php" method="POST" id="form" enctype="multipart/form-data">
    <input type="text" name="subject" class="w-full outline-0  border-b-4 text-2xl border-b-indigo-800 focus:border-b-indigo-200 focus:text-blue-700 text-decoration-none transition-all mb-4" placeholder="Escribe el Titulo">

    <div class="flex items-center flex-col gap-10 justify-center w-full">
        <label data-preview="" for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Haga clic para cargar</span> o arrastrar y soltar</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">MD</p>
            </div>
            <input id="dropzone-file" type="file" name="archivo" class="hidden" />
        </label>
        <img src="" id="preview">
    </div>

    <input type="submit" value="Enviar email" class="rounded mt-4 bg-indigo-400 w-full py-2 font-bold text-white">
</form>
<style>
    
</style>
<script>
    let preview = document.getElementById("dropzone-file")
    preview.addEventListener("change", e => {
        const file = e.srcElement.files[0]
        if (file) {
            document.getElementById("preview").src = URL.createObjectURL(file)

        }
    })
</script>
<?php include("includes/footer.php") ?>