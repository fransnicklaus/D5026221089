<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeText() {
            var span = document.getElementById("output");//mendapatakan object tulisan
            var textBox = document.getElementById("textbox");//mendapatkan object tex box
            textBox.style.color = "red"; // Menggunakan DOM CSS, color text diubah ke red
            span.innerHTML = textBox.value; // Membaca isi textbox, dengan mengubah tulisan non input
        }
    </script>
</head>''
<body>
    <div class="container">
        <script>
            function showAlert() {
                alert("Selamat Anda mendapatkan 100 jt");
            }
        </script>
        <button class="btn btn-primary" onclick="showAlert();"> Klik Di Dini</button>
        <br>
        <button onclick="changeText();" class="btn btn-warning">Click me!</button>
        <span id="output">replace me</span>
        <input id="textbox" type="text" class="form-control"/>
    </div>
</body>
</html>
