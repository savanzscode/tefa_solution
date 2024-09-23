<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      position: fixed;
      top: 0;
      left: 0;
    }
    .sidebar .nav-link {
      color: white;
    }
    .sidebar .nav-link.active {
      background-color: #007bff;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav class="sidebar navbar-dark">
    <div class="position-sticky">
      <a class="navbar-brand p-3" href="#">Dashboard</a>
      <ul class="nav flex-column p-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="loadPage('home')">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="loadPage('profile')">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="loadPage('users')">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="loadPage('settings')">Settings</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content">
    <div id="content">
      <h1>Welcome to the Dashboard</h1>
      <p>Select a menu item to display content.</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function loadPage(page) {
      let content = document.getElementById('content');
      if (page === 'home') {
        content.innerHTML = '<h1>Home</h1><p>This is the home page content.</p>';
      } else if (page === 'profile') {
        content.innerHTML = '<h1>Profile</h1><p>This is the profile page content.</p>';
      } else if (page === 'users') {
        content.innerHTML = '<h1>Users</h1><p>This is the users page content.</p>';
      } else if (page === 'settings') {
        content.innerHTML = '<h1>Settings</h1><p>This is the settings page content.</p>';
      }
    }
  </script>
  
</body>
</html>
