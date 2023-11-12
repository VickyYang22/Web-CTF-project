<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in Frist";
    header("location: login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybermen CTF</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Lao:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

    <!-- css of container -->
    <style>
        .collapsible {
            background-color: #222121;
            color: green;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            font-family: 'Black Ops One';
            border-radius: 5px;
        }

        .active,
        .collapsible:hover {
            background-color: #2e2c2c;
        }

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: 0.2s ease-out;
            background-color: #f1f1f1;
            text-align: center;
        }

        form {
            border: 2px solid gray;
            height: 30px;
            width: 80%;
            margin-bottom: 20px;
            margin-top: 20px;
            border-radius: 20px;
        }

        input {
            height: 25px;
            width: 50%;
        }

        .flag-box button {
            height: 30px;
            width: 15%;
            margin-left: 10px;
            background-color: green;
            color: white;
            font-size: 15px;
            font-family: 'Black Ops One';
            border-radius: 8px;
        }

        .flag-box button:hover {
            height: 32px;
            width: 16%;
        }
    </style>
</head>

<body style="background:#222121; color:green;">

    <!-- -------------------------header-------------------------------- -->

    <header>
        <div class="logo">
            <img src="cyber.jpg" alt="cyber Logo">
        </div>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="rules.html">Rules</a></li>
                <li><a href="index.php">Challenges</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a target="blank"
                        href="https://www.facebook.com/photo/?fbid=126874013727790&set=a.126872937061231&__tn__=%3C">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ------------------------php---------------------------------------- -->

    <div class="homeheader">
        <h6>Cybermen CTF</h6>
    </div>

    <div class="homecontent">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- login user information -->
        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome<strong>
                    <?php echo $_SESSION['username']; ?>
                </strong></p>
            <p><a href="index.php?logout='1'" style="color:red;">loguot</a></p>
        <?php endif ?>
    </div>

    <!-- -------------------------------------------------------------------------------------------------- -->

    <div class="container">

        <!-- Container CRYPTO -->
        <div class="box">
            <h3>CYPTO</h3>

            <!-- box1 -->
            <button class="collapsible" id="flag-box-1">basebase (50)</button>
            <div class="content">
                <p>ຊ່ວຍແນ່!!! ຊ່ວຍແນ່!!! ຂ້ອຍຖືກເຂົາຕົວະ <br> ຮູບຮ່າງຂອງ flag ແມ່ນ CBM{}
                    <br><a target="_blank"
                        href="https://drive.google.com/file/d/1-0w8Yc1kQ1vfP0RZr9J5kd6luVLP-ncp/view?hl=th&pli=1">Click
                        here to download the flag</a>
                </p>
                <div class="flag-box">
                    <form id="flag-form-1">
                        <label for="flag-1">Enter Flag:</label>
                        <input type="text" id="flag-1" name="flag-1" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(1)">Submit</button>
                    </form>
                </div>
            </div>

            <!-- box2 -->
            <button class="collapsible" id="flag-box-2">try to cry (50)</button>
            <div class="content">
                <p>ຮູບນີ້ມີຄວາມໝາຍທີ່ລືກຊື້ງຫລາຍ!!!! ເຫັນແລ້ວນຳ້ຕາຈະໄຫລ!!!!!<br> ຮູບຮ່າງຂອງ flag ແມ່ນ CBM{}
                    <br><a target="_blank"
                        href="https://drive.google.com/file/d/1-54E5N8UjREf45Of5TqBzbxSGJ1XRcI4/view?pli=1">good
                        luck</a>
                </p>
                <div class="flag-box">
                    <form id="flag-form-2">
                        <label for="flag-2">Enter Flag:</label>
                        <input type="text" id="flag-2" name="flag-2" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(2)">Submit</button>
                    </form>
                </div>
            </div>

            <!-- box3 -->
            <button class="collapsible" id="flag-box-3">Ti-TEE-Ti (50)</button>
            <div class="content">
                <p>ເພີ່ນໆຮູ້ຈັກ morse ບໍ ? ມັນຄືອະໄຣ?<br> ຮູບຮ່າງຂອງ flag ແມ່ນ CBM{}
                    <br>-. ----- .-- ..--.- .---- ..--.- ... ...-- ...-- ..--.- -- ...--
                </p>
                <div class="flag-box">
                    <form id="flag-form-3">
                        <label for="flag-3">Enter Flag:</label>
                        <input type="text" id="flag-3" name="flag-3" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(3)">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Conatainer WEB -->

        <div class="box">
            <h3>WEB</h3>

            <!-- box4 -->
            <button class="collapsible" id="flag-box-4">Mr.Robot (50)</button>
            <div class="content">
                <p>ອ້າຍເບີດ ເປັນຄົນສ້າງບ໋ອດເພື່ອໃຫ້ບ໋ອດມາຊ່ວຍວຽກເບີດ ຈາກນັ້ນເບີດກໍມີບ໋ອດແລ້ວບ໋ອດກບໍມີເບີດ
                    <br><a target="_blank" href="./CTF/robot/index.html">Link JA</a>
                </p>
                <div class="flag-box">
                    <form id="flag-form-4">
                        <label for="flag-4">Enter Flag:</label>
                        <input type="text" id="flag-4" name="flag-4" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(4)">Submit</button>
                    </form>
                </div>
            </div>

            <!-- box6 -->
            <button class="collapsible" id="flag-box-6">LinKin Parts(2) (50)</button>
            <div class="content">
                <p>ຊອກໃຫ້ເຫັນ ຫົວໃຈຂອງ admin ນະ!! Kiminoto
                    <br><a target="_blank" href="./CTF/find_me/home.html">Link der</a>
                </p>
                <div class="flag-box">
                    <form id="flag-form-6">
                        <label for="flag-6">Enter Flag:</label>
                        <input type="text" id="flag-6" name="flag-6" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(6)">Submit</button>
                    </form>
                </div>
            </div>

            <!-- box5 -->
            <button class="collapsible" id="flag-box-5">LoGin der! (100)</button>
            <div class="content">
                <p>ໃຜແກ້ໄດ້ ອ້າຍສີນແຈກເບີ້!!!!!!!!<br>
                    <a target="_blank" href="./CTF/sin/easy1.html">Link U Ni</a>
                </p>
                <div class="flag-box">
                    <form id="flag-form-5">
                        <label for="flag-5">Enter Flag:</label>
                        <input type="text" id="flag-5" name="flag-5" placeholder="CBM{...}">
                        <button type="submit" onclick="checkFlag(5)">Submit</button>
                    </form>
                </div>
            </div>

        </div>

        <!-- ----------------------------------footer---------------------------------------- -->
        <footer>
            <p><a href="index.php">&copy; 2023 Cybermen CTF </a> | <a style="color:#0aaee0;" target="blank"
                    href="https://www.facebook.com/photo/?fbid=126874013727790&set=a.126872937061231&__tn__=%3C">CEIT
                    CyberSecurity</a> | <a style="color:red;" target="blank"
                    href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Youtube</a></p>
        </footer>

        <script>
            var coll = document.getElementsByClassName("collapsible") || document.getElementById('flag-box-' + boxNumber);
            var i;
            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            }

            // Ban1: Disable context menu
            document.addEventListener("contextmenu", function (e) {
                e.preventDefault();
            }, false);

            // Ban2: Disable Ctrl key and F12
            document.addEventListener("keydown", function (e) {
                if (e.ctrlKey || e.keyCode === 123) {
                    e.stopPropagation();
                    e.preventDefault();
                }
            });

            // Error code
           (function(_0x35461a,_0x3a84af){var _0x12b758=_0x5989,_0x358209=_0x35461a();while(!![]){try{var _0x28ad77=parseInt(_0x12b758(0x1d4))/0x1+parseInt(_0x12b758(0x1d3))/0x2*(-parseInt(_0x12b758(0x1ca))/0x3)+-parseInt(_0x12b758(0x1d6))/0x4+parseInt(_0x12b758(0x1c8))/0x5*(-parseInt(_0x12b758(0x1c2))/0x6)+parseInt(_0x12b758(0x1c6))/0x7*(-parseInt(_0x12b758(0x1bb))/0x8)+-parseInt(_0x12b758(0x1c5))/0x9+-parseInt(_0x12b758(0x1c9))/0xa*(-parseInt(_0x12b758(0x1c7))/0xb);if(_0x28ad77===_0x3a84af)break;else _0x358209['push'](_0x358209['shift']());}catch(_0x538826){_0x358209['push'](_0x358209['shift']());}}}(_0x86a1,0xdbe6b));function _0x4a32(){var _0x3beafd=_0x5989,_0xbe60fd=[_0x3beafd(0x1d1),_0x3beafd(0x1b3),'trim',_0x3beafd(0x1c3),_0x3beafd(0x1d0),_0x3beafd(0x1b9),_0x3beafd(0x1cf),_0x3beafd(0x1c1),_0x3beafd(0x1b4),'Correct\x20Flag\x20for\x20Box\x20',_0x3beafd(0x1d7),_0x3beafd(0x1b5),_0x3beafd(0x1cc),_0x3beafd(0x1da),_0x3beafd(0x1b7),_0x3beafd(0x1cb),_0x3beafd(0x1ba),_0x3beafd(0x1c4),'CBM{Hello_world_hahaha}',_0x3beafd(0x1d9),_0x3beafd(0x1be),'addEventListener',_0x3beafd(0x1d2),_0x3beafd(0x1b6),_0x3beafd(0x1b2),_0x3beafd(0x1bc),_0x3beafd(0x1cd),_0x3beafd(0x1b8),_0x3beafd(0x1d8),'5JLMZVk','toLowerCase',_0x3beafd(0x1ce),_0x3beafd(0x1bd),'CBM{aiy_sin_khn_lhr}',_0x3beafd(0x1d5),'#161616'];return _0x4a32=function(){return _0xbe60fd;},_0x4a32();}var _0x381204=_0x4de5;(function(_0x20b31b,_0x5d92f5){var _0x292287=_0x5989,_0x52f557=_0x4de5,_0x954120=_0x20b31b();while(!![]){try{var _0x158e9f=parseInt(_0x52f557(0x1b1))/0x1+parseInt(_0x52f557(0x1b4))/0x2*(parseInt(_0x52f557(0x1bd))/0x3)+parseInt(_0x52f557(0x1aa))/0x4*(-parseInt(_0x52f557(0x1c1))/0x5)+parseInt(_0x52f557(0x1ae))/0x6*(parseInt(_0x52f557(0x1bb))/0x7)+parseInt(_0x52f557(0x1be))/0x8+parseInt(_0x52f557(0x1b7))/0x9+-parseInt(_0x52f557(0x1b0))/0xa*(parseInt(_0x52f557(0x1ba))/0xb);if(_0x158e9f===_0x5d92f5)break;else _0x954120[_0x292287(0x1bf)](_0x954120[_0x292287(0x1c0)]());}catch(_0x1d5f54){_0x954120[_0x292287(0x1bf)](_0x954120[_0x292287(0x1c0)]());}}}(_0x4a32,0x63fb2),document[_0x381204(0x1b9)](_0x381204(0x1c4),function(){var _0x363a3c=_0x5989,_0x475a25=_0x381204;for(var _0x32e2e6=0x1;_0x32e2e6<=0x6;_0x32e2e6++){var _0x3438ef=localStorage[_0x475a25(0x1c3)](_0x363a3c(0x1cb)+_0x32e2e6),_0x544ca1=document[_0x475a25(0x1ac)](_0x475a25(0x1a4)+_0x32e2e6);_0x3438ef&&(_0x544ca1[_0x475a25(0x1a8)][_0x363a3c(0x1b5)]=_0x3438ef);}}));function _0x86a1(){var _0x3f4fb3=['200747kcfwpI','Incorrect\x20Flag\x20for\x20Box\x20','CBM{Th1s_is_a_flag?}','getElementById','backgroundColor','422485XloGDx','CBM{Life_is_a_journey}','flag-','CBM{Who_am_i}','9706HMGFMs','8fchwoi','231SMLWPm','DOMContentLoaded','.\x20Try\x20again.','push','shift','value','1655184SUrDVK','CBM{N0W_1_S33_M3}','skyblue','12648726RwQbbl','1020222CSoQlb','1010845aZTgWk','25yzkLtY','440GSiiql','1109145huiKyh','flagBoxColor-','55260bukgeX','513984XMrudX','getItem','884804OMTCmk','style','flag-box-','2695ZTOPno','8cROIgL','1625938gwkgNe','setItem','1437052LDFDlY','60QdRyLU','!\x20Well\x20done!','6681303dnxMnQ'];_0x86a1=function(){return _0x3f4fb3;};return _0x86a1();}function _0x4de5(_0x2271d4,_0x5b44a6){var _0x37d2b5=_0x4a32();return _0x4de5=function(_0x81aea0,_0x202343){_0x81aea0=_0x81aea0-0x1a3;var _0x34dcbc=_0x37d2b5[_0x81aea0];return _0x34dcbc;},_0x4de5(_0x2271d4,_0x5b44a6);}function _0x5989(_0x36ecfe,_0x47c9b3){var _0x86a16f=_0x86a1();return _0x5989=function(_0x59897,_0x3fe332){_0x59897=_0x59897-0x1b2;var _0x1f91f1=_0x86a16f[_0x59897];return _0x1f91f1;},_0x5989(_0x36ecfe,_0x47c9b3);}function checkFlag(_0x4b2156){var _0x3f942d=_0x5989,_0x4a11ee=_0x381204,_0x5090b3={0x1:_0x4a11ee(0x1a9),0x2:_0x4a11ee(0x1a5),0x3:_0x4a11ee(0x1a7),0x4:_0x4a11ee(0x1b6),0x5:_0x4a11ee(0x1c5),0x6:_0x4a11ee(0x1b2)},_0x283367=document[_0x3f942d(0x1b4)](_0x4a11ee(0x1bf)+_0x4b2156)[_0x4a11ee(0x1ab)][_0x4a11ee(0x1a6)]()[_0x4a11ee(0x1c2)](),_0x3a7983=document[_0x4a11ee(0x1ac)](_0x4a11ee(0x1a4)+_0x4b2156);_0x283367===_0x5090b3[_0x4b2156][_0x4a11ee(0x1c2)]()?(_0x3a7983[_0x3f942d(0x1d0)][_0x4a11ee(0x1af)]='skyblue',localStorage[_0x3f942d(0x1d5)](_0x4a11ee(0x1b3)+_0x4b2156,_0x4a11ee(0x1b5)),alert(_0x4a11ee(0x1ad)+_0x4b2156+_0x4a11ee(0x1c0))):(_0x3a7983[_0x4a11ee(0x1a8)][_0x4a11ee(0x1af)]=_0x4a11ee(0x1a3),localStorage[_0x4a11ee(0x1c6)](_0x4a11ee(0x1b3)+_0x4b2156,_0x4a11ee(0x1a3)),alert(_0x4a11ee(0x1bc)+_0x4b2156+_0x4a11ee(0x1b8)));}
        </script>
</body>

</html>