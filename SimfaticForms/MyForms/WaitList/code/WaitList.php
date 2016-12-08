<?PHP
/*
Simfatic Forms Main Form processor script

This script does all the server side processing. 
(Displaying the form, processing form submissions,
displaying errors, making CAPTCHA image, and so on.) 

All pages (including the form page) are displayed using 
templates in the 'templ' sub folder. 

The overall structure is that of a list of modules. Depending on the 
arguments (POST/GET) passed to the script, the modules process in sequence. 

Please note that just appending  a header and footer to this script won't work.
To embed the form, use the 'Copy & Paste' code in the 'Take the Code' page. 
To extend the functionality, see 'Extension Modules' in the help.

*/

@ini_set("display_errors", 1);//the error handler is added later in FormProc
error_reporting(E_ALL & ~((defined('E_STRICT')?E_STRICT:0)|E_NOTICE));

require_once(dirname(__FILE__)."/includes/WaitList-lib.php");
$formproc_obj =  new SFM_FormProcessor('WaitList');
$formproc_obj->initTimeZone('default');
$formproc_obj->setFormID('ebb5b7ec-aa83-40b5-bff3-242dec1ca2cc');
$formproc_obj->setFormKey('05699f23-be9c-427a-9d4a-88e359019653');
$formproc_obj->setLocale('en-US','yyyy-MM-dd');
$formproc_obj->setEmailFormatHTML(true);
$formproc_obj->EnableLogging(false);
$formproc_obj->SetDebugMode(false);
$formproc_obj->setIsInstalled(true);
$formproc_obj->SetPrintPreviewPage(sfm_readfile(dirname(__FILE__)."/templ/WaitList_print_preview_file.txt"));
$formproc_obj->SetSingleBoxErrorDisplay(true);
$formproc_obj->setFormPage(0,sfm_readfile(dirname(__FILE__)."/templ/WaitList_form_page_0.txt"));
$formproc_obj->AddElementInfo('Name','text','');
$formproc_obj->AddElementInfo('Email','text','');
$formproc_obj->SetHiddenInputTrapVarName('t3bec1e9f4eaa40929fae');
$formproc_obj->SetFromAddress('grace@jamforest.com');
$page_renderer =  new FM_FormPageDisplayModule();
$formproc_obj->addModule($page_renderer);

$validator =  new FM_FormValidator();
$validator->addValidation("Name","required","Please fill in Name");
$validator->addValidation("Name","alpha","The input for Name should be a valid alphabetic value");
$validator->addValidation("Email","email","The input for Email should be a valid email value");
$validator->addValidation("Email","required","Please fill in Email");
$formproc_obj->addModule($validator);

$data_email_sender =  new FM_FormDataSender(sfm_readfile(dirname(__FILE__)."/templ/WaitList_email_subj.txt"),sfm_readfile(dirname(__FILE__)."/templ/WaitList_email_body.txt"),'%Email%');
$data_email_sender->AddToAddr('keelsryan@gmail.com');
$formproc_obj->addModule($data_email_sender);

$tupage =  new FM_ThankYouPage(sfm_readfile(dirname(__FILE__)."/templ/WaitList_thank_u.txt"));
$formproc_obj->addModule($tupage);

$page_renderer->SetFormValidator($validator);
$formproc_obj->ProcessForm();

?>