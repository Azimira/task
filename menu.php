<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
         <a class="navbar-brand" href="index.php">Rapid KL</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'],'index') ?  'active' : '' ?>">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'],'form') ?  'active' : '' ?>">
                  <a class="nav-link" href="form.php">Form</a>
               </li>
               <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'],'history') ?  'active' : '' ?>">
                  <a class="nav-link" href="history.php">History</a>
               </li>
               <li class="nav-item <?php echo strpos($_SERVER['PHP_SELF'],'contact') ?  'active' : '' ?>">
                  <a class="nav-link" href="contact.php">Contact </a>
               </li>
            </ul>
            <ul class="navbar-nav" style="padding-right:80px">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $admin['name'] ?></a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="../controller/control.php?mod=logout" onclick="return confirm('Are you sure ?')">Log out</a>
                  </div>
               </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
               <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
               </form> -->
         </div>
      </nav>