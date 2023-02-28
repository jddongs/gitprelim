<?php
require('connection.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DONGUINES_PrelimExam</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>


  <body class="bg-slate-400">
    
<nav class="p-3 border-gray-200 rounded bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">DONGUINES</span>
    </a>
    <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
      <ul class="flex flex-col mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
        <li>
          <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
        </li>
        <li>
          <a href="studentcreate.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Student</a>
        </li>
        <li>
          <a href="employeecreate.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Employee</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

    <div class="container my-10 bg-indigo-100 rounded">
      
      <div class="row">
        <div class="col-md-12">
          <div class="card p-10 my-7">
            <div class="card-header">
              <h4 class="text-blue-900 font-serif font-semibold md: text-sm sm:text-2xl">Student Details
                <a href="studentcreate.php" class="btn btn-primary float-end">Add Student</a>
              </h4>
            </div>
            <div class="card-body">
              
            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control" placeholder="Search Student">
                <button type="submit" class="btn btn-primary">Search</button>
                
              </div>
            </form>
              <table class="table table-bordered table-striped font-mono font-extralight sm:columns-sm">
                <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Address</th>
                  <th>Age</th>
                  <th>Sex</th>
                  <th>Mobile</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM student";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $student){
                      //echo $student['name'];
                      ?>
                      <tr>
                        <td><?= $student['id']; ?></td>
                        <td><?= $student['name']; ?></td>
                        <td><?= $student['address']; ?></td>
                        <td><?= $student['age']; ?></td>
                        <td><?= $student['sex']; ?></td>
                        <td><?= $student['mobile']; ?></td>
                      </tr>
                      <?php
                  
                    }
                  }
                  else{
                    echo "<h5> No Record Found </h5>";
                  }
                  ?>
                  
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-10 bg-indigo-100 rounded">
      
      <div class="row">
        <div class="col-md-12">
          <div class="card p-10 my-7">
            <div class="card-header">
              <h4 class="text-blue-900 font-serif font-semibold md: text-sm sm:text-2xl">Employee Details
                <a href="employeecreate.php" class="btn btn-primary float-end">Add Employee</a>
              </h4>
            </div>
            <div class="card-body">
              
            <form action="" method="GET">
              <div class="input-group mb-3">
                <input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control" placeholder="Search Employee">
                <button type="submit" class="btn btn-primary">Search</button>
                
              </div>
            </form>
              <table class="table table-bordered table-striped font-mono font-extralight sm:columns-sm">
                <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>Employee Name</th>
                  <th>Address</th>
                  <th>Age</th>
                  <th>Sex</th>
                  <th>Mobile</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM employee";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0){
                    foreach($query_run as $employee){
                      //echo $employee['name'];
                      ?>
                      <tr>
                        <td><?= $employee['id']; ?></td>
                        <td><?= $employee['name']; ?></td>
                        <td><?= $employee['address']; ?></td>
                        <td><?= $employee['age']; ?></td>
                        <td><?= $employee['sex']; ?></td>
                        <td><?= $employee['mobile']; ?></td>
                      </tr>
                      <?php
                  
                    }
                  }
                  else{
                    echo "<h5> No Record Found </h5>";
                  }
                  ?>
                  
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>