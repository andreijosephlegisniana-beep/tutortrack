<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students — TutorTrack</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="app-container">
        <!-- SIDEBAR (same as dashboard) -->
        <aside class="sidebar">
            <div>
                <div class="sidebar-logo">
                    <span>TutorTrack</span>
                </div>
                <nav class="sidebar-nav">
                    <a href="dashboard.php">📊 Dashboard</a>
                    <a href="students.php" class="active">👥 Students</a>
                    <a href="enrollment.php">📋 Enrollment</a>
                    <a href="attendance.php">✅ Attendance</a>
                    <a href="attendance-history.php">📅 Attendance History</a>
                    <a href="reports.php">📈 Reports</a>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="profile.php" style="text-decoration:none; color:inherit;">
                    <div class="user-profile">
                        <div class="user-avatar">NK</div>
                        <div class="user-info">
                            <div class="name">NKIESY D.</div>
                            <div class="role">Tutor since May 2025</div>
                        </div>
                    </div>
                </a>
            </div>
        </aside>

        <main class="main-content">
            <div class="page-header">
                <div class="page-title">
                    <h1>Students</h1>
                    <p>Manage student records and information.</p>
                </div>
                <button class="btn btn-primary">+ Add student</button>
            </div>

            <div class="table-wrapper">
                <div class="table-header">
                    <input type="text" placeholder="Search by student ID or subject..." class="form-control" style="max-width:300px;">
                    <button class="btn btn-outline">Filter</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Age</th>
                            <th>Subject</th>
                            <th>Schedule</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Student 001</strong><br><small style="color:var(--text-muted);">S01</small></td>
                            <td>8 years</td>
                            <td>Mathematics</td>
                            <td>Mon & Wed — 3:00 PM</td>
                            <td><span class="badge success">Active</span></td>
                            <td>
                                <a href="#" class="action-link">✏️</a>
                                <a href="#" class="action-link" style="color:var(--danger);">🗑️</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Student 002</strong><br><small style="color:var(--text-muted);">S02</small></td>
                            <td>10 years</td>
                            <td>English</td>
                            <td>Tue & Thu — 4:00 PM</td>
                            <td><span class="badge success">Active</span></td>
                            <td>
                                <a href="#" class="action-link">✏️</a>
                                <a href="#" class="action-link" style="color:var(--danger);">🗑️</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Student 003</strong><br><small style="color:var(--text-muted);">S03</small></td>
                            <td>9 years</td>
                            <td>Science</td>
                            <td>Fri — 4:30 PM</td>
                            <td><span class="badge warning">Pending</span></td>
                            <td>
                                <a href="#" class="action-link">✏️</a>
                                <a href="#" class="action-link" style="color:var(--danger);">🗑️</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Student 004</strong><br><small style="color:var(--text-muted);">S04</small></td>
                            <td>12 years</td>
                            <td>Science</td>
                            <td>Sat — 10:00 AM</td>
                            <td><span class="badge success">Active</span></td>
                            <td>
                                <a href="#" class="action-link">✏️</a>
                                <a href="#" class="action-link" style="color:var(--danger);">🗑️</a>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Student 005</strong><br><small style="color:var(--text-muted);">S05</small></td>
                            <td>10 years</td>
                            <td>Mathematics</td>
                            <td>Mon & Wed — 5:00 PM</td>
                            <td><span class="badge success">Active</span></td>
                            <td>
                                <a href="#" class="action-link">✏️</a>
                                <a href="#" class="action-link" style="color:var(--danger);">🗑️</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>

</body>
</html>