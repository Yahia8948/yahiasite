<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سجل العمليات - بنك العائلة</title>
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
                <span class="text-xl font-bold">بنك العائلة - لوحة الإدارة</span>
            </div>
            <div class="flex items-center space-x-4 space-x-reverse">
                <span class="hidden md:inline">مرحباً، الأدمن!</span>
                <a href="logout.php" class="px-4 py-2 bg-red-500 rounded hover:bg-red-600 transition flex items-center">
                    <i data-feather="log-out" class="w-4 h-4 mr-1"></i>
                    خروج
                </a>
            </div>
        </div>
    </nav>

    <!-- لوحة الإدارة -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- الشريط الجانبي -->
            <aside class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-4 mb-6">
                    <div class="flex flex-col items-center py-4">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                            <i data-feather="user" class="w-10 h-10 text-blue-800"></i>
                        </div>
                        <h3 class="text-xl font-bold">الأدمن</h3>
                        <p class="text-gray-600">مدير النظام</p>
                    </div>
                    <hr class="my-3">
                    <nav>
                        <ul class="space-y-2">
                            <li>
                                <a href="admin.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                                    <i data-feather="home" class="w-5 h-5 ml-2"></i>
                                    لوحة التحكم
                                </a>
                            </li>
                            <li>
                                <a href="transactions.php" class="flex items-center p-2 text-blue-800 bg-blue-50 rounded-lg">
                                    <i data-feather="list" class="w-5 h-5 ml-2"></i>
                                    سجل العمليات
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-gray-600 hover:bg-gray-50 rounded-lg">
                                    <i data-feather="settings" class="w-5 h-5 ml-2"></i>
                                    إعدادات النظام
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- المحتوى الرئيسي -->
            <main class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">سجل العمليات</h2>
                        <div class="flex space-x-4 space-x-reverse">
                            <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition flex items-center">
                                <i data-feather="download" class="w-4 h-4 mr-1"></i>
                                تصدير
                            </button>
                            <div class="relative">
                                <input type="text" placeholder="بحث..." class="pr-10 pl-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i data-feather="search" class="text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4 text-right">التاريخ</th>
                                    <th class="py-3 px-4 text-right">العضو</th>
                                    <th class="py-3 px-4 text-right">التغيير</th>
                                    <th class="py-3 px-4 text-right">السبب</th>
                                    <th class="py-3 px-4 text-right">بواسطة</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 px-4">15/06/2023 10:30</td>
                                    <td class="py-3 px-4">محمد أحمد</td>
                                    <td class="py-3 px-4 text-green-600 font-medium">+50</td>
                                    <td class="py-3 px-4">مساعدة الأخ في الدراسة</td>
                                    <td class="py-3 px-4">الأب</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">15/06/2023 09:15</td>
                                    <td class="py-3 px-4">أحمد محمد</td>
                                    <td class="py-3 px-4 text-red-600 font-medium">-20</td>
                                    <td class="py-3 px-4">عدم ترتيب الغرفة</td>
                                    <td class="py-3 px-4">الأم</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">14/06/2023 18:45</td>
                                    <td class="py-3 px-4">سارة محمد</td>
                                    <td class="py-3 px-4 text-green-600 font-medium">+100</td>
                                    <td class="py-3 px-4">تفوق في المدرسة</td>
                                    <td class="py-3 px-4">الأب</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">14/06/2023 16:20</td>
                                    <td class="py-3 px-4">علي محمد</td>
                                    <td class="py-3 px-4 text-green-600 font-medium">+30</td>
                                    <td class="py-3 px-4">مساعدة في الأعمال المنزلية</td>
                                    <td class="py-3 px-4">الأم</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">13/06/2023 14:10</td>
                                    <td class="py-3 px-4">محمد أحمد</td>
                                    <td class="py-3 px-4 text-red-600 font-medium">-30</td>
                                    <td class="py-3 px-4">عدم إنهاء الواجب</td>
                                    <td class="py-3 px-4">الأم</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- الترقيم الصفحي -->
                    <div class="flex justify-between items-center mt-6">
                        <span class="text-gray-600">عرض 1 إلى 5 من 25 عملية</span>
                        <div class="flex space-x-2 space-x-reverse">
                            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 transition">
                                السابق
                            </button>
                            <button class="px-3 py-1 bg-blue-800 text-white rounded hover:bg-blue-900 transition">
                                1
                            </button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 transition">
                                2
                            </button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 transition">
                                3
                            </button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 transition">
                                التالي
                            </button>
                        </div>
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
