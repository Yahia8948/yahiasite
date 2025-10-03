<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - بنك العائلة</title>
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
            <div class="flex items-center space-x-4 space-x-reverse">
                <span class="hidden md:inline">مرحباً، محمد!</span>
                <a href="logout.php" class="px-4 py-2 bg-red-500 rounded hover:bg-red-600 transition flex items-center">
                    <i data-feather="log-out" class="w-4 h-4 mr-1"></i>
                    خروج
                </a>
            </div>
        </div>
    </nav>

    <!-- لوحة التحكم -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- الشريط الجانبي -->
            <aside class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-4 mb-6">
                    <div class="flex flex-col items-center py-4">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                            <i data-feather="user" class="w-10 h-10 text-blue-800"></i>
                        </div>
                        <h3 class="text-xl font-bold">محمد أحمد</h3>
                        <p class="text-gray-600">عضو منذ: 15/03/2023</p>
                    </div>
                    <hr class="my-3">
                    <nav>
                        <ul class="space-y-2">
                            <li>
                                <a href="dashboard.php" class="flex items-center p-2 text-blue-800 bg-blue-50 rounded-lg">
                                    <i data-feather="home" class="w-5 h-5 ml-2"></i>
                                    لوحة التحكم
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                                    <i data-feather="settings" class="w-5 h-5 ml-2"></i>
                                    الإعدادات
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- المحتوى الرئيسي -->
            <main class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-2xl font-bold mb-6">ملخص النقاط</h2>
                    
                    <!-- بطاقة النقاط -->
                    <div class="bg-gradient-to-r from-blue-800 to-blue-600 text-white rounded-lg p-6 mb-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-blue-200">رصيدك الحالي</p>
                                <p class="text-4xl font-bold">1,250 <span class="text-xl">نقطة</span></p>
                            </div>
                            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                                <i data-feather="award" class="w-8 h-8"></i>
                            </div>
                        </div>
                    </div>

                    <!-- آخر العمليات -->
                    <h3 class="text-xl font-semibold mb-4">آخر العمليات</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4 text-right">التاريخ</th>
                                    <th class="py-3 px-4 text-right">النقاط</th>
                                    <th class="py-3 px-4 text-right">السبب</th>
                                    <th class="py-3 px-4 text-right">بواسطة</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 px-4">15/06/2023</td>
                                    <td class="py-3 px-4 text-green-600 font-medium">+50</td>
                                    <td class="py-3 px-4">مساعدة الأخ في الدراسة</td>
                                    <td class="py-3 px-4">الأب</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">10/06/2023</td>
                                    <td class="py-3 px-4 text-red-600 font-medium">-30</td>
                                    <td class="py-3 px-4">عدم إنهاء الواجب</td>
                                    <td class="py-3 px-4">الأم</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">05/06/2023</td>
                                    <td class="py-3 px-4 text-green-600 font-medium">+100</td>
                                    <td class="py-3 px-4">تفوق في المدرسة</td>
                                    <td class="py-3 px-4">الأب</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
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
