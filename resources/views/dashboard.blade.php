<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HRMS - Famfa Solution Ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 1rem;
        }
        .sidebar a {
            color: #ffffff;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
        }
        .content-area {
            padding: 2rem;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card-metric {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-dark bg-dark px-4">
    <a class="navbar-brand" href="#">Famfa HRMS</a>
    <div class="text-white d-flex align-items-center">
        Welcome, Admin
        <img src="https://via.placeholder.com/40" class="rounded-circle ms-3" alt="User Profile" />
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <a href="#" class="active" onclick="loadModule('dashboard')">Dashboard</a>
            <a href="#" onclick="loadModule('leave')">Leave</a>
            <a href="#" onclick="loadModule('attendance')">Attendance</a>
            <a href="#" onclick="loadModule('salary')">Claim</a>
            <a href="#" onclick="loadModule('employees')">Employees</a>
            <a href="#" onclick="loadModule('settings')">Settings</a>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-10 content-area" id="main-content">
            <h4>Welcome to Famfa HRMS Dashboard</h4>
            <p>Select a module from the sidebar to begin.</p>
        </div>
    </div>
</div>

<!-- Scripts for Dynamic Content Loading -->
<script>
    function loadModule(module) {
        const content = document.getElementById("main-content");
        if (module === "leave") {
            content.innerHTML = `
        <h4>Apply for Leave</h4>
        <form class="mt-3">
          <div class="mb-3">
            <label for="leaveType" class="form-label">Leave Type</label>
            <select class="form-select" id="leaveType">
              <option>Sick Leave</option>
              <option>Casual Leave</option>
              <option>Earned Leave</option>
            </select>
          </div>
          <div class="mb-3">
            <label>Date Range</label>
            <div class="row">
              <div class="col"><input type="date" class="form-control"></div>
              <div class="col"><input type="date" class="form-control"></div>
            </div>
          </div>
          <div class="mb-3">
            <label for="reason" class="form-label">Reason</label>
            <textarea class="form-control" id="reason" rows="3"></textarea>
          </div>
          <button class="btn btn-primary">Submit</button>
        </form>`;
        } else if (module === "attendance") {
            content.innerHTML = `
        <h4>Attendance Logs</h4>
        <table class="table table-striped mt-3">
          <thead><tr><th>Date</th><th>Check-In</th><th>Check-Out</th><th>Status</th><th>Hours</th></tr></thead>
          <tbody>
            <tr><td>2025-06-21</td><td>09:00</td><td>18:00</td><td>Present</td><td>9h</td></tr>
            <tr><td>2025-06-20</td><td>09:30</td><td>18:15</td><td>Late</td><td>8.75h</td></tr>
          </tbody>
        </table>`;
        } else if (module === "salary") {
            content.innerHTML = `
        <h4>Submit Claim / Loan</h4>
        <form class="mt-3">
          <div class="mb-3">
            <label>Type</label>
            <select class="form-select"><option>Claim</option><option>Loan</option></select>
          </div>
          <div class="mb-3"><input type="number" class="form-control" placeholder="Amount"></div>
          <div class="mb-3"><input type="file" class="form-control"></div>
          <button class="btn btn-success">Submit</button>
        </form>`;
        } else if (module === "employees") {
            content.innerHTML = `
        <h4>Employee List</h4>
        <ul class="list-group mt-3">
          <li class="list-group-item">#001 - Alice (HR)</li>
          <li class="list-group-item">#002 - Bob (IT)</li>
          <li class="list-group-item">#003 - Carol (Finance)</li>
        </ul>`;
        } else if (module === "settings") {
            content.innerHTML = `
        <h4>System Settings</h4>
        <p>Manage roles, notifications, approval flow, etc.</p>`;
        } else if (module === "dashboard"){
            content.innerHTML = `
        <div class="col-md-10 p-3">
        <h4>Dashboard Overview</h4>
        <div class="row mt-4">
          <div class="col-md-3">
            <div class="card card-metric shadow-sm">
              <h5>Total Employees</h5>
              <p>112</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-metric shadow-sm">
              <h5>Pending Leaves</h5>
              <p>8</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-metric shadow-sm">
              <h5>Today's Attendance</h5>
              <p>97</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-metric shadow-sm">
              <h5>Salary Requests</h5>
              <p>5</p>
            </div>
          </div>
        </div>`;
        } else {
            content.innerHTML = `
        <h4>Dashboard Overview</h4>
        <p>Select a module from the sidebar to begin.</p>`;
        }

        // Active link highlight
        document.querySelectorAll('.sidebar a').forEach(link => link.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
