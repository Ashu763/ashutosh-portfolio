<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS (if needed later) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center px-4">

    <!--  CARD START  -->
    <div class="bg-white w-full max-w-md rounded-2xl shadow-xl p-8
                animate-fade-in hover:shadow-2xl transition-all duration-500">

        <!--  HEADING  -->
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Contact Me</h2>
            <p class="text-sm text-gray-500 mt-1">
                Connect with us, we are united
            </p>
        </div>

        <!--  FORM  -->
        <form method="POST" action="save.php" class="space-y-4">

            <!-- Name Field -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    required
                    placeholder="Enter your name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           transition"
                >
            </div>

            <!-- Email Field -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    required
                    placeholder="Enter your email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           transition"
                >
            </div>

            <!-- Message Field -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Message
                </label>

                <textarea
                    name="message"
                    rows="4"
                    required
                    placeholder="Write your message..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2
                           focus:ring-2 focus:ring-blue-500 focus:outline-none
                           transition resize-none"
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button
                type="submit"name="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold
                       hover:bg-blue-700 hover:scale-[1.02]
                       transition-all duration-300 shadow-md"
            >
                Send Message
            </button>

            <!--  SUCCESS MESSAGE  -->
            <?php
            session_start();

            if (isset($_SESSION['success'])) {
            ?>
                <div class="mt-4 text-green-700 bg-green-100 px-4 py-2 rounded-lg text-center">
                    <?php echo $_SESSION['success']; ?>
                </div>
            <?php
                // showing messages only one time
                unset($_SESSION['success']);
            }
            ?>

        </form>

        <!--  FOOTER  -->
        <p class="text-center text-xs text-gray-400 mt-6">
            © 2026 Ashutosh | All Rights Reserved
        </p>

    </div>
    <!--  CARD END  -->

    <!--  ANIMATION  -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }
    </style>

</body>
</html>