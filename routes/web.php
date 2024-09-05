<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\ClassController;
use App\Http\Controllers\Web\VideoController;
use App\Http\Controllers\Web\FeesController;
use App\Http\Controllers\Web\PaymentHistoryController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\TutesAndBookController;
use App\Http\Controllers\Web\TimeTableController;
use App\Http\Controllers\Web\ClassPaperController;
use App\Http\Controllers\Web\StudentTalentController;
use App\Http\Controllers\Web\NoticeBoardController;
use App\Http\Controllers\Web\OnlineExamController;
use App\Http\Controllers\Web\StudentAttendanceController;
use App\Http\Controllers\Web\NoteAndPaperController;
use App\Http\Controllers\Web\LearningManagementController;
use App\Http\Controllers\Web\ItemShopController;
use App\Http\Controllers\Web\AnalysisReportController;
use App\Http\Controllers\Web\TeacherSubjectController;
use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;


use Prometheus\CollectorRegistry;
use Prometheus\Storage\InMemory;
use Prometheus\RenderTextFormat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// AuthController
Route::get('/', [AuthController::class, 'index'])->name('web.index');


Route::get('/login', [AuthController::class, 'loginView'])->name('web.login');
Route::post('/login', [AuthController::class, 'login'])->name('api.students.login');

Route::get('/forgot_password', [AuthController::class, 'forgotPassword'])->name('web.forgot_password');
Route::get('/register', [AuthController::class, 'registerView'])->name('web.register');
Route::get('/register-step1', [AuthController::class, 'registerStep1'])->name('web.register.step1');
Route::get('/register-step2', [AuthController::class, 'registerStep2'])->name('web.register.step2');
Route::get('/register-step3', [AuthController::class, 'registerStep3'])->name('web.register.step3');
Route::post('/register-step4', [AuthController::class, 'registerStep4'])->name('web.register.step4');
Route::get('/register-step4', [AuthController::class, 'registerStep4back'])->name('web.register.step4back');
Route::post('/register-Step4Post', [AuthController::class, 'registerStep4Post'])->name('web.register.step4Post');
Route::get('/register-stepOTP', [AuthController::class, 'registerStepOTP'])->name('web.register.stepOTP');
Route::post('/register-step5', [AuthController::class, 'registerStep5'])->name('web.register.step5');
Route::get('/register-step5', [AuthController::class, 'registerStep5back'])->name('web.register.step5back');
Route::post('/otp-verify', [AuthController::class, 'otpVerify'])->name('web.otp_verify');


Route::post('/register-data', [AuthController::class, 'registerData'])->name('web.register.data');





