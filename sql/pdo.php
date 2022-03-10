<?php require $_SERVER['DOCUMENT_ROOT']."/web/vendor/autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Basic</title>
    <link rel="stylesheet" href="/web/theme/css/bootstrap-theme.css">
</head>
<body class="font-mali">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <card class="mb-3">
                    <h4 class="card-header bg-primary text-white">PHP PDO</h4>
                    <div class="card-body bg-white">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>surname</th>
                                    <th>position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    use App\Model\Student;

                                    $studentObj = new Student();

                                    $students = $studentObj->getAllStudents();
                                    $n=0;
                                    foreach($students as $student) {
                                        $n++;
                                        echo "
                                        <tr>
                                            <td>{$n}</td>
                                            <td>{$student['name']}</td>
                                            <td>{$student['surname']}</td>
                                            <td>{$student['position']}</td>
                                        </tr>
                                        ";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </card>
            </div>
        </div>
    </div>

    
</body>
</html>