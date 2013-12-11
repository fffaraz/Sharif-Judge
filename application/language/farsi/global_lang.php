<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['Dashboard'] = "داشبورد";
$lang['Settings'] = "تنظیمات";
$lang['Users'] = "کاربران";
$lang['Notifications'] = "اطلاعیه ها";
$lang['Assignments'] = "مسابقات";
$lang['Submit'] = "ثبت";
$lang['Final Submissions'] = "ثبت شده های نهایی";
$lang['All Submissions'] = "همه ثبت شده ها";
$lang['Scoreboard'] = "رتبه بندی";
$lang['Sharif Judge'] = "سیستم داوری";
$lang['Collapse Menu'] = "بستن منو";
$lang['seconds'] = "ثانیه ها";
$lang['Profile'] = "پروفایل";
$lang['Logout'] = "خروج";
$lang['day'] = "روز";
$lang['hour'] = "ساعت";
$lang['minute'] = "دقیقه";
$lang['second'] = "ثانیه";
$lang['Extra'] = "اضافه";
$lang['Time'] = "زمان";
$lang['Rejudge'] = "بازداوری";
$lang['Submission Queue'] = "صف ثبت شده ها";
$lang['Cheat Detection'] = "تشخیص تخلف";
$lang['New Notification'] = "اعلامیه های جدید";
$lang['Tools'] = "ابزار";

// Install
$lang['It seems that the file'] = "به نظر میرسد که فایل";
$lang['is not writable by PHP'] = "قابل نوشتن توسط PHP نیست";
$lang['So, for security, you should change the encryption key manually.'] = "برای مسائل امنیتی لازم است کلید را به صورت دستی تنظیم کنید.";
$lang['You should open'] = "شما باید باز کنید";
$lang['and change the encryption key in this line'] = "و کلید امنیتی را در این خط تغییر دهید";
$lang['The key should be a 32-characters string as random as possible, with numbers and uppercase and lowercase letters.'] = "The key should be a 32-characters string as random as possible, with numbers and uppercase and lowercase letters.";
$lang['You can use this random string'] = "شما میتوانید از این رشته تصادفی استفاده کنید";
$lang['Sharif Judge installed!'] = "سیستم داوری نصب شد!";
$lang['Now you can'] = "حال شما میتوانید";
$lang['login'] = "ورود";
$lang['Admin username'] = "نام کاربری مدیر";
$lang['Admin email'] = "پست الکترونیک مدیر";
$lang['Admin password'] = "کلمه عبور مدیر";
$lang['Password, again'] = "کلمه عبور، دوباره";


// Add user
$lang['You can use this field to add multiple users at the same time.'] = "شما میتوانید از این قسمت برای تعریف تعدادی کاربر به صورت همزمان استفاده کنید.";
$lang['Usernames may contain lowercase letters or numbers and must be between 3 and 20 characters in length.'] = "نام کاربری ها باید شامل حروف کوچک و اعداد و از 3 تا 20 کاراکتر تشکیل شده باشد.";
$lang['Passwords must be between 6 and 30 characters in length.'] = "کلمات عبور باید بین 6 تا 30 کاراکتر باشند.";
$lang['If you want to send passwords by email, do not add too many users at one time. This may result in mail delivery fail.'] = "اگر میخواهید کلمه های عبور را توسط ایمیل ارسال کنید، تعداد زیادی کاربر را به صورت همزمان اضافه نکنید. این ممکن است خطایی در ارسال ایمیل ها ایجاد کند.";

// Submit
$lang['Please select an assignment first.'] = "لطفا مسابقه را ابتدا انتخاب کنید.";
$lang['Problem:'] = "مساله:";
$lang['Language:'] = "زبان:";
$lang['Error uploading file.'] = "خطا در بارگزاری فایل.";
$lang["File uploaded successfully. See the result in 'All Submissions'."] = "فایل با موفقیت بارگزاری شد. نتیجه را در 'همه ثبت شده ها' مشاهده کنید.";

// Delete User
$lang['Are you sure you want to delete this user?'] = "Are you sure you want to delete this user?";
$lang['Username:'] = "نام کاربری:";
$lang["Also delete this user's submissions and submitted codes."] = "همچنین فایلها و اطلاعات ثبت شده های کاربر را نیز پاک کن.";
$lang["Yes, I'm Sure"] = "بله، مطمئنم";
$lang["No, I'm not"] = "خیر، نیستم";