Route::middleware(['check.authorization'])->group(function () {
Route::post('/logout', [AuthController::class, 'logout'])->name('web.logout');   
Route::get('/home', [HomeController::class, 'homeView'])->name('web.home');
// LIVE CLASSES

Route::get('/class/view', [ClassController::class, 'classView'])->name('web.class.view');

// Video Recordings
Route::get('/video/view', [VideoController::class, 'videoView'])->name('web.video.view');
Route::get('/video/monthly/view', [VideoController::class, 'videoMonthlyView'])->name('web.video.monthly');
Route::get('/video/monthly/list', [VideoController::class, 'videoMonthlyListView'])->name('web.video.list.monthly');
Route::get('/video/monthly/set', [VideoController::class, 'videoMonthlySet'])->name('web.video.set.monthly');

Route::get('/video/subject/view', [VideoController::class, 'videoSubjectView'])->name('web.video.subject');
Route::get('/video/subject/view-list', [VideoController::class, 'videoSubjectList'])->name('web.video.subject.list');

// Fees
Route::get('/fees/view', [FeesController::class, 'feesView'])->name('web.fees.view');
Route::get('/fees/class', [FeesController::class, 'feesClass'])->name('web.fees.class');
Route::get('/fees/subject-cart', [FeesController::class, 'subjectCart'])->name('web.fees.subject_cart');
Route::get('/subject-cart', [CartController::class, 'viewCart'])->name('web.subject-cart');


// PaymentHistory
Route::get('/payment-history-month', [PaymentHistoryController::class, 'paymentHistoryMonth'])->name('web.payment.month');
Route::get('/payment-history-list', [PaymentHistoryController::class, 'paymentHistoryList'])->name('web.payment.list');

// NoteAndPaperController
Route::get('/note-paper-ansewer', [NoteAndPaperController::class, 'notePaper'])->name('web.note-paper.ansewer');
Route::get('/note-paper-ansewer-list/{id}', [NoteAndPaperController::class, 'notePaperList'])->name('web.note-paper.list');
Route::post('/note-paper-ansewer-upload', [NoteAndPaperController::class, 'notePaperUpload'])->name('web.note.upload');



// profile

Route::get('/my-profile', [ProfileController::class, 'myProfile'])->name('web.profile');


// Class Tutes And Books
Route::get('/tutes-books', [TutesAndBookController::class, 'tutesBook'])->name('web.tutes.book');
Route::get('/tutes-books-view', [TutesAndBookController::class, 'tutesBookMonthly'])->name('web.tutes.view');
Route::get('/tutes-view', [TutesAndBookController::class, 'tutesView'])->name('web.tutes.open');



// TIME TABLES
Route::get('/time-table', [TimeTableController::class, 'timeTable'])->name('web.time.table');



// Class paper
Route::get('/class-paper', [ClassPaperController::class, 'classPaper'])->name('web.class.paper');
Route::get('/class-paper-view', [ClassPaperController::class, 'classPaperMonthly'])->name('web.paper.view');
Route::get('/class-paper-open', [ClassPaperController::class, 'classPaperView'])->name('web.paper.open');


// STUDENT TALENTS
Route::get('/student-talents', [StudentTalentController::class, 'studentTalent'])->name('web.student.talents');
Route::get('/online-exam-result', [StudentTalentController::class, 'onlineExamResult'])->name('web.online.exam_result');
Route::get('/paper-answer', [StudentTalentController::class, 'paperAnswer'])->name('web.paper.answer');
Route::get('/student-certificates', [StudentTalentController::class, 'studentCertificate'])->name('web.student.certificates');
Route::post('/student-certificates-upload', [StudentTalentController::class, 'studentCertificateUpload'])->name('web.student.certificatesupload');

Route::get('/talent-videos', [StudentTalentController::class, 'talentVideos'])->name('web.talent.videos');
Route::get('/talent-videos-view', [StudentTalentController::class, 'talentVideosView'])->name('web.talent.videosView');
Route::get('/talent-videos-lesson', [StudentTalentController::class, 'talentVideosLesson'])->name('web.talent.videosLesson');
Route::get('/my-talent-videos', [StudentTalentController::class, 'myTalentVideos'])->name('web.my_talent');
Route::get('/other-talent-videos', [StudentTalentController::class, 'otherTalentVideos'])->name('web.other_talent');
Route::get('/review-teacher', [StudentTalentController::class, 'reviweTeacher'])->name('web.review.teacher');
Route::get('/term-test', [StudentTalentController::class, 'termTest'])->name('web.term.test');
Route::post('/term-test', [StudentTalentController::class, 'termTestUpload'])->name('web.term.testupload');



// NoticeBoardController
Route::get('/notice-board', [NoticeBoardController::class, 'noticeBoard'])->name('web.notice.board');


// Online exam
Route::get('/online-exam', [OnlineExamController::class, 'onlineExam'])->name('web.online.exam');
Route::get('/online-exam-view', [OnlineExamController::class, 'onlineExamMonthly'])->name('web.online.view');


// Student Attendance ATTENDANCE

Route::get('/student-attendance', [StudentAttendanceController::class, 'studentAttendance'])->name('web.student.attendance');
Route::post('/student-attendance', [StudentAttendanceController::class, 'studentAttendancestore'])->name('web.student.attendancestore');
Route::get('/student-attendance-view', [StudentAttendanceController::class, 'studentAttendanceMonthly'])->name('web.student_attendance.view');
Route::get('/student-attendance-check', [StudentAttendanceController::class, 'studentAttendanceCheck'])->name('web.student_attendance.check');

// Learning Management
Route::get('/learning-management', [LearningManagementController::class, 'learningManagement'])->name('web.learning.management');
Route::get('/time-management', [LearningManagementController::class, 'timeManagement'])->name('web.time.management');
Route::get('/time-management/list-table', [LearningManagementController::class, 'timeManagementTable'])->name('web.time-mgt.list-table');
Route::get('/time-management/list-report', [LearningManagementController::class, 'timeManagementReport'])->name('web.time-mgt.list-report');
Route::get('/time-management/revising-plane', [LearningManagementController::class, 'revisingPlane'])->name('web.revising.plane');


// ItemShopController
Route::get('/item-shop', [ItemShopController::class, 'itemShop'])->name('web.item-shop');
Route::get('/single-item', [ItemShopController::class, 'singleItem'])->name('web.single-item');
Route::get('/order-history', [ItemShopController::class, 'orderHistory'])->name('web.order-history');
Route::get('/order-cart', [ItemShopController::class, 'orderCart'])->name('web.order-cart');





// Analysis Report
Route::get('/analysis-report', [AnalysisReportController::class, 'analysisReport'])->name('web.analysis.report');


// Teacher Subject
Route::get('/teacher-subject', [TeacherSubjectController::class, 'teacherSubject'])->name('web.teacher.subject');
Route::get('/request-subject',[TeacherSubjectController::class, 'requestSubject'])->name('web.teacher.request-subject');

Route::post('/remove-subject',[TeacherSubjectController::class, 'removeSubject'])->name('web.remove.subject');
Route::post('/add-subject',[TeacherSubjectController::class, 'addSubject'])->name('web.add.subject');


Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('web.add-to-cart');
Route::post('/remove-to-cart', [CartController::class, 'removeFromCart'])->name('web.remove-from-cart');

Route::post('/bank-payment', [PaymentController::class, 'bankPayment'])->name('web.fees.payment');



});


Route::get('/metrics', function () {
    // Create the CollectorRegistry instance with an InMemory storage adapter
    $adapter = new InMemory();
    $registry = new CollectorRegistry($adapter);

    // Register some metrics
    $counter = $registry->getOrRegisterCounter('my_namespace', 'my_custom_metric', 'My custom counter', ['type']);
    $counter->inc(['example']);
    
    $gauge = $registry->getOrRegisterGauge('my_namespace', 'my_gauge_metric', 'My gauge metric');
    $gauge->set(42);

    $histogram = $registry->getOrRegisterHistogram('my_namespace', 'my_timing_metric', 'My timing metric', ['type']);
    $histogram->observe(350, ['example']);

    // Render the metrics to the Prometheus text format
    $renderer = new RenderTextFormat();
    $result = $renderer->render($registry->getMetricFamilySamples());

    return response($result, 200, ['Content-Type' => 'text/plain']);
});
