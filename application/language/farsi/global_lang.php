<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['Dashboard'] = "Dashboard";
$lang['Settings'] = "تنظیمات";
$lang['Users'] = "کاربران";
$lang['Notifications'] = "اطلاعیه ها";
$lang['Assignments'] = "مسابقات";
$lang['Submit'] = "ثبت";
$lang['Final Submissions'] = "ثبت شده های نهایی";
$lang['All Submissions'] = "همه ثبت شده ها";
$lang['Scoreboard'] = "رتبه بندی";
$lang['Sharif Judge'] = "سیستم داوری";
$lang['Collapse Menu'] = "باز کردن منو";
$lang['seconds'] = "ثانیه ها";
$lang['Profile'] = "پروفایل";
$lang['Logout'] = "خروج";
$lang['day'] = "روز";
$lang['hour'] = "ساعت";
$lang['minute'] = "دقیقه";
$lang['second'] = "ثانیه";
$lang['Extra'] = "Extra";
$lang['Time'] = "زمان";
$lang['Rejudge'] = "بازداوری";
$lang['Submission Queue'] = "صف ثبت شده ها";
$lang['Cheat Detection'] = "تشخیص تخلف";
$lang['New Notification'] = "اعلامیه های جدید";

// Install
$lang['It seems that the file'] = "It seems that the file";
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
$lang['Also delete test cases and all submitted codes for this assignment.'] = "Also delete test cases and all submitted codes for this assignment.";
$lang["No, I'm not"] = "نه، نیستم";

// Delete Submissions
$lang["Are you sure you want to delete this user's submitted codes?"] = "Are you sure you want to delete this user's submitted codes?";
$lang['Also delete submission results from database.'] = "Also delete submission results from database.";

// Queue
$lang['Queue is working'] = "Queue is working";
$lang['Queue is not working'] = "Queue is not working";
$lang['Total submissions in queue'] = "Total submissions in queue";
$lang['Pause'] = "Pause";
$lang['Resume'] = "Resume";
$lang['Empty Queue'] = "Empty Queue";
$lang['Submit ID'] = "Submit ID";
$lang['Assignment'] = "Assignment";
$lang['Problem'] = "Problem";
$lang['Type (judge/rejudge)'] = "Type (judge/rejudge)";

// Rejudge
$lang['Selected Assignment'] = "Selected Assignment";
$lang['By clicking on rejudge, all submissions of selected problem will go in <code>PENDING</code> state. Then Sharif Judge rejudges them one by one.'] = "By clicking on rejudge, all submissions of selected problem will go in <code>PENDING</code> state. Then Sharif Judge rejudges them one by one.";
$lang['If you want to rejudge a single submission, you can click on rejudge button in %1 or %2 page.'] = "If you want to rejudge a single submission, you can click on rejudge button in %1 or %2 page.";

// Settings
$lang['Help'] = "Help";
$lang['Settings updated successfully.'] = "Settings updated successfully.";
$lang['Error updating settings.'] = "Error updating settings.";
$lang['"Tester path" is not correct.'] = '"Tester path" is not correct.';
$lang['Timezone'] = "Timezone";
$lang['list of timezones'] = "list of timezones";
$lang['Week Start Day'] = "Week Start Day";
$lang['Sunday'] = "Sunday";
$lang['Monday'] = "Monday";
$lang['Tuesday'] = "Tuesday";
$lang['Wednesday'] = "Wednesday";
$lang['Thursday'] = "Thursday";
$lang['Friday'] = "Friday";
$lang['Saturday'] = "Saturday";
$lang['Full Path to <code>tester</code>'] = "Full Path to <code>tester</code>";
$lang['Full Path to <code>assignments</code>'] = "Full Path to <code>assignments</code>";
$lang['Upload Size Limit (kB)'] = "Upload Size Limit (kB)";
$lang['Output Size Limit (kB)'] = "Output Size Limit (kB)";
$lang['Sets a limit for size of output file generated by submitted code'] = "Sets a limit for size of output file generated by submitted code";
$lang['Results Per Page'] = "Results Per Page";
$lang['Registration'] = "Registration";
$lang['Open Public Registration.'] = "Open Public Registration.";
$lang['Registration Code'] = "Registration Code";
$lang['If you want to enable registration (above option), It is better to give a registration code<br> to students in your class for validating registration. Enter 0 to disable.'] = "If you want to enable registration (above option), It is better to give a registration code<br> to students in your class for validating registration. Enter 0 to disable.";
$lang['Log'] = "Log";
$lang['Enable Log'] = "Enable Log";
$lang['Default Coefficient Rule'] = "Default Coefficient Rule";
$lang['Send Emails From'] = "Send Emails From";
$lang['Send Emails "From" Name'] = 'Send Emails "From" Name';
$lang['Password Reset Email'] = "Password Reset Email";
$lang['Add User Email'] = "Add User Email";
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
$lang['Save Changes'] = "Save Changes";

