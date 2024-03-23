<?php
include "query.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student : Information !!</title>
  <meta name="author" content="Codeconvey" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  body {
    background: #67B26F;
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);
    background: linear-gradient(to right, #4ca2cd, #67B26F);
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
  }

  .student-profile .card {
    border-radius: 10px;
  }

  .student-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
  }

  .student-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
  }

  .student-profile .card p {
    font-size: 16px;
    color: #000;
  }

  .student-profile .table th,
  .student-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
  }

  .none {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10%;
  }
</style>

<body>
  <section class="none">
    <div class="rt-container">
      <div class="col-rt-12">
        <div class="Scriptcontent">
          <div class="student-profile py-4">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm mt-5">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
                      <h3><?= $name ?></h3>
                    </div>
                    <div class="card-body">
                      <p class="mb-0"><strong class="pr-1">Roll No :</strong><?= $roll ?></p>
                      <p class="mb-0"><strong class="pr-1">Department:</strong><?= $dept ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card shadow-sm mt-5">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                      <table class="table table-bordered">
                        <tr>
                          <th width="30%">Phone</th>
                          <td width="2%">:</td>
                          <td><?= $phone ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Email</th>
                          <td width="2%">:</td>
                          <td><?= $email ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Current Adress</th>
                          <td width="2%">:</td>
                          <td><?= $c_adress ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Father Name</th>
                          <td width="2%">:</td>
                          <td><?= $f_name ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Mother Name</th>
                          <td width="2%">:</td>
                          <td><?= $m_name ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Permanent Adress</th>
                          <td width="2%">:</td>
                          <td><?= $p_adress ?></td>
                        </tr>
                        <tr>
                          <th width="30%">Working Field</th>
                          <td width="2%">:</td>
                          <td><?= $field ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div style="height: 26px"></div>
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Bio</h3>
                    </div>
                    <div class="card-body pt-0">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <a href="index.php#ajax"><button class="btn btn-primary">GO BACK</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>