// Add Assignment
$lang["If you don't want to change tests, just do not upload any file."] = "اگر نمی خواهید در تست کیس ها تغییری دهید، فایلی بارگزاری نکنید.";
$lang['Assignment Name'] = "نام مسابقه";
$lang['Start Time'] = "زمان شروع";
$lang['Finish Time'] = "زمان پایان";
$lang['Extra Time (minutes)'] = "زمان اضافی (دقیقه)";
$lang['Extra time for late submissions.'] = "زمان اضافی برای ثبت شده های متاخر.";
$lang['Participants'] = "شرکت کنندگان";
$lang['Enter username of participants here (comma separated).'] = "نام کاربری شرکت کنندگان را اینجا وارد کنید.( با کاما جدا کنید.)";
$lang['Only these users are able to submit. You can use keyword "ALL".'] = 'فقط این کاربران مجاز به ثبت می باشند. شما میتوانید از کلید واژه "ALL" استفاده کنید.';
$lang['Tests (zip file)'] = "تست کیس ها (فایل zip)";
$lang['Use this structure'] = "از این ساختار استفاده کن";
$lang['Open or close this assignment.'] = "باز کردن یا بستن این ";
$lang['Check this to enable scoreboard.'] = "برای فعالسازی لیست رتبه بندی این را انتخاب کنید.";
$lang['Open'] = "باز";
$lang['Scoreboard'] = "لیست رتبه بندی";
$lang['Coefficient rule'] = "قانون ضریب";
$lang['PHP script without &lt;?php ?&gt; tags'] = "PHP script without &lt;?php ?&gt; tags";
$lang['Problems'] = "سوالات";
$lang['Name'] = "نام";
$lang['Score'] = "امتیاز";
$lang['Time Limit (ms)'] = "محدودیت زمان (ms)";
$lang['Memory<br>Limit (kB)'] = "محدودیت<br>حافظه (kB)";
$lang['Allowed<br>Languages'] = "زبان<br>های مجاز";
$lang['Diff<br>Command'] = "دستور<br>Diff";
$lang['Diff<br>Argument'] = "ورودی<br>Diff";
$lang['Upload<br>Only'] = "بارگزاری<br>فقط";
$lang['C/C++'] = "C/C++";
$lang['Python'] = "Python";
$lang['Java'] = "Java";
$lang['Edit'] = "ویرایش";
$lang['Add'] = "افزودن";
$lang[' Assignment'] = " مسابقه";

// Add Notification
$lang['Title'] = "عنوان";
$lang['Text'] = "متن";

// Add user result
$lang['These users added successfully'] = "این کاربران با موفقیت افزوده شدند";
$lang['Error adding these users'] = "خطا در افزودن این کاربران";
$lang['Username'] = "نام کاربری";
$lang['Email'] = "پست الکترونیک";
$lang['Password'] = "کلمه عبور";

// Delete Assignment
$lang['Are you sure you want to delete this assignment?'] = "Are you sure you want to delete this assignment?";
$lang['Assignment id'] = "کد شناسایی مسابقه";
$lang['Assignment name'] = "نام مسابقه";
$lang['All submission results will be deleted.'] = "همه نتایج مسابقه پاک خواهد شد.";
$lang['Also delete test cases and all submitted codes for this assignment.'] = "همچنین همه تست کیس ها و ثبت شده های این مسابقه را پاک کن.";
$lang["No, I'm not"] = "نه، نیستم";

// Delete Submissions
$lang["Are you sure you want to delete this user's submitted codes?"] = "آیا اطمینان دارید که میخواهید کدهای ثبت شده این کاربر را حذف کنید؟";
$lang['Also delete submission results from database.'] = "همچنین نتیجه ثبت شده ها را از پایگاه داده حذف کن.";

// Queue
$lang['Queue is working'] = "صف در حال اجراست";
$lang['Queue is not working'] = "صف در حال اجرا نیست";
$lang['Total submissions in queue'] = "مجموع ثبت شده ای در صف";
$lang['Pause'] = "توقف";
$lang['Resume'] = "ادامه دادن";
$lang['Empty Queue'] = "خالی کردن صف";
$lang['Submit ID'] = "Submit ID";
$lang['Assignment'] = "مسابقه";
$lang['Problem'] = "مساله";
$lang['Type (judge/rejudge)'] = "نوع (داوری/باز داوری)";

// Rejudge
$lang['Selected Assignment'] = "مسابقه انتخاب شده";
$lang['By clicking on rejudge, all submissions of selected problem will go in <code>PENDING</code> state. Then Sharif Judge rejudges them one by one.'] = "با انتخاب گزینه بازداوری، همه ثبت شده ها به حالت <code>در انتظار</code> خواهند در آمد و سیستم داوری، یک به یک آن ها را تصحیح خواهد کرد.";
$lang['If you want to rejudge a single submission, you can click on rejudge button in %1 or %2 page.'] = "اگر میخواهید یک پاسخ ثبت شده صرفا بازداوری شود، بر روی دکمه بازداوری در صفحات %1 یا %2 کلیک کنید.";

