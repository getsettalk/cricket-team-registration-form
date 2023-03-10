<?php
require('./conn.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register For Tournament</title>
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
                <h5
                    style="font-family: Georgia, 'Times New Roman', Times, serif; background-color: #fa7e9d; width: 240px; border-radius: 5px;">
                    Team Registration Form:</h5>
                <form id="form1" method="post">

                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">Do not fill wrong
                        information. otherwise your registration will reject.</p>
                    <div class="mt-2 mb-2">
                        <input type="text" name="teamName" id="teamName" class="form-control"
                            placeholder="Enter Team/group Name">
                    </div>
                    <div class="mt-2 mb-2">
                        <input type="text" name="teamLeader" id="teamLeader" class="form-control"
                            placeholder="Enter Team Leader Name">
                    </div>
                    <div class="mt-2 mb-2">
                        <input type="number" name="phone" id="phone" class="form-control"
                            placeholder="Enter Phone Number">
                    </div>
                    <div class="mt-2 mb-2">
                        <input type="number" name="Otherphone" id="Otherphone" class="form-control"
                            placeholder="Enter Another Phone Number">
                    </div>
                    <div class="mt-2 mb-2">
                        <textarea name="address" id="address" class="form-control" rows="2"
                            placeholder="Your Address"></textarea>
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-center align-content-center">
                        <button class="sbt" type="submit"> Confirm & Continue</button>
                    </div>
                </form>

                <div id="box2" class="d-none">
                    <div class="d-flex justify-content-center align-content-center p-2">
                        <p class="s-alertBox">Registration Successfull</p>
                    </div>
                    <p class="text-center ssMsg">Hi <span id="uname"></span>. Your Registration for Tournament has been
                        Successfully done.you have to now
                        pay initital apply fee ??? 501.
                        we will call you if you will selected for this tournament by this Phone number : <?php echo $orgManNumber; ?>
                    </p>
                    <p style="text-align: center;">Thank You !</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <a href="https://github.com/getsettalk" style="text-decoration: none; text-align: center;"> Developed By: Sujeet
            kumar</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            // alert("")
            var form1 = $("#form1");
            var box2 = $("#box2");
            form1.on('submit', function (e) {
                e.preventDefault()
                var teamName = $("#teamName");
                var teamLeader = $("#teamLeader");
                var phone = $("#phone");
                var Otherphone = $("#Otherphone");
                var address = $("#address");

                if (teamName.val().trim().length < 3) {
                    alert("Please Enter Valid Team/Group Name.")
                    teamName.css('border-color', 'red')
                    if (navigator.vibrate) {
                        window.navigator.vibrate(200);
                    }
                } else {
                    teamName.css('border-color', '')
                    if (teamLeader.val().trim().length < 3) {
                        alert("Please Enter Team Leader Name.")
                        teamLeader.css('border-color', 'red')
                        if (navigator.vibrate) {
                            window.navigator.vibrate(200);
                        }
                    } else {
                        teamLeader.css('border-color', '')
                        if (phone.val().trim().length !== 10) {
                            alert("Enter 10 digit Phone Number")
                            phone.css('border-color', 'red')
                            if (navigator.vibrate) {
                                window.navigator.vibrate(200);
                            }
                        } else {
                            phone.css('border-color', '')
                            if (address.val().trim().length < 5) {
                                alert("Write Your Full Address.")
                                address.css('border-color', 'red')
                                if (navigator.vibrate) {
                                    window.navigator.vibrate(200);
                                }
                            } else {
                                if (confirm("Are you sure,want to register for Cricket Match")) {
                                    $.ajax({
                                        url: 'saveData.php',
                                        type: 'post',
                                        data: form1.serialize(),
                                        success: function (data) {
                                            console.log(JSON.parse(data))
                                            var Data = JSON.parse(data);
                                            if (Data.code == 222) {
                                                form1.trigger('reset');
                                                form1.addClass('d-none')
                                                box2.removeClass('d-none')
                                                $("#uname").html(Data.teamLeader)
                                                if (navigator.vibrate) {
                                                    window.navigator.vibrate(350);
                                                }

                                            } else {
                                                alert(`??? ${Data.msg}`)
                                            }

                                        }
                                    })
                                } else {
                                    return false;
                                }
                            }
                        }
                    }

                }
            })
        })
    </script>
</body>

</html>