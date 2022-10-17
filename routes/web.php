<?php
use Illuminate\Support\Facades\Route;
use App\Models\Consumer;
use App\Models\TestCategory;
use App\Http\Controllers\TestCategoryController;
use App\Http\Controllers\ConsumersController;
use App\Http\Controllers\TestDeptController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AnalyzerController;
use App\Http\Controllers\SpecimanController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\TestBillController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NewBillController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RefCommissionController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\LeavetypeController;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['check'])->group(function () {
//Patients Routes
Route::get('patients', [ConsumersController::class, 'index'])->name('patients');
Route::get('allpatients', [ConsumersController::class, 'allpatients'])->name('allpatients');
Route::get('allpatientlist', [ConsumersController::class, 'allpatientlist'])->name('allpatientlist');
Route::post('add-patient', [ConsumersController::class, 'store'])->name('patient.store');
Route::post('edit-patient/{id}', [ConsumersController::class, 'edit']);
Route::put('update-patient/{id}', [ConsumersController::class, 'update']);
Route::post('delete-patient/{id}', [ConsumersController::class, 'destroy']);

//Doctors Routes
Route::get('doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('alldoctorlist', [DoctorController::class, 'alldoctorlist'])->name('alldoctorlist');
Route::get('alldoctors', [DoctorController::class, 'alldoctors'])->name('alldoctors');
Route::post('add-doctor', [DoctorController::class, 'store'])->name('doctor.store');
Route::post('edit-doctor/{id}', [DoctorController::class, 'edit']);
Route::put('update-doctor/{id}', [DoctorController::class, 'update']);
Route::post('delete-doctor/{id}', [DoctorController::class, 'destroy']);
//referrals Routes
Route::get('referrals', [ReferralController::class, 'index'])->name('referrals');
Route::get('allreferlist', [ReferralController::class, 'allreferlist'])->name('allreferlist');
Route::get('allreferrals', [ReferralController::class, 'allreferrals'])->name('allreferrals');
Route::post('add-referral', [ReferralController::class, 'store'])->name('referral.store');
Route::post('edit-referral/{id}', [ReferralController::class, 'edit']);
Route::put('update-referral/{id}', [ReferralController::class, 'update']);
Route::post('delete-referral/{id}', [ReferralController::class, 'destroy']);

// Test Category routes 
Route::get('test_categories',[TestCategoryController::class,'index'])->name('test_categories');
Route::get('all-category-tests', [TestCategoryController::class, 'allCategory'])->name('allCategoryTests');
Route::post('store/test_category',[TestCategoryController::class,'store'])->name('store.test_category');
Route::post('edit-category/{id}', [TestCategoryController::class, 'edit']);
Route::put('update-category/{id}', [TestCategoryController::class, 'update']);
Route::post('delete-category/{id}', [TestCategoryController::class, 'destroy']);

// Test Department routes
Route::get('test_depts',[TestDeptController::class,'index'])->name('test_depts');
Route::post('store/test_dept',[TestDeptController::class,'store'])->name('store.test_dept');
Route::get('all-dept-tests',[TestDeptController::class,'allDeptTest'])->name('alldeptTests');
Route::post('edit-dept/{id}', [TestDeptController::class, 'edit']);
Route::put('update-dept/{id}', [TestDeptController::class, 'update']);
Route::post('delete-dept/{id}', [TestDeptController::class, 'destroy']);

// Test  routes
Route::get('tests',[TestController::class,'index'])->name('tests');
Route::post('store/test',[TestController::class,'store'])->name('store.test');
Route::get('all-tests',[TestController::class,'allTest'])->name('allTests');
Route::post('edit-tests/{id}', [TestController::class, 'edit']);
Route::put('update-tests/{id}', [TestController::class, 'update']);
Route::post('delete-tests/{id}', [TestController::class, 'destroy']);

// Analyzers  routes
Route::get('analyzers',[AnalyzerController::class,'index'])->name('analyzers');
Route::post('store/analyzers',[AnalyzerController::class,'store'])->name('store.analyzer');
Route::get('all-analyzers',[AnalyzerController::class,'allanalyzers'])->name('allanalyzers');
Route::post('edit-analyzer/{id}', [AnalyzerController::class, 'edit']);
Route::put('update-analyzer/{id}', [AnalyzerController::class, 'update']);
Route::post('delete-analyzer/{id}', [AnalyzerController::class, 'destroy']);

// specimens  routes
Route::get('specimens',[SpecimanController::class,'index'])->name('specimens');
Route::post('store/specimen',[SpecimanController::class,'store'])->name('store.specimen');
Route::get('all-specimens',[SpecimanController::class,'allspecimens'])->name('allspecimens');
Route::post('edit-specimen/{id}', [SpecimanController::class, 'edit']);
Route::put('update-specimen/{id}', [SpecimanController::class, 'update']);
Route::post('delete-specimen/{id}', [SpecimanController::class, 'destroy']);

//Reception Billing Routes
Route::get('newpatbill',[NewBillController::class,'newpatbill'])->name('newpatbill');
Route::post('store/new-bill',[NewBillController::class,'store'])->name('store.newbill');
Route::get('all-new-bill',[NewBillController::class,'allbill'])->name('allnewbills');
Route::get('edit-bill/{id}', [NewBillController::class, 'edit']);
Route::post('update-bill/{id}', [NewBillController::class, 'update']);
Route::get('newbilling',[BillingController::class,'newbilling'])->name('newbilling');
Route::get('getPrice/{id}', [BillingController::class,'getPrice'])->name('fetch_price');
Route::post('store/test-bill',[BillingController::class,'store'])->name('store.testbill');
Route::get('duecollection',[BillingController::class,'duecollection'])->name('duecollection');
Route::get('collection/{id}',[BillingController::class,'collection'])->name('collection');
Route::post('collection/store',[BillingController::class,'collStore'])->name('collection.store');
Route::get('allcollections',[BillingController::class,'collHis'])->name('allcollections');
Route::post('collectionfilter',[BillingController::class,'collectionfilter'])->name('collectionfilter');
Route::get('invoice/{id}',[BillingController::class,'invoice'])->name('invoice');
Route::get('allcolls',[BillingController::class,'collHistiry'])->name('allcolls');
Route::get('viewmycols',[BillingController::class,'ViewCols'])->name('viewmycols');
Route::get('viewcols',[BillingController::class,'ViewMyCols'])->name('viewcols');
Route::post('delete-view/{id}', [BillingController::class, 'destroyViewCol']);
Route::post('delete-col/{id}', [BillingController::class, 'destroyCol']);
Route::post('delete-testbill/{id}', [TestBillController::class, 'destroy']);
Route::get('testbill/{id}', [TestBillController::class, 'testbill']);
//filter bill

Route::get('filterbill/{id}', [NewBillController::class, 'filterbill']);
//Token routes
Route::get('tokens',[TokenController::class,'index'])->name('tokens');
Route::post('store/token',[TokenController::class,'store'])->name('token.store');
Route::get('all-tokens',[TokenController::class,'alltokens'])->name('alltokens');
Route::post('edit-token/{id}', [TokenController::class, 'edit']);
Route::put('update-token/{id}', [TokenController::class, 'update']);
Route::post('delete-token/{id}', [TokenController::class, 'destroy']);
Route::get('token-invoice/{id}', [TokenController::class, 'token_invoice']);
//setting route
Route::get('setting',[SettingController::class,'index'])->name('setting');
Route::post('update-setting/{id}', [SettingController::class, 'update']);

//Emoloyee Routes
Route::get('employee',[EmployeeController::class,'index'])->name('employee');
Route::post('store/employee',[EmployeeController::class,'store'])->name('store.employee');
Route::get('all-employee',[EmployeeController::class,'allemployees'])->name('allemployees');
Route::post('edit-employee/{id}', [EmployeeController::class, 'edit']);
Route::put('update-employee/{id}', [EmployeeController::class, 'update']);
Route::post('delete-employee/{id}', [EmployeeController::class, 'destroy']);

//Refferral Routes
Route::get('referral',[RefCommissionController::class,'index'])->name('referral');
Route::post('referralfilter',[RefCommissionController::class,'referralfilter'])->name('referralfilter');
Route::get('referralpayment',[RefCommissionController::class,'referralpayment'])->name('referralpayment');
Route::get('refepayment/show/{id}',[RefCommissionController::class,'show']);
Route::post('refepayment/store',[RefCommissionController::class,'store'])->name('referralpay.store');
Route::get('due/refepayment',[RefCommissionController::class,'due'])->name('referralpay.due');
Route::get('paid/refepayment',[RefCommissionController::class,'paid'])->name('referralpay.paid');
Route::post('due/filter',[RefCommissionController::class,'duefilter'])->name('duefilter');
Route::post('paid/filter',[RefCommissionController::class,'paidfilter'])->name('paidfilter');
// Account Route
// Income route
Route::get('incomes',[IncomeController::class,'index'])->name('incomes');
Route::post('store/income',[IncomeController::class,'store'])->name('store.income');
Route::get('all-incomes',[IncomeController::class,'allincomes'])->name('allincomes');
Route::post('edit-income/{id}', [IncomeController::class, 'edit']);
Route::put('update-income/{id}', [IncomeController::class, 'update']);
Route::post('delete-income/{id}', [IncomeController::class, 'destroy']);

//Expence Route
Route::get('expences',[ExpenceController::class,'index'])->name('expences');
Route::post('store/expence',[ExpenceController::class,'store'])->name('store.expence');
Route::get('all-expences',[ExpenceController::class,'allexpences'])->name('allexpences');
Route::post('edit-expences/{id}', [ExpenceController::class, 'edit']);
Route::put('update-expences/{id}', [ExpenceController::class, 'update']);
Route::post('delete-expences/{id}', [ExpenceController::class, 'destroy']);
//Discount Route
Route::get('discount_summery',[AccountController::class,'discount'])->name('discount');
Route::get('alldiscount',[AccountController::class,'alldiscount'])->name('alldiscount');
Route::get('discount_invoice/{id}',[AccountController::class,'discount_invoice'])->name('discount_invoice');
Route::get('view_all_transction',[AccountController::class,'view_all_transction'])->name('alltransction');

// HRMS routes
//Leave routes 
Route::get('leaves',[LeaveController::class,'index'])->name('leaves');
Route::post('store/leaves',[LeaveController::class,'store'])->name('store.leave');
Route::get('all-leaves',[LeaveController::class,'allleaves'])->name('allleaves');
Route::post('leavefilter',[LeaveController::class,'leavefilter'])->name('leavefilter');
Route::post('edit-leaves/{id}', [LeaveController::class, 'edit']);
Route::put('update-leaves/{id}', [LeaveController::class, 'update']);
Route::post('delete-leaves/{id}', [LeaveController::class, 'destroy']);
//Leave type routes 
Route::get('leave_types',[LeavetypeController::class,'index'])->name('leave_types');
Route::post('store/leave_type',[LeavetypeController::class,'store'])->name('leave_type.store');
Route::get('all-leavetypes',[LeavetypeController::class,'allleaveType'])->name('allleavetypes');
Route::post('edit-leavetype/{id}', [LeavetypeController::class, 'edit']);
Route::put('update-leavetype/{id}', [LeavetypeController::class, 'update']);
Route::post('delete-leavetype/{id}', [LeavetypeController::class, 'destroy']);

//attendence routes 
Route::get('attendance',[AttendanceController::class,'index'])->name('attendance');
Route::post('store/attendance',[AttendanceController::class,'store'])->name('attendance.store');
Route::get('allattendances',[AttendanceController::class,'allattendances'])->name('allattendances');
Route::post('edit-attendance/{id}', [AttendanceController::class, 'edit']);
Route::put('update-attendance/{id}', [AttendanceController::class, 'update']);
Route::post('delete-attendance/{id}', [AttendanceController::class, 'destroy']);

});
















































































































































