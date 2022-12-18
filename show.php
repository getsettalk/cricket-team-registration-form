<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show data All </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <h3>Katka Cricket Club - Session 3</h3>
    </header>

    <section class="container mt-2">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <p class="specialDate">All Registered Team Data:</p>
            <button class="btn btn-dark" onclick="window.print()"> Print </button>
        </div>
        <?php
        require('./conn.php');
        $sql = "SELECT * FROM `cric_team` ORDER BY t_id DESC";
        $run = mysqli_query($conn, $sql) or die($conn->error);
        if (mysqli_num_rows($run) > 0) {
        ?>
            <div class="table-responsive">
                <table id="customers">
                    <thead>
                        <tr>
                            <th style="column-width: 1230px;">Registered ID</th>
                            <th>Team/Group Name</th>
                            <th>Leader Name</th>
                            <th>Phone</th>
                            <th>Other Phone</th>
                            <th>Address</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($run)) {
                        ?>
                            <tr>
                                <td><?php echo $row['t_id'] ?></td>
                                <td><?php echo $row['teamName'] ?></td>
                                <td><?php echo $row['teamLeader'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['otherPhone'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['reg_date']." ".$row['reg_time'] ?></td>
                                
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center">
                Don't have yet any registered data of player ?
            </div>
        <?php
        }
        ?>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>