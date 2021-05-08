

<!doctype html>
<html>

<head>

    <title>SIP Fitri Card by Abu Hasna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <script src="js/canvas2image.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="css/OverrideCss.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.jpeg" sizes="32x32" />
    <link rel="icon" href="images/logo.jpeg" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.jpeg" />
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Roboto">

    <style>
        .doc {
            width:100%;
            margin: 0 auto;
        }

        canvas {
            display: block;
            border: 2px solid #888;
        }
    </style>
</head>

<body class="rtls boxed-layout" >
    <div class="container" style="max-width:720px;">
        
        <div class="doc" style="padding-top:0%; ">
			<br />
            <div style="text-align:center; font-weight:100;font-size:20px;">
                Kartu Idul Fitri <b>Solidaritas Insan Peduli</b>
            </div>
            <hr />
            <canvas width="1280" height="1280" id="myCanvas"></canvas>
            <br />
            <input type="text" id="txt" placeholder="Tuliskan Nama Anda disini, dan Klik Tampilkan" class="form-control" style="font-size:14px; text-align:left;  " />

            <br />
            <input type="button" id="btn" value="Tampilkan" onclick="showImg()" class="btn btn-danger" style="font-size:18px; text-align:right;  " />
			<input type="button" id="save" value="Simpan" onclick="saveImg()" class="btn btn-primary hidden" style="font-size:18px; text-align:right;" />
			
            <hr />
			
			<div class="alert alert-info">
                <ul dir="ltr" style="list-style-type: none; padding-left:0%;">
                    <li><span class="fa fa-desktop" style="padding-left:5px;"></span> &nbsp Untuk menyimpan gambar dari komputer, klik kanan gambar dan pilih <b>Simpan Gambar</b></li>
                    <li><span class="fa fa-mobile-phone fa-2x" style="padding-left:7px;"></span>  &nbsp Untuk menyimpan gambar dari ponsel, klik pada gambar selama dua detik dan pilih <b>Simpan Gambar</b> </li>
                </ul>
            </div>
            
        </div>
        </div>
    <script>

        function saveImg()
        {
            var canvas = document.getElementById("myCanvas"); 
            var img = canvas.toDataURL("image/png");
            document.write('<img src="' + img + '.png"/>');
        }

        function showImg() {
            var element = document.getElementById("save");
            element.classList.remove("hidden");

			var str1="";
			var str2="";
            var name = document.getElementById("txt").value;
			var res = str1.concat(name, str2);
            var canvas = document.getElementById("myCanvas");
            var context = canvas.getContext("2d");
            context.clearRect(0, 0, 3000, 2000);
            var fontsize = 50;

            if (name.length > 20) {
                fontsize = 70 - (name.length - 30);
            }
            //alert(name.length);
            var imageObj = new Image();
            imageObj.onload = function () {
                //context.scale(0.15, 0.15);
                context.drawImage(imageObj, 0, 0);
                context.font = "bold"+ fontsize + "px arial";
                context.fillStyle = "#73B141";
                context.textAlign = "center";
                context.fillText(res, 650, 325);
            };
            imageObj.src = "images/1442H.jpeg";
        }

        window.onload = function () {
            var canvas = document.getElementById("myCanvas");
            var context = canvas.getContext("2d");
            var imageObj = new Image();
            imageObj.onload = function () {
                //context.scale(0.15, 0.15);
                context.drawImage(imageObj, 0, 0);
                context.font = "bold 70px Sans";
                context.fillStyle = "#2B6430";
                context.textAlign = "center";
                context.fillText("KURNIA ABU HASNA", 650, 325);
            };
            imageObj.src = "images/1442H.jpeg";
        };


    </script>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>
