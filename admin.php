<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة الإدارة - بنك العائلة</title>
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
                                <a href="admin.php" class="flex items-center p-2 text-blue-800 bg-blue-50 rounded-lg">
                                    <i data-feather="home" class="w-5 h-5 ml-2"></i>
                                    لوحة التحكم
                                </a>
                            </li>
                            <li>
                                <a href="transactions.php" class="flex items-center p-2 text-gray-600 hover:bg-gray-50 rounded-lg">
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
                <!-- بطاقات الإحصائيات -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-600">عدد الأعضاء</p>
                                <p class="text-3xl font-bold">8</p>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i data-feather="users" class="w-6 h-6 text-blue-800"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-600">إجمالي النقاط</p>
                                <p class="text-3xl font-bold">5,430</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i data-feather="award" class="w-6 h-6 text-green-800"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-600">عدد العمليات</p>
                                <p class="text-3xl font-bold">42</p>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i data-feather="activity" class="w-6 h-6 text-yellow-800"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- قائمة الأعضاء -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">إدارة الأعضاء</h2>
                        <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center">
                            <i data-feather="plus" class="w-4 h-4 mr-1"></i>
                            إضافة عضو
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4 text-right">الاسم</th>
                                    <th class="py-3 px-4 text-right">البريد الإلكتروني</th>
                                    <th class="py-3 px-4 text-right">النقاط</th>
                                    <th class="py-3 px-4 text-right">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 px-4">محمد أحمد</td>
                                    <td class="py-3 px-4">mohamed@family.com</td>
                                    <td class="py-3 px-4 font-medium">1,250</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i data-feather="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i data-feather="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">أحمد محمد</td>
                                    <td class="py-3 px-4">ahmed@family.com</td>
                                    <td class="py-3 px-4 font-medium">980</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i data-feather="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i data-feather="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4">سارة محمد</td>
                                    <td class="py-3 px-4">sara@family.com</td>
                                    <td class="py-3 px-4 font-medium">750</td>
                                    <td class="py-3 px-4">
                                        <button class="text-blue-600 hover:text-blue-800 mr-2">
                                            <i data-feather="edit" class="w-4 h-4"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i data-feather="trash-2" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- تعديل النقاط -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold mb-6">تعديل النقاط</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">العضو</label>
                                <select class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option>اختر عضواً</option>
                                    <option>محمد أحمد</option>
                                    <option>أحمد محمد</option>
                                    <option>سارة محمد</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">نوع العملية</label>
                                <select class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                    <option>إضافة نقاط</option>
                                    <option>خصم نقاط</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">المبلغ</label>
                                <input type="number" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">السبب</label>
                                <input type="text" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="سبب العملية">
                            </div>
                        </div>
                        <button type="submit" class="px-6 py-2 bg-blue-800 text-white rounded-lg hover:bg-blue-900 transition">
                            حفظ التغييرات
                        </button>
                    </form>
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