// users
$lang['Add Users'] = "Add Users";
$lang['Excel'] = "Excel";
$lang['User deleted successfully.'] = "User deleted successfully.";
$lang['Submissions of selected user deleted successfully.'] = "Submissions of selected user deleted successfully.";
$lang['User ID'] = "User ID";
$lang['Display Name'] = "Display Name";
$lang['Role'] = "Role";
$lang['First Login'] = "First Login";
$lang['Last Login'] = "Last Login";
$lang['Actions'] = "Actions";

// login
$lang['Incorrect username or password.'] = "Incorrect username or password.";
$lang['Register'] = "Register";
$lang['Lost?'] = "Lost?";
$lang['The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters'] = "The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters";
$lang['The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters'] = "The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters";
$lang['We sent you an email containing a link to change your password.'] = "We sent you an email containing a link to change your password.";
$lang['Reset Password'] = "Reset Password";

// assignments
$lang['Nothing to show...'] = "Nothing to show...";
$lang['problem'] = "problem";
$lang['submit'] = "submit";
$lang['Finished'] = "Finished";
$lang['Open'] = "Open";
$lang['Close'] = "Close";
$lang['Download Tests'] = "Download Tests";
$lang['Download Final Codes'] = "Download Final Codes";
$lang['Detect Similar Codes'] = "Detect Similar Codes";
$lang['Edit'] = "Edit";
$lang['Delete'] = "Delete";

// dashboard
$lang['Calendar'] = "Calendar";

$lang['Nothing yet...'] = "Nothing yet...";
$lang['Edit'] = "Edit";
$lang['Delete'] = "Delete";
$lang['Add'] = "Add";

$lang['No assignment is selected.'] = "No assignment is selected.";
$lang['Name'] = "Name";
$lang['This assignment is finished. You cannot change your final submissions.'] = "This assignment is finished. You cannot change your final submissions.";
$lang['Remove Username Filter'] = "Remove Username Filter";
$lang['Remove Problem Filter'] = "Remove Problem Filter";
$lang['Submissions of'] = "Submissions of";
$lang['You cannot change your final submissions after assignment finishes.'] = "You cannot change your final submissions after assignment finishes.";
$lang['Final'] = "Final";
$lang['submit ID'] = "submit ID";
$lang['Problem'] = "Problem";
$lang['Submit Time'] = "Submit Time";
$lang['Score'] = "Score";
$lang['Language'] = "Language";
$lang['Status'] = "Status";
$lang['Code'] = "Code";
$lang['Rejudge'] = "Rejudge";
$lang['Submit Time'] = "Submit Time";
$lang['Language'] = "Language";
$lang['Status'] = "Status";
$lang['Set as Final Submission'] = "Set as Final Submission";
$lang['Filter Submissions by This Username'] = "Filter Submissions by This Username";
$lang['Filter Submissions by This Problem'] = "Filter Submissions by This Problem";
$lang['No Delay'] = "No Delay";
$lang['Download'] = "Download";
$lang['Loading'] = "Loading";
$lang['File not found'] = "File not found";


$lang['Please note'] = "Please note";
$lang['This may be different from the final submission selected by'] = "This may be different from the final submission selected by";
$lang['This is the log file for the <b>last judged submission</b> of user %1 for problem %2 (%3).'] = "This is the log file for the <b>last judged submission</b> of user %1 for problem %2 (%3).";


$lang['Selected assignment is closed.'] = "Selected assignment is closed.";
$lang['Selected assignment has not started.'] = "Selected assignment has not started.";
$lang['Selected assignment has finished.'] = "Selected assignment has finished.";
$lang['You are not registered for submitting.'] = "You are not registered for submitting.";
$lang['You have already submitted for this problem. Your last submission is still in queue.'] = "You have already submitted for this problem. Your last submission is still in queue.";

$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";
$lang[''] = "";