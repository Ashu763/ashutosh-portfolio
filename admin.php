<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit;
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "job_portfolio");
if (!$conn) {
    die("Database connection failed");
}

$query = "SELECT * FROM contact_messages ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel | Contact Messages</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-slate-100 via-slate-200 to-slate-300 px-6 py-10">

  <!-- TOP CONTEXT -->
  <div class="max-w-6xl mx-auto mb-8 flex items-center justify-between">
    <div>
      <p class="text-[11px] uppercase tracking-[0.35em] text-slate-500">
        Secure Admin Area
      </p>
      <h1 class="text-3xl font-semibold text-slate-800 mt-1">
        Contact Messages
      </h1>
      <p class="text-sm text-slate-600 mt-1">
        Review and manage user contact submissions
      </p>
    </div>

    <a href="logout.php"
       class="text-sm font-semibold text-red-600
              border border-red-200 px-4 py-2 rounded-lg
              hover:bg-red-50 transition">
      Logout
    </a>
  </div>

  <!-- MAIN CARD -->
  <div class="max-w-6xl mx-auto bg-white/90 backdrop-blur-xl
              rounded-2xl border border-slate-200
              shadow-[0_40px_120px_rgba(15,23,42,0.18)]
              overflow-hidden">

    <!-- TABLE HEADER STRIP -->
    <div class="px-8 py-5 border-b border-slate-200 bg-slate-50">
      <p class="text-sm text-slate-600">
        Messages received from portfolio contact form
      </p>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">

        <thead class="bg-slate-100 text-slate-700">
          <tr>
            <th class="px-8 py-4 text-sm font-semibold">Name</th>
            <th class="px-8 py-4 text-sm font-semibold">Email</th>
            <th class="px-8 py-4 text-sm font-semibold">Message</th>
            <th class="px-8 py-4 text-sm font-semibold text-center">Action</th>
          </tr>
        </thead>

        <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr class="border-t border-slate-200 hover:bg-slate-50 transition">

              <td class="px-8 py-6 font-medium text-slate-800">
                <?php echo $row['name']; ?>
              </td>

              <td class="px-8 py-6 text-slate-600">
                <?php echo $row['email']; ?>
              </td>

              <td class="px-8 py-6 text-slate-600 leading-relaxed max-w-md">
                <?php echo $row['message']; ?>
              </td>

              <td class="px-8 py-6 text-center space-x-4 whitespace-nowrap">
                <a href="update.php?id=<?php echo $row['id']; ?>"
                   class="text-blue-600 font-semibold hover:text-blue-800">
                  Update
                </a>

                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this message?')"
                   class="text-red-600 font-semibold hover:text-red-800">
                  Delete
                </a>
              </td>

            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr>
            <td colspan="4" class="px-8 py-12 text-center text-slate-500">
              No contact messages found.
            </td>
          </tr>
        <?php endif; ?>
        </tbody>

      </table>
    </div>
  </div>

  <!-- FOOTER -->
  <p class="text-center text-xs text-slate-500 mt-10">
    © 2026 Ashutosh — Admin Panel • Authorized Access Only
  </p>

</body>
</html>