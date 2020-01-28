<html>
<head>
	<title><?php echo $pageTitle; ?></title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>

  <svg style="display: none;">
    <defs>
      <svg id="logo_icon" viewBox="0 0 432 432">
              <path d="M367.9,109.9c-47,53-87.7,113.6-122.9,183.1h70.8c9.9,0,18,8.1,18,18s-8.1,18-18,18h-88.3
	c-1.7,3.7-3.4,7.3-5,11c-5.2,11.6-13.4,31.1-17.7,41.7c-2.5,6.3-3.9,8.2-7.4,9.8c-1.1,0.5-2.1,0.7-4.1,0.7c-5.3,0-7.4-1.8-12.7-11.1
	c-10.8-19.1-21.1-36.4-31-52.1h-39.8c-9.9,0-18-8.1-18-18s8.1-18,18-18h15.6c-8.7-12-17.1-22.8-25.4-32.4
	C89,247.7,74,232.2,60.3,219.4c-5.6-5.2-6.4-6.1-7.3-7.9c-1-2-1-2.2-1-5.5c0-4,0.6-6.4,2.2-9.7c2.8-5.8,8.5-9.9,15.5-11.4
	c3.5-0.7,10.8-0.9,15-0.3c14.7,2,33.2,8.4,59.7,20.6c6.3,2.9,25.7,12.6,33.7,16.7c2.5,1.3,4.5,2.4,4.6,2.4s2.3-2.6,5-5.9
	c16.4-19.4,39.1-45,59.8-67.4c1.9-2.1,3.8-4.1,5.7-6.2H109.8c-9.9,0-18-8.1-18-18s8.1-18,18-18h177.6c13.4-13.7,26.3-26.3,38.2-37.6
	L224.4,12.8c-19.5-11.3-43.5-11.3-63,0l-129.9,75C12,99,0,119.8,0,142.3v150c0,22.5,12,43.3,31.5,54.6l129.9,75
	c19.5,11.3,43.5,11.3,63,0l129.9-75c19.5-11.3,31.5-32.1,31.5-54.6v-150c0-14-4.6-27.3-12.8-38.1C371.3,106.1,369.6,108,367.9,109.9
	z M70.3,112c8.2,0,14.9,6.7,14.9,14.9c0,8.2-6.7,14.9-14.9,14.9c-8.2,0-14.9-6.7-14.9-14.9C55.5,118.6,62.1,112,70.3,112z
	 M70.3,325.8c-8.2,0-14.9-6.7-14.9-14.9c0-8.2,6.7-14.9,14.9-14.9c8.2,0,14.9,6.7,14.9,14.9C85.2,319.2,78.6,325.8,70.3,325.8z"/>
