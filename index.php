<?php
require('./conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Team/online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <h3><?php echo $headerName; ?></h3>
    </header>
    <section class="d-flex justify-content-center align-content-center p-2">
        <div class="card">
            <div class="card-body bg1">
                <p class="text-center">अपार हर्ष के साथ सूचित किया जाता है कि कटका क्रिकेट क्लब के द्वारा नाईट मैच
                    "Short Boundry"
                    टूर्नामेंट का आयोजन दिनांक <span class="specialDate"><?php echo $matchDate; ?></span> को किया जा रहा है</p>
                <div class="d-flex align-content-center justify-content-center ">
                    <p class="infotxt"> इस टूर्नामेंट के कुछ खास बातें इस प्रकार से है:</p>
                </div>
                <div class="d-flex align-content-center justify-content-center ">
                    <p class="termTxt"> Read Match Term & Conditions.</p>
                </div>

                <div>
                    <ul style="line-height:150%; color: rgb(69, 68, 71);">
                        <li>अंपायर का निर्णय सर्वमान्य होगा |</li>
                        <li>प्रत्येक मैच में मैन ऑफ़ द मैच ट्रॉफी दिया जायेगा |</li>
                        <li>मैन ऑफ द सीरीज में बैट दिया जायेगा |</li>
                        <li>टूर्नामेंट में विजेता टीम को ट्रॉफी , मैडल + ₹3001 तथा उपविजेता टीम को ट्रॉफी मैडल + ₹1100
                            दिया जायेगा |</li>
                        <li>इस टूर्नामेंट में भाग लेने वाले टीम को 1501 रुपया एंट्री फीस देना होगा |</li>
                        <li>रजिस्ट्रेशन शुल्क 501 रुपया देना अनिवार्य है |</li>
                        <li>विशेष जानकारी के लिए कॉल करें <a href="tel:8084110284">+91 8084110284</a> पर</li>
                    </ul>
                </div>

                <div class="d-flex align-content-center justify-content-center">
                    <p class="addr">Near : कटका,काली मंदिर</p>
                </div>
                <div class="d-flex align-content-center justify-content-center">
                    <a href="register.php" class="btnLink">Register now</a>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <a href="https://github.com/getsettalk" style="text-decoration: none; text-align: center;"> Developed By: Sujeet
            kumar</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>