// Settings
$lang['Help'] = "راهنما";
$lang['Settings updated successfully.'] = "تنظیمات با موفقیت به روز شد.";
$lang['Error updating settings.'] = "بروز خطا در به روز رسانی تنظیمات.";
$lang['"Tester path" is not correct.'] = '"Tester path" صحیح نیست.';
$lang['Timezone'] = "منطقه زمانی";
$lang['list of timezones'] = "لیست مناطق زمانی";
$lang['Week Start Day'] = "روز شروع هفته";
$lang['Sunday'] = "یکشنبه";
$lang['Monday'] = "دوشنبه";
$lang['Tuesday'] = "سه شنبه";
$lang['Wednesday'] = "چهارشنبه";
$lang['Thursday'] = "پنجشنبه";
$lang['Friday'] = "جمعه";
$lang['Saturday'] = "شنبه";
$lang['Full Path to <code>tester</code>'] = "آدرس مطلق به <code>tester</code>";
$lang['Full Path to <code>assignments</code>'] = "آدرس مطلق به <code>مسابقات</code>";
$lang['Upload Size Limit (kB)'] = "محدودیت حجم بارگزاری (kB)";
$lang['Output Size Limit (kB)'] = "محدودیت حجم خروجی (kB)";
$lang['Sets a limit for size of output file generated by submitted code'] = "Sets a limit for size of output file generated by submitted code";
$lang['Results Per Page'] = "نتایج در صفحه";
$lang['Registration'] = "ثبت نام";
$lang['Open Public Registration.'] = "باز کردن ثبت نام عمومی";
$lang['Registration Code'] = "کد ثبت نام";
$lang['If you want to enable registration (above option), It is better to give a registration code<br> to students in your class for validating registration. Enter 0 to disable.'] = "If you want to enable registration (above option), It is better to give a registration code<br> to students in your class for validating registration. Enter 0 to disable.";
$lang['Log'] = "لاگ";
$lang['Enable Log'] = "فعال کردن لاگ";
$lang['Default Coefficient Rule'] = "قانون پیش فرض ضریب";
$lang['Send Emails From'] = "ارسال ایمیل ها از";
$lang['Send Emails "From" Name'] = '"نام" ارسال ایمیل ها';
$lang['Password Reset Email'] = "ایمیل تنظیم مجدد کلمه عبور";
$lang['Add User Email'] = "افزودن ایمیل کاربر";
$lang['You can use {SITE_URL}, {LOGIN_URL}, {ROLE}, {USERNAME} and {PASSWORD}'] = "You can use {SITE_URL}, {LOGIN_URL}, {ROLE}, {USERNAME} and {PASSWORD}";
$lang['Enable EasySandbox for C/C++.'] = "Enable EasySandbox for C/C++.";
$lang['Sandboxing'] = "Sandboxing";
$lang['You have not built EasySandbox yet.'] = "You have not built EasySandbox yet.";
$lang['You must build EasySandbox before enabling it.'] = "You must build EasySandbox before enabling it.";
$lang['Java Policy'] = "Java Policy";
$lang['Enable Java Sandboxing'] = "Enable Java Sandboxing";
$lang['Shield'] = "Shield";
$lang['C Shield'] = "C Shield";
$lang['Enable Shield for C'] = "Enable Shield for C";
$lang['Enable Shield for C++'] = "Enable Shield for C++";
$lang['C++ Shield'] = "C++ Shield";
$lang['Enable Shield for Python 2'] = "Enable Shield for Python 2";
$lang['Enable Shield for Python 3'] = "Enable Shield for Python 3";
$lang['Shield Rules (for C)'] = "";
$lang['Shield Rules (for C++)'] = "Shield Rules (for C++)";
$lang['Shield (for Python 2)'] = "Shield (for Python 2)";
$lang['Shield (for Python 3)'] = "Shield (for Python 3)";
$lang['Save Changes'] = "ذخیره تغییرات";

// users
$lang['Add Users'] = "افزودن کاربران";
$lang['Excel'] = "اکسل";
$lang['User deleted successfully.'] = "کاربر با موفقیت حذف شد.";
$lang['Submissions of selected user deleted successfully.'] = "ثبت شده های کاربر انتخاب شده با موفقیت حذف شد.";
$lang['User ID'] = "User ID";
$lang['Display Name'] = "نام نمایشی";
$lang['Role'] = "نقش";
$lang['First Login'] = "اولین ورود";
$lang['Last Login'] = "آخرین ورود";
$lang['Actions'] = "عملیات ها";

// login
$lang['Incorrect username or password.'] = "نام کاربری یا کلمه عبور غیر صحیح.";
$lang['Register'] = "ثبت نام";
$lang['Lost?'] = "Lost?";
$lang['The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters'] = "The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters";
$lang['The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters'] = "The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters";
$lang['We sent you an email containing a link to change your password.'] = "We sent you an email containing a link to change your password.";
$lang['Reset Password'] = "تنظیم مجدد کلمه عبور";

