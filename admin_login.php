<?php
session_start();

// Agar already login hai to direct admin panel
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: admin.php");
    exit;
}

// Simple admin credentials (abhi hardcoded)
$adminEmail = "admin@ashu.com";
$adminPassword = "admin123";

// Login check
if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if ($email === $adminEmail && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | Secure Access</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center
             bg-gradient-to-br from-slate-100 via-slate-200 to-slate-300
             px-4">

    <!-- TOP CONTEXT -->
    <div class="absolute top-16 text-center">
        <p class="text-[11px] uppercase tracking-[0.45em] text-slate-500">
            Secure Admin Access
        </p>
        <p class="text-sm text-slate-500 mt-2">
            Designed for controlled, role-based administration
        </p>
    </div>

    <!-- LOGIN CARD -->
    <div class="bg-white/85 backdrop-blur-xl
                w-full max-w-sm
                rounded-2xl p-8
                border border-slate-200/70
                shadow-[0_50px_120px_rgba(15,23,42,0.18)]
                relative overflow-hidden">

        <!-- CARD ANCHOR -->
        <div class="text-center mb-4">
            <span class="inline-block text-[10px] uppercase tracking-[0.35em]
                         text-blue-600 bg-blue-50
                         px-3 py-1 rounded-full">
                Admin Panel
            </span>
        </div>

        <h2 class="text-2xl font-semibold text-slate-800 text-center mb-1">
            Admin Login
        </h2>
        <p class="text-sm text-slate-500 text-center mb-6">
            Login to access the admin dashboard
        </p>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 text-sm px-3 py-2 rounded-lg mb-4 text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="post" class="space-y-4">

            <div>
                <label class="text-sm text-slate-600">Email</label>
                <input type="email" name="email" required
                       class="w-full mt-1 px-4 py-2.5 rounded-lg
                              border border-slate-300
                              focus:ring-2 focus:ring-blue-500
                              focus:outline-none">
            </div>

            <div>
                <label class="text-sm text-slate-600">Password</label>
                <input type="password" name="password" required
                       class="w-full mt-1 px-4 py-2.5 rounded-lg
                              border border-slate-300
                              focus:ring-2 focus:ring-blue-500
                              focus:outline-none">
            </div>

            <button type="submit" name="login"
                    class="w-full bg-blue-600 text-white py-2.5 rounded-lg
                           font-medium tracking-wide
                           hover:bg-blue-700
                           shadow-[0_12px_30px_rgba(37,99,235,0.35)]
                           transition
                           active:scale-[0.98]">
                Login
            </button>

        </form>

        <p class="text-[11px] text-slate-400 text-center mt-6">
            Authorized access only
        </p>
    </div>

</body>
</html>