
<?php
session_start();
if(!$_SESSION['logged_in']){
    header('location: ./Auth.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    
    <style>
      table{
        background: gray;
        color: #fff;
        width: 88%;
        /* padding-left: 100px !important; */
        border: 1px solid #393939;
      }
      th, td{
        border: 1px solid #393939;
        padding: 8px 8px;
      }
      main{
        margin-left: 300px !important;
      }
    </style>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >name Design</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown" 
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">settin</a></li>
                <li>
                  <a class="dropdown-item" href="logout.php">log out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-white small fw-bold text-uppercase" style="padding: 0px 12px;">
               <span style="padding: 10px;">logo</span>
               <hr>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3  active" style="display: flex;"  >
              <span class="material-symbols-outlined " style="font-size: 30px;">Dashboard</span>Dashboard 
              </a>
            </li>
            <!-- <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2">
                <span class="material-symbols-outlined">
               person
               </span>
                <span>profile</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
    
            </li> -->
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2" ><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                    <a href="" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-user "></i
                      ></span>
                      <span>attedence</span>  
                    </a>
                  </li>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <!--  -->


           
              </a>
                
            </li>



            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  
    <main class="mt-5 pt-3">
    <a href="add.php"><button type="button" class="btn btn-primary">new student</button></a>
   <table class='mt-2'>
  <thead>
     
    <tr>
      <th scope="col">id</th>    
      <th scope="col">First</th>
      <th scope="col">phone</th>
      <th scope="col">class</th>
    </tr>
  </thead>
  <tbody>
      <?php

      require_once("conect.php");
  
      $result = mysqli_query($con,"SELECT * FROM  student");

    while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
         <td><?php echo $row['id']?></td>
        <td><?php echo $row['firstname']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['class']?></td>
      
        <td>
<?php

    }
?>
  
  </tbody>
   </table>
      
    </main>
     
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>  
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


  <script>

    $(document).ready(function(){
      $('#example').dataTable({ 
        dom: 'Bfrtip',
        destroy: true,
        buttons:[
          'copy','csv','excel','pdf','print'
        ]
      
      })
    
    }
    )
        
  </script>

  </body>
</html>
