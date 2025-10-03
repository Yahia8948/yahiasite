<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - بنك العائلة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');
        body {
            font-family: 'Tajawal', sans-serif;
        }
        .rtl-support {
            direction: rtl;
        }
    </style>
</head>
<body class="bg-gray-100 rtl-support">
    <!-- شريط التنقل -->
    <nav class="bg-blue-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4 space-x-reverse">
                <i data-feather="home" class="w-6 h-6"></i>
                <span class="text-xl font-bold">بنك العائلة</span>
            </div>
            <a href="index.html" class="hover:text-blue-200 transition">العودة للرئيسية</a>
        </div>
    </nav>

    <!-- نموذج تسجيل الدخول -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-blue-800 py-4 px-6">
                <h2 class="text-2xl font-bold text-white text-center">تسجيل الدخول</h2>
            </div>
            <form class="p-6" action="process_login.php" method="POST">
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-medium mb-2">البريد الإلكتروني</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i data-feather="mail" class="text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email" class="w-full pr-10 pl-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="example@family.com" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-medium mb-2">كلمة المرور</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <i data-feather="lock" class="text-gray-400"></i>
                        </div>
                        <input type="password" id="password" name="password" class="w-full pr-10 pl-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="********" required>
                    </div>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="remember" class="mr-2 text-sm text-gray-600">تذكرني</label>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline">نسيت كلمة المرور؟</a>
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-blue-800 hover:bg-blue-900 text-white font-medium rounded-lg transition duration-200">
                    دخول
                </button>
                <div class="mt-4 text-center">
                    <span class="text-gray-600">ليس لديك حساب؟</span>
                    <a href="register.php" class="text-blue-600 hover:underline font-medium">سجل الآن</a>
                </div>
            </form>
        </div>
    </div>

    <!-- تذييل الصفحة -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-2 space-x-reverse">
                        <i data-feather="home" class="w-6 h-6"></i>
                        <span class="text-xl font-bold">بنك العائلة</span>
                    </div>
                    <p class="mt-2 text-blue-200">نظام نقاط العائلة الذكي © 2023</p>
                </div>
                <div class="flex space-x-6 space-x-reverse">
                    <a href="#" class="hover:text-blue-200 transition">الشروط والأحكام</a>
                    <a href="#" class="hover:text-blue-200 transition">سياسة الخصوصية</a>
                    <a href="#" class="hover:text-blue-200 transition">تواصل معنا</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>
</body>
</html>
