<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="pesan" >pesan singkat</div>
    <script src="javascript.js"></script>
    <script>
        document.write("menulis dengan java sript");
        document.getElementById("pesan").innerHTML="mengganti tulisan pesan singkat";
        document.getElementById("pesan").style.color="#000fff";
    </script>

    <div>
        perulangan while <p>while(logika true)(<br>area perulangan<br>)</p>
    </div>
    <script>
        let = nAwal = 0;
        var nAkhir= 10;
        while(nAwal < nAkhir){
            document.write("<br>perulangan test ke-"+nAwal);
            nAwal++;
        }
    </script>
</body>
</html>