</svg>
      <svg id="task_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M64,53.3l-10,9.6c-0.7,0.7-1.8,1.1-2.5,1.1l0,0l0,0c-1.1,0-1.8-0.4-2.5-1.1l-10-9.6l0,0l0,0l0,0l0,0V3.6c0-2.1,1.4-3.6,3.6-3.6h17.8C62.6,0,64,1.4,64,3.6V53.3L64,53.3L64,53.3z M56.9,7.1H46.2v7.1h10.7V7.1z M56.9,49.1V17.8H46.2v31.3l5.3,4.3l0,0L56.9,49.1z M21.3,64H3.6C1.4,64,0,62.6,0,60.4V3.6C0,1.4,1.4,0,3.6,0h17.8c2.1,0,3.6,1.4,3.6,3.6v56.9C24.9,62.6,23.5,64,21.3,64z M17.8,7.1H7.1v7.1h5.3c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h1.8c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h5.3c1.1,0,1.8,0.7,1.8,1.8c0,1.1-0.7,1.8-1.8,1.8H7.1v7.1h1.8c1.1,0,1.8,0.7,1.8,1.8s-0.7,1.8-1.8,1.8H7.1v7.1h10.7V7.1z"/>
      </svg>
      <svg id="project_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M60.4,64H3.6C1.4,64,0,62.6,0,60.4V3.6C0,1.4,1.4,0,3.6,0h24.9c1.4,0,2.5,0.7,3.2,2.1l5.7,12.1h23.1c2.1,0,3.6,1.4,3.6,3.6v42.7C64,62.6,62.6,64,60.4,64z M7.1,56.9h49.8V21.3h-22c-1.4,0-2.5-0.7-3.2-2.1L26.3,7.1H7.1V56.9z"/>
        <path d="M60.4,7.1h-16c-2.1,0-3.6-1.4-3.6-3.6S42.3,0,44.4,0h16C62.6,0,64,1.4,64,3.6S62.6,7.1,60.4,7.1z"/>
      </svg>
      <svg id="report_icon" viewBox="0 0 64 64" preserveAspectRatio="xMinYMin meet">
        <path d="M60.4,0H3.6C1.4,0,0,1.4,0,3.6v56.9C0,62.6,1.4,64,3.6,64h56.9c2.1,0,3.6-1.4,3.6-3.6V3.6C64,1.4,62.6,0,60.4,0zM56.9,56.9H7.1V7.1h49.8V56.9z"/>
        <path d="M16.5,21.3h30.9c2.1,0,3.6-1.4,3.6-3.6c0-2.1-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6C13,19.9,14.4,21.3,16.5,21.3z" />
        <path d="M16.5,35.6h30.9c2.1,0,3.6-1.4,3.6-3.6s-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6S14.4,35.6,16.5,35.6z"/>
        <path d="M16.5,49.8h30.9c2.1,0,3.6-1.4,3.6-3.6s-1.4-3.6-3.6-3.6H16.5c-2.1,0-3.6,1.4-3.6,3.6S14.4,49.8,16.5,49.8z"/>
      </svg>
      <svg id="user_icon" viewBox="0 0 1792 1792" preserveAspectRatio="xMinYMin meet">
        <path d="M1536,1399q0,109-62.5,187t-150.5,78h-854q-88,0-150.5-78t-62.5-187q0-85,8.5-160.5t31.5-152,58.5-131,94-89,134.5-34.5q131,128,313,128t313-128q76,0,134.5,34.5t94,89,58.5,131,31.5,152,8.5,160.5zm-256-887q0,159-112.5,271.5t-271.5,112.5-271.5-112.5-112.5-271.5,112.5-271.5,271.5-112.5,271.5,112.5,112.5,271.5z" />

      </svg>
    </defs>
  </svg>

	<header class="header">
    <div class="col-container">
  		<h1>
        <a class="logo" href="./">
          <svg viewbox="0 0 64 64" class="logo-icon"><use xlink:href="#logo_icon"></use></svg>
          <span class="logo-name">Personal Todo App</span>
        </a>
      </h1>

        <ul class="nav navbar-left">
        <?php if(isAdmin()){ ?>
        <li class="nav-item tasks<?php if ($page == "admin") { echo " on"; } ?>"><a class="nav-link" href="admin.php">Admin</a></li>
        <?php } ?>
        <?php if(isAuthenticated()){ ?>
        <li class="nav-item tasks<?php if ($page == "tasks") { echo " on"; } ?>"><a class="nav-link" href="task_list.php">View Tasks</a></li>
        <li class="nav-item task<?php if ($page == "task") { echo " on"; } ?>"><a class="nav-link" href="task.php">Add Tasks</a></li>
        <?php } ?>
      </ul>
        <ul class="nav">
            <?php if(isAuthenticated()){ ?>
              <li class="nav-item task<?php if ($page == "account") { echo " on"; } ?>"><a class="nav-link" href="./account.php">My Account</a></li>
              <li class="nav-item tasks"><a class="nav-link" href="./inc/doLogout.php">Logout</a></li>
            <?php } else { ?>
              <li class="nav-item tasks<?php if ($page == "login") { echo " on"; } ?>"><a class="nav-link" href="./login.php">Login</a></li>
              <li class="nav-item tasks<?php if ($page == "register") { echo " on"; } ?>"><a class="nav-link" href="./register.php">Register</a></li>
            <?php } ?>
        </ul>
    </div>
  </header>
	<div id="content">
