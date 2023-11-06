<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm()
        {
            console.log("Ini baris 15");
            //return false;
            console.log("ini barus 17");
            //return true;
            console.log("ini baris 19");
            return false;
        }

        function validate()
        {
            //var bil1 = document.getElementById("bil1");
            //var bil2 = document.getElementById("bil2");
            var NRP = document.getElementById("NRP");

            /*if(bil1.value == "" && bil2.value == "") {
                alert("Bilangan 1 dan bilangan 2 harus diisi");
                bil1.focus();
                return false;
            } else if (bil1.value == "") {
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                return false;
            } else if (bil2.value == "") {
                alert("Bilangan 2 harus diisi");
                bil2.focus();
                return false;
            } else {
                return true;
            } */

            if(NRP.value == "")
            {
                alert("NRP harus diisi");
                return false;
            }
            else if(isNaN(NRP.value))
            {
                alert("Harus Angka");
                return false;
            }
            else if (NRP.value.length != 10)
            {
                alert("Bukan NRP, harus panjangnya 10")
                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="https://www.detik.com" method="post" onsubmit= "return validate();">
            <div class="form-group">
                <label for="bil1">Bilangan 1 :</label>
                <input type="Number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 :</label>
                <input type="Number" id="bil2" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">NRP :</label>
                <input type="text" id="NRP" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