// assignments
$lang['Nothing to show...'] = "چیزی برای نمایش وجود ندارد...";
$lang['problem'] = "مساله";
$lang['submit'] = "ثبت";
$lang['Finished'] = "پایان یافته";
$lang['Open'] = "باز";
$lang['Close'] = "بسته";
$lang['Download Tests'] = "دانلود تست کیس";
$lang['Download Final Codes'] = "دانلود کدهای نهایی";
$lang['Detect Similar Codes'] = "شناسایی کدهایی مشابه";
$lang['Edit'] = "ویرایش";
$lang['Delete'] = "حذف";

// dashboard
$lang['Calendar'] = "تقویم";

$lang['Nothing yet...'] = "Nothing yet...";
$lang['Edit'] = "ویرایش";
$lang['Delete'] = "پاک کردن";
$lang['Add'] = "افزودن";

$lang['No assignment is selected.'] = "مسابقه ای انتخاب نشده است.";
$lang['Name'] = "نام";
$lang['This assignment is finished. You cannot change your final submissions.'] = "آزمون تمام شده است. نمی توانید انتخاب نهایی خود را عوض کنید";
$lang['Remove Username Filter'] = "حذف محدودیت نام کاربری";
$lang['Remove Problem Filter'] = "حذف محدودیت مساله";
$lang['Submissions of'] = "ثبت شده های";
$lang['You cannot change your final submissions after assignment finishes.'] = "بعد از تمام شدن آزمون نمی توانید انتخاب نهایی خود را عوض کنید";
$lang['Final'] = "نهایی";
$lang['submit ID'] = "ID ثبت";
$lang['Problem'] = "مساله";
$lang['Submit Time'] = "زمان ثبت";
$lang['Score'] = "امتیاز";
$lang['Language'] = "زبان";
$lang['Status'] = "وضعیت";
$lang['Code'] = "کد";
$lang['Rejudge'] = "بازداوری";
$lang['Submit Time'] = "زمان ثبت";
$lang['Language'] = "زبان";
$lang['Status'] = "وضعیت";
$lang['Set as Final Submission'] = "به عنوان ثبت شده نهایی قرار بده";
$lang['Filter Submissions by This Username'] = "محدود کردن ثبت شده ها به این کاربر";
$lang['Filter Submissions by This Problem'] = "محدود کردن ثبت شده ها به سوال";
$lang['No Delay'] = "بدون تاخیر";
$lang['Download'] = "دریافت";
$lang['Loading'] = "در حال بارگذاری";
$lang['File not found'] = "فایل یافت نشد";


$lang['Please note'] = "Please note";
$lang['This may be different from the final submission selected by'] = "این ممکن است با پاسخ نهایی انتخاب شده متفاوت باشد";
$lang['This is the log file for the <b>last judged submission</b> of user %1 for problem %2 (%3).'] = "این فایل  <b>آخرین ثبت شده های </b> کاربر %1 برای سوال %2 (%3) میباشد.";


$lang['Selected assignment is closed.'] = "مسابقه انتخاب بسته شده است.";
$lang['Selected assignment has not started.'] = "مسابقه انتخاب شده شروع نشده است.";
$lang['Selected assignment has finished.'] = "مسابقه انتخاب شده بسته شده است.";
$lang['You are not registered for submitting.'] = "شما برای شرکت در مسابقه ثبت نام نکرده اید.";
$lang['You have already submitted for this problem. Your last submission is still in queue.'] = "شما در حال حاضر پاسخی را برای این سوال ثبت کرده اید و پاسخ قبلی شما در صف تصحیح قرار دارد.";

$lang['Activate With Code:'] = "فعال سازی با کد";
$lang['Participation in this assignment requires payment.'] = "شرکت در این مسابقه نیاز به پرداخت هزینه دارد.";
$lang['Price'] = "قیمت";
$lang['Pay'] = "پرداخت";
$lang['Participation in this assignment is free.'] = "شرکت در این مسابقه رایگان است.";
$lang['Free Activation'] = "فعال سازی رایگان";
$lang['Allowed'] = "مجاز";

$lang['Register Assignment'] = "ثبت نام مسابقه";
$lang['Latest Notifications'] = "آخرین اطلاعیه ها";

$lang['Selected assignment'] = "مسابقه انتخاب شده";
$lang['Coefficient'] = "امتیاز";
$lang['File'] = "فایل";

$lang['assignment_help'] = "پیش از ارسال پاسخ لازم است در چالش ثبت نام کرده و از انتهای ردیف آن را انتخاب کنید.";
$lang['Delay'] = "تاخیر";
$lang['Final Score'] = "امتیاز نهایی";
$lang['All'] = "همه ی";

$lang['Scoreboard of'] = "لیست رتبه بندی";
$lang['Total'] = "کل";
$lang['Tools'] = "ابزار ها";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";

