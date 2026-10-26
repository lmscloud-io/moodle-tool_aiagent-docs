<?php
// phpcs:disable moodle.Files.BoilerplateComment
//
// This file is part of the tool_aiagent plugin for Moodle.
//
// This software is proprietary and is licensed, not sold. Use, copying,
// modification and distribution are governed by the LMSCloud Commercial
// License; see the LICENSE file in the plugin root for the full terms.
// Unauthorised redistribution or resale is prohibited.

/**
 * Hebrew language pack for AI agent.
 * Last updated: 2026-10-25
 *
 * @package    tool_aiagent
 * @category   string
 * @copyright  LMSCloud Limited <info@lmscloud.io>
 * @author     Marina Glancy
 * @license    https://lmscloud.io/products/ai-agent/license LMSCloud Commercial License
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_needsyou'] = 'סוכן AI: ממתין לאישור שלך';
$string['activity_working'] = 'סוכן AI: עובד';
$string['addon'] = 'תוסף';
$string['aiagent:autoapproveall'] = 'בחירת מצב האישור האוטומטי "הכל", שבו כל קריאה לפונקציה מתבצעת ללא בקשת אישור';
$string['aiagent:usechat'] = 'פתיחת שיחות עם סוכן AI (קובע היכן ניתן לפתוח שיחה; אינו מגביל לאילו נתונים השיחה יכולה לגשת לאחר שנפתחה)';
$string['allfunctions'] = 'הכל';
$string['allowfeedback'] = 'איפשור משוב';
$string['allowfeedback_desc'] = 'כאשר האפשרות מופעלת, משתמשים יכולים לדרג תשובות של העוזר ולדווח על קריאות לפונקציות שנכשלו. המשוב נשלח למפתחי התוסף סוכן AI (ולא ל-LLM כלשהו), כדי שיוכלו לשפר את העבודה עם הפונקציות של מוודל. נשלח רק חילופי הדברים שדורגו, ולא כל השיחה, והמשתמש יכול לערוך את הטקסט לפני השליחה. מומלץ לבטל אפשרות זו במערכות שבהן קיימת מדיניות מחמירה לגבי תעבורה יוצאת.';
$string['anthropic_heading'] = 'Anthropic (Claude)';
$string['anthropic_web_fetch'] = 'הפעלת הכלי web fetch';
$string['anthropic_web_fetch_desc'] = 'מאפשר ל-Claude להוריד כתובות אינטרנט חיצוניות בצד השרת באמצעות הכלי web_fetch של Anthropic. שימושי כאשר בשיחה מוזכרים דפי אינטרנט ציבוריים שעל המודל לקרוא. קבצים של מערכת מוודל זו מטופלים בנפרד, באמצעות הפונקציה read_file (שמעלה אותם לפי הצורך ל-Files API של Anthropic), ולכן ביטול web_fetch אינו משפיע על הגישה למשאבי קורס או לקבצים מצורפים.';
$string['attachedfiles'] = 'קבצים מצורפים';
$string['attachfile'] = 'צירוף קובץ';
$string['autoapprove'] = 'אישור אוטומטי';
$string['autoapprove_all'] = 'הכל (בזהירות)';
$string['autoapprove_all_desc'] = 'דילוג על כל בקשות האישור';
$string['autoapprove_all_disabled'] = 'אין לך הרשאה להשתמש במצב זה.';
$string['autoapprove_all_short'] = 'הכל';
$string['autoapprove_header'] = 'אישור אוטומטי של קריאות לפונקציות';
$string['autoapprove_none'] = 'ללא';
$string['autoapprove_none_desc'] = 'בקשת אישור לפני כל קריאה לפונקציה';
$string['autoapprove_readonly'] = 'קריאה בלבד';
$string['autoapprove_readonly_desc'] = 'אישור אוטומטי לקריאה, בקשת אישור לכתיבה';
$string['autoapprove_safe'] = 'בטוח';
$string['autoapprove_safe_desc'] = 'אישור אוטומטי לפעולות שאינן משנות את המערכת';
$string['autoapprove_safe_examples'] = 'קריאה, וכן שינוי גודל של קבצים מצורפים, יצירת תמונות, שליחת קבצים ל-LLM וכדומה.';
$string['autoapprovetimelimit'] = 'מגבלת זמן לאישור אוטומטי';
$string['autoapprovetimelimit_desc'] = 'כמה זמן סוכן ה-AI רשאי להמשיך להפעיל פונקציות שאושרו אוטומטית אחרי הפעולה האחרונה של המשתמש, כמו שליחת הודעה או אישור פונקציות. אחרי זמן זה הוא מבקש אישור לפני הפונקציה הבאה. כך שיחות נטושות אינן צורכות משאבי שרת וטוקנים של AI. ‏0 פירושו ללא מגבלה.';
$string['autopaused'] = 'האישור האוטומטי הושהה אחרי {$a} ללא פעולה מצדך. יש לאשר כדי להמשיך.';
$string['background_heading'] = 'שיחות ברקע';
$string['backgroundchats'] = 'איפשור שיחות ברקע';
$string['backgroundchats_desc'] = 'כל שיחה פועלת בתהליך PHP CLI משלה בשרת. כך סוכן ה-AI ממשיך לעבוד גם אחרי שהמשתמש עוזב את הדף או סוגר את הלשונית, מפעיל שרשראות של פונקציות מהר יותר, ולחיצה על עצירה קוטעת את הסוכן מיד, גם בזמן שפונקציה פועלת. כשהאפשרות כבויה, או כשאין PHP CLI זמין, השיחות פועלות בתוך בקשת הדפדפן של המשתמש.';
$string['backgroundunavailable_effect'] = 'סוכן ה-AI מפעיל שרשראות של פונקציות דרך הדפדפן, ולכן הן איטיות יותר ונעצרות כשהמשתמש עוזב את הדף או סוגר את הלשונית. לא ניתן לעצור פונקציות שכבר פועלות.';
$string['backgroundunavailable_executable'] = 'הנתיב לממשק שורת פקודה של PHP עבור שיחות ברקע אינו קובץ בר הרצה.';
$string['backgroundunavailable_function'] = 'פונקציית ה-PHP ‏{$a} מושבתת בשרת זה.';
$string['backgroundunavailable_pathtophp'] = 'הנתיב לממשק שורת פקודה של PHP לא הוגדר.';
$string['backgroundunavailable_setpath'] = 'הגדרת הנתיב לממשק שורת פקודה של PHP';
$string['backgroundunavailable_windows'] = 'שיחות ברקע אינן זמינות בשרתי Windows.';
$string['backtoconfiguration'] = 'חזרה לתצורת סוכן AI';
$string['builtinfunction'] = 'מובנית';
$string['bulk_disabled'] = 'הושבתו {$a} פונקציות';
$string['bulk_disableselected'] = 'השבתת הנבחרות';
$string['bulk_enabled'] = 'הופעלו {$a} פונקציות';
$string['bulk_enableselected'] = 'הפעלת הנבחרות';
$string['bulk_withselected'] = 'עם הפונקציות שנבחרו';
$string['capabilities'] = 'יכולות';
$string['chat_heading'] = 'שיחות';
$string['chat_namelink'] = 'שם עם קישור';
$string['chatfrozen'] = 'הכישורים של שיחה זו אינם זמינים עוד, ולכן לא ניתן להמשיך אותה. יש לפתוח שיחה חדשה במקומה.';
$string['chatfrozen_noplacement'] = 'שיחה זו נפתחה בגרסה קודמת של סוכן AI, ולכן לא ניתן להמשיך אותה. יש לפתוח שיחה חדשה במקומה.';
$string['chathelpcontent'] = '<p>סוכן AI יכול לקרוא ולשנות תכנים במערכת זו בשמך. רוב הפעולות מבקשות את אישורך לפני ביצוען. ניתן לשנות את מצב האישור האוטומטי בתיבת ההודעה כדי להקל או להחמיר.</p>
<p>ניתן לצרף קבצים בגרירה, בהדבקה או בלחיצה על סמל האטב. לאחר מכן יש להקליד את הבקשה וללחוץ על <strong>שליחה</strong>. מקש Enter שולח את ההודעה, ו-Shift יחד עם Enter מוסיפים שורה חדשה.</p><p>AI עלול לטעות. מומלץ לבדוק את התוצאות.</p>';
$string['chatnopermission'] = 'שיחה זו נפתחה באזור במערכת שבו אין לך עוד גישה לסוכן AI, ולכן לא ניתן להמשיך אותה.';
$string['chatnostartpermission'] = 'אין לך הרשאה לפתוח כאן שיחה. יש לפתוח את סוכן AI מעמוד שבו הוא מוצע.';
$string['chatretention'] = 'משך שמירת השיחות';
$string['chatretention_desc'] = 'שיחות שלא הייתה בהן פעילות במשך פרק זמן זה מוסרות מהיסטוריית השיחות של המשתמשים, הקבצים המצורפים אליהן נמחקים ממערכת זו, ונשלחת בקשה למחיקת נתוני השיחה השמורים אצל ספק ה-AI (תשובות שמורות וקבצים שהועלו). המחיקה בצד הספק נעשית כמיטב היכולת ואינה מובטחת; מומלץ להגדיר מדיניות שמירת נתונים תואמת גם בחשבון אצל הספק. הודעות ורשומות שימוש נשמרות לצורכי דוחות עד שיפוג משך שמירת היומנים שלהלן. הערך 0 שומר את השיחות ללא הגבלת זמן.';
$string['closeconfirm_background'] = 'סוכן ה-AI ממשיך לעבוד בזמן שהשיחה סגורה.';
$string['closeconfirm_body'] = 'סגירת החלון אינה מוחקת את השיחה. ניתן לפתוח אותה מחדש בכל עת מתוך התפריט "שיחות קודמות". שיחות נמחקות אוטומטית לאחר {$a} ימים.';
$string['closeconfirm_body_noretention'] = 'סגירת החלון אינה מוחקת את השיחה. ניתן לפתוח אותה מחדש בכל עת מתוך התפריט "שיחות קודמות".';
$string['closeconfirm_close'] = 'סגירת השיחה';
$string['closeconfirm_dontshowagain'] = 'לא להציג שוב';
$string['closeconfirm_title'] = 'לסגור את השיחה?';
$string['component'] = 'רכיב';
$string['component_filesandimages'] = 'פעולות על קבצים ותמונות';
$string['configuration'] = 'תצורת סוכן AI';
$string['confirmdeleteskill'] = 'האם למחוק את הכישור?';
$string['contextevent_opened'] = 'נפתח מתוך {$a}';
$string['contextevent_page'] = 'עמוד · {$a}';
$string['copyresponse'] = 'העתקת התשובה';
$string['copyurl'] = 'העתקת הכתובת';
$string['datasource_chats'] = 'שיחות של סוכן AI';
$string['datasource_usage'] = 'שימוש בסוכן AI';
$string['deletechat_menu'] = 'מחיקת השיחה';
$string['deletechat_named'] = 'מחיקת השיחה: {$a}';
$string['disablefunction'] = 'השבתת הפונקציה';
$string['dragtoresize'] = 'גרירה לשינוי הגודל';
$string['dynamicdiscovery'] = 'איתור דינמי של פונקציות';
$string['dynamicdiscovery_automatic'] = 'אוטומטי';
$string['dynamicdiscovery_desc'] = 'ייעול השימוש בטוקנים על ידי איתור פונקציות רק בעת הצורך. מומלץ כאשר מופעלות פונקציות רבות של שירותים מקוונים. במצב האוטומטי האפשרות תופעל אם זמינות יותר מ-{$a} פונקציות. אצל חלק מספקי ה-AI קיימת מגבלה על מספר הפונקציות (למשל, ב-OpenAI המגבלה היא 128).';
$string['dynamicdiscovery_off'] = 'כבוי';
$string['dynamicdiscovery_on'] = 'פעיל';
$string['enabled'] = 'פעיל';
$string['enablefunction'] = 'הפעלת הפונקציה';
$string['entity_aiagentfunction'] = 'פונקציה של סוכן AI';
$string['entity_chat'] = 'שיחה';
$string['entity_externalfunction'] = 'פונקציה של שירות מקוון';
$string['entity_message'] = 'הודעה';
$string['entity_placement'] = 'שיבוץ';
$string['entity_skill'] = 'כישור';
$string['entity_usage'] = 'שימוש בטוקנים';
$string['error_interrupted_function'] = 'קריאה לפונקציה נקטעה לפני שהסתיימה. ייתכן ששינויים הוחלו באופן חלקי; מומלץ לבדוק את המצב לפני ניסיון נוסף.';
$string['error_interrupted_llm'] = 'התקשורת עם ספק ה-AI נקטעה. יש ללחוץ על "ניסיון נוסף" כדי לשלוח את הבקשה שוב.';
$string['errorbackgroundstart'] = 'סוכן ה-AI לא הצליח להתחיל לעבוד על השיחה הזו. יש לבקש ממנהל המערכת לבדוק את ההגדרות של שיחות ברקע.';
$string['errorbackgroundstart_admin'] = 'סוכן ה-AI לא הצליח להפעיל את התהליך שלו ברקע בשרת זה. יש לתקן את הנתיב לממשק שורת פקודה של PHP, או לכבות את השיחות ברקע, תחת {$a} בהגדרות סוכן ה-AI.';
$string['errordetail'] = '{$a}';
$string['erroremptymessage'] = 'ההודעה אינה יכולה להיות ריקה.';
$string['errorfullscreendisabled'] = 'תצוגת השיחה במסך מלא אינה מופעלת במערכת זו.';
$string['errorinconsistent'] = 'השיחה נמצאת במצב לא עקבי ואינה יכולה להמשיך. יש לטעון מחדש את הדף ולנסות שוב.';
$string['errorinvalidchat'] = 'השיחה לא נמצאה או שהגישה אליה נדחתה.';
$string['errorinvalidname'] = 'השם אינו יכול להיות ריק.';
$string['errormissingfeedbackparams'] = 'חסרה הודעה או חסר סוג המשוב.';
$string['errornopendingfunction'] = 'אין קריאות לפונקציות הממתינות לאישור.';
$string['errornoprovider'] = 'אין ספק AI זמין. סוכן AI משתמש בהגדרות של הפעולה "יצירת תוכן", ולכן יש לוודא שהיא מוגדרת ומופעלת עבור ספק AI אחד לפחות בניהול המערכת.';
$string['errornoprovider_link'] = 'הגדרת ספקי AI.';
$string['errornoretryresponse'] = 'אין תשובה שנכשלה שניתן לשלוח שוב.';
$string['erroroutofsync'] = 'השיחה השתנתה בחלון אחר. יש לרענן כדי לראות את המצב העדכני.';
$string['errorpagenotavailable'] = 'העמוד הנוכחי אינו זמין בתצוגה זו.';
$string['errorpendingfunctions'] = 'יש לאשר או לדחות תחילה את הקריאות לפונקציות הממתינות לאישור.';
$string['errorprovider_blocked_prompt'] = '{$a->provider} חסם את ההנחיה: {$a->reason}';
$string['errorprovider_blocked_response'] = '{$a->provider} חסם את התשובה: {$a->reason}';
$string['errorprovider_no_content'] = '{$a} לא החזיר תוכן.';
$string['errorprovider_no_content_with_reason'] = '{$a->provider} לא החזיר תוכן (סיבת סיום: {$a->reason}).';
$string['errorresponses_endpoint_invalid'] = 'הכתובת לתקשורת עם ספק ה-AI אינה תקינה או שלא ניתן להגיע אליה.';
$string['errorresponses_endpoint_invalid_config'] = 'התוסף ניסה להשתמש בכתובת {$a->endpoint} עבור Responses API של OpenAI, אך הבקשה נכשלה. יש לעבור אל {$a->settingslink} ולבדוק את כתובת ה-Responses API, או להחליף את סוג ה-API ל-Chat Completions.';
$string['errorresponses_endpoint_reply'] = 'תשובת הספק: {$a}';
$string['errorresponses_provider_switch'] = 'לא ניתן להמשיך שיחה זו באמצעות Responses API של OpenAI, מכיוון שהיא נפתחה עם ספק AI אחר. יש לפתוח שיחה חדשה, או לחזור לספק המקורי (או ל-Chat Completions של OpenAI) כדי להמשיך אותה.';
$string['errorrootnotfound'] = 'הודעת הפתיחה של השיחה לא נמצאה.';
$string['errorupdatesstopped'] = 'השיחה הפסיקה לקבל עדכונים. יש לרענן כדי לראות את המצב העדכני.';
$string['exportskill'] = 'ייצוא';
$string['feedback_modal_freetextlabel'] = 'משהו נוסף? (רשות)';
$string['feedback_modal_freetextplaceholder_negative'] = 'מה השתבש? ניתן לפרט כרצונך.';
$string['feedback_modal_freetextplaceholder_positive'] = 'מה עבד היטב? (רשות)';
$string['feedback_modal_freetextplaceholder_toolerror'] = 'מה השתבש בקריאה זו לפונקציה?';
$string['feedback_modal_intro_negative'] = 'תודה על העדכון. המשוב יישלח למפתחי התוסף סוכן AI (ולא לספק ה-AI), כדי שיוכלו לשפר את העבודה עם הפונקציות של מוודל.';
$string['feedback_modal_intro_positive'] = 'תודה! המשוב יישלח למפתחי התוסף סוכן AI (ולא לספק ה-AI), כדי שיוכלו לשמר את מה שעובד ולשפר את מה שלא.';
$string['feedback_modal_intro_toolerror'] = 'דיווח על קריאה זו לפונקציה כבעייתית. המשוב יישלח למפתחי התוסף סוכן AI (ולא לספק ה-AI), כדי שיוכלו לתקן את השירות המקוון או לשפר את אופן השימוש בו.';
$string['feedback_modal_send'] = 'שליחת המשוב';
$string['feedback_modal_sending'] = 'בשליחה...';
$string['feedback_modal_snapshotlabel'] = 'מה יישלח (ניתן לערוך)';
$string['feedback_modal_title_positive'] = 'ספרו לנו מה עבד';
$string['feedbackcat_negative_misunderstood'] = 'לא הבין את השאלה שלי';
$string['feedbackcat_negative_notfollowed'] = 'לא פעל לפי ההנחיות';
$string['feedbackcat_negative_other'] = 'משהו אחר';
$string['feedbackcat_negative_wronginfo'] = 'מידע שגוי או מומצא';
$string['feedbackcat_negative_wrongtoolused'] = 'השתמש בפונקציה הלא נכונה';
$string['feedbackcat_positive_accurate'] = 'מדויק';
$string['feedbackcat_positive_goodexplanation'] = 'הסבר ברור';
$string['feedbackcat_positive_helpful'] = 'מועיל';
$string['feedbackcat_positive_other'] = 'משהו אחר';
$string['feedbackcat_positive_welltimed'] = 'הפונקציה המתאימה למשימה';
$string['feedbackcat_toolerror_misleadingresult'] = 'התוצאה הייתה מטעה';
$string['feedbackcat_toolerror_other'] = 'משהו אחר';
$string['feedbackcat_toolerror_toolerror'] = 'הפונקציה החזירה שגיאה';
$string['feedbackcat_toolerror_wrongargs'] = 'ארגומנטים שגויים';
$string['feedbackcat_toolerror_wrongtool'] = 'פונקציה לא מתאימה למשימה';
$string['feedbackdisabled'] = 'איסוף המשוב בוטל על ידי מנהל המערכת.';
$string['feedbackfailed'] = 'לא ניתן היה לשלוח את המשוב. יש לנסות שוב מאוחר יותר.';
$string['feedbackflagfunctioncall'] = 'דיווח על הקריאה לפונקציה';
$string['feedbacksubmitted'] = 'המשוב נשלח';
$string['feedbackthanks'] = 'תודה על המשוב!';
$string['feedbackthumbdown'] = 'דיווח על בעיה בתשובה זו';
$string['feedbackthumbup'] = 'התשובה הזו הייתה מועילה';
$string['feedbackvalidation_categoryrequired'] = 'יש לבחור לפחות קטגוריה אחת.';
$string['functionapprovalneeded'] = 'נדרש אישור';
$string['functionapprovalneededmany'] = 'קריאות לפונקציות שממתינות לאישור: {$a}';
$string['functionapprovecount'] = 'אישור {$a} קריאות';
$string['functionavailable'] = 'זמינה';
$string['functioncall_actions'] = 'אישור או דחייה של הקריאה לפונקציה';
$string['functioncall_chip_action'] = 'שינוי מצב האישור האוטומטי';
$string['functioncalldetails'] = 'פרטי הקריאה לפונקציה';
$string['functioncalldetailsof'] = 'פרטי הקריאה לפונקציה: {$a}';
$string['functioncalling'] = 'מתבצעת קריאה ל־{$a}';
$string['functioncallnav'] = '{$a->index} מתוך {$a->total}';
$string['functioncallnext'] = 'הקריאה הבאה לפונקציה';
$string['functioncallprevious'] = 'הקריאה הקודמת לפונקציה';
$string['functioncallscount'] = 'קריאות לפונקציות: {$a}';
$string['functioncallscountone'] = 'קריאה אחת לפונקציה';
$string['functiondenied'] = 'דחית את {$a}';
$string['functiondeniedmany'] = 'דחית את {$a->name} ועוד {$a->count}';
$string['functiondeniednext'] = 'הסוכן נעצר. יש לכתוב הודעה כדי להנחות אותו מה לעשות עכשיו.';
$string['functiondeny'] = 'דחייה';
$string['functiondenyall'] = 'דחיית הכל';
$string['functiondetailscopied'] = 'הועתק';
$string['functiondetailscopy'] = 'העתקה';
$string['functiondetailscopyhtml'] = 'העתקת קוד המקור של HTML';
$string['functiondetailscopyparameters'] = 'העתקת הפרמטרים כ-JSON';
$string['functiondetailscopyresult'] = 'העתקת התוצאה כ-JSON';
$string['functiondetailscopysvg'] = 'העתקת קוד המקור של SVG';
$string['functiondetailsdisplay'] = 'תצוגה';
$string['functiondetailsempty'] = '(ריק)';
$string['functiondetailsfield'] = 'שדה אחד';
$string['functiondetailsfields'] = '{$a} שדות';
$string['functiondetailsformatted'] = 'מעוצב';
$string['functiondetailshtmlsource'] = 'קוד מקור HTML';
$string['functiondetailsimage'] = 'תמונה';
$string['functiondetailsitem'] = 'פריט אחד';
$string['functiondetailsitems'] = '{$a} פריטים';
$string['functiondetailsjson'] = 'JSON';
$string['functiondetailsjsontext'] = 'טקסט JSON';
$string['functiondetailssvgimage'] = 'תמונת SVG · {$a}';
$string['functiondetailssvgsource'] = 'קוד מקור SVG';
$string['functiondetailsviewformatted'] = 'הצגת הטקסט המעוצב';
$string['functiondetailsviewimage'] = 'הצגת התמונה';
$string['functionloopguardbody'] = 'פונקציה זו כבר הופעלה {$a} פעמים עם אותם נתונים. האישור האוטומטי הושהה בשל חשד ללולאה; יש לאשר כדי להמשיך.';
$string['functionloopguardheading'] = 'קריאה חוזרת.';
$string['functionname'] = 'שם הפונקציה';
$string['functionparameters'] = 'פרמטרים';
$string['functionresult'] = 'תוצאה';
$string['functionresultdiscarded'] = 'התוצאה הייתה גדולה מדי ({$a}) ולכן הושלכה. יש לצמצם את הבקשה על ידי סינון, בקשת פחות שדות או שימוש בפונקציה ממוקדת יותר. חזרה על אותה קריאה תפיק את אותה שגיאה.';
$string['functionrules_error_component'] = '{$a->path}: אף פונקציה אינה שייכת לרכיב התואם ל-"‎{$a->value}‎".';
$string['functionrules_error_depth'] = '{$a->path}: עומק הקינון של הכלל חורג מהמספר המרבי של רמות ({$a->max}).';
$string['functionrules_error_function'] = '{$a->path}: אף פונקציה אינה תואמת ל-"‎{$a->value}‎".';
$string['functionrules_error_json'] = 'הכלל אינו JSON תקין: {$a}';
$string['functionrules_error_list'] = '{$a->path}: נדרשת רשימה לא ריקה של חלקי כלל.';
$string['functionrules_error_node'] = '{$a->path}: כל חלק של הכלל חייב להיות אובייקט עם מפתח אחד בדיוק: type, tag, component, function, not, all או any.';
$string['functionrules_error_tag'] = '{$a->path}: לאף פונקציה אין את התג "‎{$a->value}‎".';
$string['functionrules_error_type'] = '{$a->path}: הסוג "‎{$a->value}‎" אינו מוכר. הסוגים הם read, safe ו-write.';
$string['functionrules_error_value'] = '{$a->path}: נדרשת מחרוזת לא ריקה או רשימה לא ריקה של מחרוזות לא ריקות.';
$string['functionrules_path_root'] = 'הכלל כולו';
$string['functions_intro'] = '<p><b>לא כל פונקציה של שירות מקוון מתאימה לסוכן AI.</b> חלקן נבנו לתקשורת בין הדפדפן לשרת (מסומנות ב-AJAX) או עבור משתמשים שאינם מחוברים (ללא התחברות), ולחלקן קיימות חלופות טובות יותר. חלק מפונקציות ה-AJAX עובדות היטב עם סוכן AI, אך רובן לא. התוסף סוכן AI מעניק לפונקציות של הליבה ושל תוספים סטנדרטיים ציון התאמה בסולם שבין 1 ל-10, ומפעיל את אלה שציונן 5 ומעלה. פונקציות של תוספים חיצוניים אינן מקבלות ציון; במקומן מופעלות אוטומטית כל הפונקציות שאינן AJAX. בעמוד זה ניתן לסקור את הפונקציות הזמינות ולהפעיל או להשבית כל אחת מהן.</p><p>כאשר פונקציה דורשת יכולת אחת או יותר, היא אינה זמינה למשתמשים שאין להם לפחות אחת מהן באיזשהו הקשר במערכת. עבור הליבה ותוספים סטנדרטיים התוסף סוכן AI מגדיר את היכולות הללו נכון. עבור תוספים חיצוניים היכולות נלקחות מהגדרת הפונקציה, ומכיוון שמוודל אינה אוכפת בדיקה זו בעצמה, ייתכן שהן שגויות.</p>';
$string['functions_report'] = 'פונקציות של סוכן AI';
$string['functionstatus_denied'] = 'נדחתה';
$string['functionstatus_failed'] = 'נכשלה';
$string['functionstatus_interrupted'] = 'נקטעה';
$string['functionstatus_notrun'] = 'לא הופעלה';
$string['functionstatus_pending'] = 'ממתינה לאישור';
$string['functionstatus_processing'] = 'בביצוע...';
$string['functiontype'] = 'סוג';
$string['functiontype_help'] = 'סוג הפונקציה של השירות המקוון והמאפיינים שלה:

* **קריאה**: שולפת נתונים בלי לשנות דבר
* **בטוחה**: פונקציה מובנית שאינה משנה את המערכת אלא רק את הקבצים שבשיחה, למשל שינוי גודל של קובץ מצורף או יצירת תמונה
* **כתיבה**: יוצרת או משנה נתונים
* **AJAX**: משמשת את מוודל באופן פנימי לבקשות בין הדפדפן לשרת, ולכן פחות מתאימה כפונקציה של סוכן AI
* **ללא התחברות**: זמינה למשתמשים שאינם מחוברים, ולכן אף היא פחות מתאימה כפונקציה של סוכן AI';
$string['functiontype_read'] = 'קריאה';
$string['functiontype_safe'] = 'בטוחה';
$string['functiontype_write'] = 'כתיבה';
$string['gemini_api_generatecontent'] = 'generateContent (יציב)';
$string['gemini_api_interactions'] = 'Interactions API (בטא)';
$string['gemini_api_type'] = 'סוג ה-API';
$string['gemini_api_type_desc'] = 'באיזה API של Gemini להשתמש בשיחות מרובות תורות. generateContent הוא הממשק הסטנדרטי חסר המצב, ובכל תור נבנית מחדש רשימת ההודעות המלאה. ה-Interactions API נמצא כעת בשלב בטא; הוא שומר את מצב השיחה בצד של Google (ולכן בכל תור נשלח רק הקלט החדש), אך הסכמה שלו עשויה להשתנות ללא הודעה מוקדמת.';
$string['gemini_builtin_code_execution'] = 'הפעלת הכלי Code Execution';
$string['gemini_builtin_code_execution_desc'] = 'מאפשר ל-Gemini לכתוב ולהריץ קוד Python בסביבה מבודדת כדי לפתור חישובים או לעבד נתונים. במודלים מגרסה 3 של Gemini בלבד; ב-Gemini 2.5 ובגרסאות קודמות ההגדרה מתעלמת בשקט, מכיוון שמודלים אלה אינם יכולים לשלב כלים מובנים עם קריאות לפונקציות מותאמות.';
$string['gemini_builtin_google_search'] = 'הפעלת ביסוס על חיפוש Google';
$string['gemini_builtin_google_search_desc'] = 'מאפשר ל-Gemini לבסס תשובות על תוצאות עדכניות מחיפוש באינטרנט. במודלים מגרסה 3 של Gemini בלבד; ב-Gemini 2.5 ובגרסאות קודמות ההגדרה מתעלמת בשקט, מכיוון שמודלים אלה אינם יכולים לשלב כלים מובנים עם קריאות לפונקציות מותאמות. כל שאילתת חיפוש מחויבת בנפרד.';
$string['gemini_builtin_url_context'] = 'הפעלת הכלי URL Context';
$string['gemini_builtin_url_context_desc'] = 'מאפשר ל-Gemini לקרוא ולנתח תוכן מכתובות אינטרנט ציבוריות שהמשתמש מזכיר. במודלים מגרסה 3 של Gemini בלבד; ב-Gemini 2.5 ובגרסאות קודמות ההגדרה מתעלמת בשקט, מכיוון שמודלים אלה אינם יכולים לשלב כלים מובנים עם קריאות לפונקציות מותאמות. הכתובות חייבות להיות נגישות לכולם (ללא localhost וללא התחברות).';
$string['gemini_heading'] = 'Google Gemini';
$string['hidefunctioncalls'] = 'הסתרת הקריאות לפונקציות';
$string['hint_splitview'] = 'רוצה להשתמש בשיחה זו לצד המערכת? ניתן לגרור את <a href="{$a}">{$a}</a> לחלון חדש, או ללחוץ עליו לחיצה ימנית ולהשתמש בתצוגה המפוצלת של הדפדפן.';
$string['imagedimensions'] = '{$a->width}×{$a->height} פיקסלים';
$string['imagepreviewinfo'] = 'קובץ {$a->size}, מידות {$a->dimensions}. תצוגה מקדימה {$a->preview} ({$a->scale}%).';
$string['importskill'] = 'ייבוא כישורים';
$string['importskill_addmore'] = 'הוספת קבצים...';
$string['importskill_button'] = 'ייבוא {$a} כישורים';
$string['importskill_buttonone'] = 'ייבוא כישור אחד';
$string['importskill_choose'] = 'בחירת קבצים...';
$string['importskill_drophint'] = 'ניתן לגרור לכאן קבצים של כישורים, או להשתמש בכפתור.';
$string['importskill_fileone'] = 'נבחר קובץ אחד';
$string['importskill_files'] = 'נבחרו {$a} קבצים';
$string['importskill_statusinvalid'] = 'אינו קובץ של כישור';
$string['importskill_statusnew'] = 'כישור חדש';
$string['importskill_statusupdate'] = 'מעדכן את {$a}';
$string['importskill_summarynew'] = '{$a} חדשים';
$string['importskill_summaryskipped'] = '{$a} דולגו';
$string['importskill_summaryupdate'] = '{$a} לעדכון';
$string['importskill_toolarge'] = 'נתוני הכישור גדולים מדי (המרב {$a}).';
$string['inlinefilecharlimit'] = 'מגבלה לתוכן קובץ מוטמע';
$string['inlinefilecharlimit_desc'] = 'הכמות המרבית מתוך קובץ טקסט שניתן להטמיע ישירות בשיחה כאשר קובץ נקרא בהטמעה. תוכן ארוך יותר ייחתך. ההטמעה משמשת כאשר המודל מבקש זאת, וכחלופה עבור ספקי AI שאינם יכולים לקבל קבצים. תוכן מוטמע נשלח מחדש עם היסטוריית השיחה בכל תור, ולכן ערך גבוה מגדיל את השימוש בטוקנים.';
$string['interruptedbystop'] = 'נקטעה: עצרת את הסוכן.';
$string['interruptedunexpectedly'] = 'נקטעה: הפונקציה נעצרה באופן בלתי צפוי.';
$string['invalidparameter'] = 'זוהה פרמטר שגוי: {$a}';
$string['isajax'] = 'AJAX';
$string['licenseactivate'] = 'הפעלת רישיון';
$string['licenseactivate_help'] = 'יש להזין את מפתח הרישיון שהתקבל בדואר אלקטרוני מ-LMSCloud. ניתן להפעיל את מפתח הרישיון במספר מוגבל של מערכות (בדרך כלל שתיים). ניתן לבטל את ההפעלה בכל רגע כדי להשתמש בו במערכת אחרת.';
$string['licensedeactivate'] = 'ביטול הפעלה';
$string['licensedeactivate_help'] = 'ביטול הפעלת מפתח הרישיון במערכת זו, כדי שניתן יהיה להשתמש בו במערכת אחרת.';
$string['licenseerror_deactivate'] = 'לא ניתן היה לבטל את הפעלת הרישיון. ייתכן שהשרת אינו זמין באופן זמני; יש לנסות שוב מאוחר יותר.';
$string['licenseerror_deactivate_forced'] = 'רישיון זה מוגדר בהגדרות השרת (config.php) ולא ניתן לבטל את הפעלתו מעמוד זה.';
$string['licenseerror_invalid'] = 'מפתח הרישיון אינו תקין או שלא ניתן היה להפעילו.';
$string['licenseerror_limit'] = 'אין מקומות פנויים למפתח רישיון זה. יש לבטל תחילה את ההפעלה במערכת אחרת ואז לנסות שוב.';
$string['licenseerror_transport'] = 'לא ניתן להגיע לשרת הרישיונות. יש לבדוק את החיבור ולנסות שוב.';
$string['licensekey'] = 'מפתח רישיון';
$string['licenselocked_expired'] = 'מערכת זו לא אימתה את הרישיון שלה במשך יותר מ-14 ימים. יש לבדוק את הרישיון מחדש כדי לשחזר את הגישה.';
$string['licenselocked_key_rejected'] = 'מפתח רישיון זה אינו תקף עוד במערכת זו.';
$string['licenselocked_url_mismatch'] = 'כתובת האינטרנט של המערכת השתנתה; על בעל הרישיון לאשר את הכתובת החדשה.';
$string['licensemanageinsettings'] = 'ניהול הרישיון מתבצע בהגדרות סוכן AI.';
$string['licenserecheck'] = 'בדיקה מחדש';
$string['licensesetting'] = 'רישיון סוכן AI';
$string['licensesetting_desc'] = 'הפעלה, בדיקה מחדש או ביטול הפעלה של רישיון סוכן AI עבור מערכת זו.';
$string['licensestatus_materialsmissing'] = 'רישיון סוכן AI פעיל, אך החומרים שהורדו חסרים ולכן אין פונקציות זמינות. יש לבצע בדיקה מחדש כדי להוריד אותם שוב.';
$string['licensestatus_notactivated'] = 'נדרש רישיון כדי להשתמש בסוכן AI במערכת זו.';
$string['licensestatus_valid'] = 'רישיון סוכן AI פעיל.';
$string['loginrequired'] = 'נדרשת התחברות';
$string['logretention'] = 'משך שמירת יומני השיחות';
$string['logretention_desc'] = 'הודעות ורשומות של שימוש בטוקנים בשיחות שלא הייתה בהן פעילות במשך פרק זמן זה נמחקות לצמיתות ממסד הנתונים. הדבר חל רק על שיחות שכבר הוסרו מהיסטוריית השיחות, בין אם על ידי המשתמש ובין אם על ידי ההגדרה שמעל. הערך 0 שומר את היומנים ללא הגבלת זמן.';
$string['maxfilesize'] = 'גודל הקובץ המרבי ל-LLM';
$string['maxfilesize_desc'] = 'מונע ממשתמשים לשלוח ל-LLM קבצים גדולים מדי. קבצים גדולים צורכים טוקנים במהירות ומייקרים את העלות. קבצים החורגים מגודל זה נדחים בשגיאה לפני שנתונים כלשהם יוצאים מהמערכת.

ספקי AI ידחו ממילא קבצים החורגים מהמגבלות שלהם לכל בקשה (Anthropic 32MB, Gemini 50MB בהטמעה, OpenAI 512MB).';
$string['maxfunctionresultsize'] = 'גודל מרבי לתוצאת פונקציה';
$string['maxfunctionresultsize_desc'] = 'כמות הנתונים המרבית שפונקציה בודדת יכולה להחזיר למודל ה-AI. לחלק מפונקציות Moodle אין סינון והן מחזירות את כל המשתמשים או את כל הקורסים באתר, מה שמציף את המודל ומבזבז טוקנים בכל תור שלאחר מכן. תוצאה החורגת ממגבלה זו מושלכת, והמודל מתבקש לצמצם את הבקשה. אפס פירושו ללא מגבלה. קריאת קובץ בהטמעה פטורה מכך; לשם כך יש להשתמש ב"מגבלה לתוכן קובץ מוטמע".';
$string['newchat'] = 'שיחה חדשה';
$string['newchatchooser_clone'] = 'כמו השיחה הזו';
$string['newchatchooser_continue'] = 'המשך מהמקום שבו הפסקת';
$string['newchatchooser_desc_default'] = 'ניתן לפתוח שיחה חדשה בעמוד זה, או להמשיך מהמקום שבו הפסקת.';
$string['newchatchooser_desc_full'] = 'ניתן לפתוח שיחה כללית, או להמשיך מהמקום שבו הפסקת.';
$string['newchatchooser_desc_multi'] = 'בעמוד זה יש כמה נקודות פתיחה. ניתן לבחור אחת מהן, או להמשיך מהמקום שבו הפסקת.';
$string['newchatchooser_error'] = 'לא ניתן היה לפתוח שיחה חדשה. יש לנסות שוב.';
$string['newchatchooser_none'] = 'אין כאן עמוד שבו ניתן לפתוח שיחה חדשה.';
$string['newchatchooser_onthispage'] = 'בעמוד זה:';
$string['newchatchooser_title'] = 'פתיחת שיחה חדשה';
$string['nfilesattached'] = '{$a} קבצים מצורפים';
$string['nonauth'] = 'ללא התחברות';
$string['notavailable_loginas'] = 'סוכן ה-AI אינו זמין בזמן התחברות כמשתמש אחר.';
$string['notavailable_roleswitch'] = 'סוכן ה-AI אינו זמין בזמן החלפת תפקיד.';
$string['numfiles'] = '{$a} קבצים';
$string['numimages'] = '{$a} תמונות';
$string['numotherfiles'] = '{$a} אחרים';
$string['onefileattached'] = 'קובץ אחד מצורף';
$string['openai_api_chatcompletions'] = 'Chat Completions';
$string['openai_api_responses'] = 'Responses API';
$string['openai_api_type'] = 'סוג ה-API';
$string['openai_api_type_desc'] = 'באיזה API של OpenAI להשתמש בשיחות מרובות תורות. ה-Responses API שומר את מצב השיחה בצד השרת, ולכן בכל תור נשלח רק הקלט החדש (עלות נמוכה יותר, היסטוריה פשוטה יותר). Chat Completions בונה מחדש את רשימת ההודעות המלאה בכל בקשה (תאימות רחבה יותר לספקים).<br><br>ה-Responses API נתמך על ידי: <strong>{$a}</strong>. ספקים אחרים יעברו בשקט ל-Chat Completions ללא קשר להגדרה זו.';
$string['openai_heading'] = 'OpenAI (או תואם)';
$string['openlink'] = 'פתיחת הקישור';
$string['pathtophp'] = 'הנתיב לממשק שורת פקודה של PHP עבור שיחות ברקע';
$string['pathtophp_desc'] = 'קובץ ה-PHP CLI שמפעיל את השיחות ברקע, כאשר הוא צריך להיות שונה מזה שבהגדרת המערכת "הנתיב לממשק שורת פקודה של PHP". יש להשאיר ריק כדי להשתמש בהגדרת המערכת.';
$string['placeholder'] = 'הקלדת הודעה...';
$string['placement_add'] = 'הוספת שיבוץ';
$string['placement_confirmdelete'] = 'האם למחוק את השיבוץ?';
$string['placement_copyof'] = '{$a} (עותק)';
$string['placement_defaultname'] = 'סוכן AI';
$string['placement_deleted'] = 'השיבוץ נמחק.';
$string['placement_duplicated'] = 'השיבוץ שוכפל.';
$string['placement_edit'] = 'עריכת השיבוץ';
$string['placement_functionrules'] = 'כלל פונקציות';
$string['placement_functionrules_help'] = 'מגביל באילו פונקציות סוכן AI רשאי להשתמש בשיחות שנפתחו מתוך שיבוץ זה. יש להשאיר ריק כדי לאפשר את כל הפונקציות. שינוי הכלל משנה אותו גם בשיחות שכבר נפתחו מתוך שיבוץ זה.

הכלל נכתב ב-JSON. כל חלק בו הוא אובייקט עם מפתח אחד:

* ‎{"type": "read"}‎: סוג הפונקציה הוא read, safe או write, כלומר קריאה, בטוחה או כתיבה בדוח הפונקציות
* ‎{"tag": "student"}‎: לפונקציה יש את התג הזה
* ‎{"component": "mod_quiz"}‎: הפונקציה שייכת לרכיב הזה
* ‎{"function": "core_course_get_courses"}‎: זה שם הפונקציה
* ⁦{"not": חלק}⁩, ⁦{"all": [חלקים]}⁩, ⁦{"any": [חלקים]}⁩: שילוב של חלקים

בשם של רכיב או של פונקציה, כוכבית תואמת לכל טקסט. גם המפתחות type, tag, component ו-function יכולים לקבל רשימה, שמשמעותה כל אחד מהערכים: ‎{"type": ["read", "safe"]}‎ מאפשר כל פונקציה שאינה משנה את המערכת.

ניתן לבקש מסוכן AI לכתוב את הכלל או לשנות אותו: הוא בודק אילו פונקציות הכלל מאפשר לפני שהוא שומר אותו.';
$string['placement_functionrules_preview'] = 'פונקציות מופעלות שהכלל השמור מאפשר: {$a->count} מתוך {$a->total}';
$string['placement_functions'] = 'פונקציות מותרות';
$string['placement_functions_limited'] = 'מוגבלות ({$a})';
$string['placement_initialskills'] = 'כישורים התחלתיים';
$string['placement_initialskills_help'] = 'כישורים שנטענים אוטומטית עם פתיחת השיחה. רשות; הסוכן עדיין יכול לטעון כל כישור בעת הצורך, אלא אם כלל הפונקציות של השיבוץ מונע זאת. הכישורים שנבחרו שולטים גם בשיבוץ עצמו: משתמשים שאין להם גישה לאף אחד מהם לא יראו את הכפתור או את פריט התפריט, ואם כל הכישורים שנבחרו יוסרו או יושבתו בהמשך, השיבוץ יפסיק להופיע.';
$string['placement_intro'] = '<p>שיבוצים מאפשרים להציע סוכנים המותאמים למשימה מסוימת. כל שיבוץ מוסיף את הכפתור של סוכן AI בעמודים שכתובתם תואמת לאחת המסכות שלו, ויכול לפתוח את השיחה עם כישורים התחלתיים ועם טקסט פתיחה מוגדרים מראש. אם נבחרו כישורים התחלתיים, משתמשים שאין להם גישה לאף אחד מהם לא יראו את הכפתור.</p><p>הכישורים ההתחלתיים קובעים רק את נקודת הפתיחה של השיחה; הסוכן עדיין יכול לגשת לכל הפונקציות המופעלות, ולא רק לאלה של הכישורים. כלל פונקציות מגביל באילו פונקציות הסוכן רשאי להשתמש בשיחות שנפתחו מתוך שיבוץ.</p>';
$string['placement_location'] = 'מיקום הכפתור';
$string['placement_location_floating'] = 'כפתור צף';
$string['placement_location_h1'] = 'כותרת העמוד (H1)';
$string['placement_location_h2'] = 'כותרת משנית (H2)';
$string['placement_menuheading'] = 'שאלו את סוכן AI';
$string['placement_name'] = 'שם';
$string['placement_name_help'] = 'מוצג למשתמשים: בתפריט המשתמש, כתיאור הכפתור, וכאשר כמה שיבוצים מתאימים לאותו עמוד, גם בתפריט של הכפתור.';
$string['placement_save'] = 'שמירת השיבוץ';
$string['placement_saved'] = 'השיבוץ נשמר.';
$string['placement_skillmissing'] = 'הכישור לא נמצא';
$string['placement_skillnotinitial'] = 'לא יכול להיות כישור התחלתי';
$string['placement_suggestedprompts'] = 'הנחיות מוצעות';
$string['placement_suggestedprompts_help'] = 'הנחיה אחת בכל שורה. ההנחיות מוצגות ככפתורים מעל תיבת ההודעה במסך הפתיחה של השיחה. לחיצה על כפתור שולחת את ההנחיה מיד, לדוגמה "סכם את הקורס הזה". כדי להציע הנחיה שהמשתמש צריך להשלים קודם, יש להוסיף בה ... בכל מקום: ההנחיה תוכנס אז לתיבת ההודעה במקום להישלח, לדוגמה "סכם את הנושא ... בקורס הזה". יש להשאיר את השדה ריק כדי לא להציע הנחיות.';
$string['placement_urlmask'] = 'מסכות כתובת';
$string['placement_urlmask_help'] = 'תבנית אחת בכל שורה. ניתן להשתמש בתו * כתו כללי, למשל ‎/course/view.php*‎ או ‎/mod/*/view.php*‎.';
$string['placement_urlmask_invalid'] = 'כל מסכת כתובת חייבת להתחיל בקו נטוי: "{$a}" אינה מתחילה בו.';
$string['placement_welcome'] = 'טקסט פתיחה מותאם (רשות)';
$string['placement_welcome_help'] = 'מחליף את הודעת הפתיחה הרגילה במסך הפתיחה של השיחה. יש להשאיר ריק כדי להשתמש בברירת המחדל.';
$string['pluginname'] = 'סוכן AI';
$string['pluginnotinstalled'] = 'התוסף אינו מותקן';
$string['previouschats'] = 'שיחות קודמות';
$string['privacy:metadata:aiprovider'] = 'השיחות נשלחות לספק ה-AI שנבחר על ידי מנהל המערכת, כגון OpenAI, Azure OpenAI,‏ Google Gemini או Anthropic, כדי שיוכל להפיק תשובה. התוסף שולח כל בקשה ישירות לספק ולא דרך מערכת ה-AI של מוודל. זהות החברה המקבלת את הנתונים ומשך שמירתם אצלה תלויים בספק שהוגדר במערכת ובתנאי השימוש שלו.';
$string['privacy:metadata:aiprovider:files'] = 'קבצים שהמשתמש מצרף לשיחה, וקבצים שהסוכן קורא מהמערכת בשמו, המועלים כדי שהמודל יוכל לקרוא את תוכנם.';
$string['privacy:metadata:aiprovider:messages'] = 'היסטוריית השיחה, הנשלחת מחדש בכל תור: בקשות המשתמש, תשובות העוזר, ותוצאות הפונקציות של מוודל שהסוכן הפעיל, שעשויות לכלול מידע אישי על משתמשים אחרים.';
$string['privacy:metadata:aiprovider:userid'] = 'המזהה של המשתמש המנהל את השיחה, הנכלל בהנחיות הנשלחות למודל כדי שיוכל לפעול בשמו.';
$string['privacy:metadata:core_files'] = 'קבצים המצורפים להודעות של סוכן AI.';
$string['privacy:metadata:feedback'] = 'כאשר המשוב מופעל ומשתמש מדרג תשובה או מדווח על קריאה לפונקציה שנכשלה, חילופי הדברים שדורגו נשלחים למפתחי התוסף סוכן AI כדי שניתן יהיה לשפר את התנהגות הסוכן. דבר אינו נשלח אלא אם המשתמש בוחר לשלוח משוב, וניתן לבטל את היכולת הזו לחלוטין באמצעות ההגדרה "איפשור משוב".';
$string['privacy:metadata:feedback:freetext'] = 'ההערה שהמשתמש כותב לפי בחירתו בעת שליחת המשוב, נשלחת כפי שהוקלדה.';
$string['privacy:metadata:feedback:snapshot'] = 'תמליל של חילופי הדברים שדורגו: שאלת המשתמש, תשובות העוזר ושמות הפונקציות שהופעלו. כתובות דואר אלקטרוני מוסתרות, והארגומנטים והתוצאות של אותן פונקציות אינם נכללים, למעט חיפושי הפונקציות של הסוכן עצמו. המשתמש יכול לערוך את הטקסט לפני השליחה.';
$string['privacy:metadata:preference:tool_aiagent_closeconfirm_hidden'] = 'ההעדפה שלא להציג שוב את חלונית האישור בעת סגירה.';
$string['privacy:metadata:preference:tool_aiagent_overlaysize'] = 'הגודל שהמשתמש קבע לחלון השיחה הצף.';
$string['privacy:metadata:preference:tool_aiagent_sidebarwidth'] = 'הרוחב שהמשתמש קבע לסרגל הצד של השיחה.';
$string['privacy:metadata:preference:tool_aiagent_viewtype'] = 'תצוגת השיחה שבה השתמש המשתמש לאחרונה (חלון צף, סרגל צד או מסך מלא).';
$string['privacy:metadata:tool_aiagent_conversation'] = 'שיחות בין משתמש לבין סוכן AI. שיחות שהמשתמש מוחק מועברות לארכיון ואינן נמחקות, כדי שניתן יהיה להמשיך לעקוב אחר השימוש בטוקנים.';
$string['privacy:metadata:tool_aiagent_conversation:timearchived'] = 'המועד שבו השיחה הועברה לארכיון (נמחקה על ידי המשתמש), אם רלוונטי.';
$string['privacy:metadata:tool_aiagent_conversation:timecreated'] = 'המועד שבו השיחה נוצרה.';
$string['privacy:metadata:tool_aiagent_conversation:timelastactivity'] = 'המועד שבו נשמרה ההודעה האחרונה בשיחה.';
$string['privacy:metadata:tool_aiagent_conversation:timemodified'] = 'המועד שבו השיחה עודכנה לאחרונה.';
$string['privacy:metadata:tool_aiagent_conversation:title'] = 'שם השיחה, הנוצר מההודעה הראשונה.';
$string['privacy:metadata:tool_aiagent_conversation:userid'] = 'המשתמש שהשיחה שייכת לו.';
$string['privacy:metadata:tool_aiagent_message'] = 'הודעות בודדות בתוך שיחה, כולל בקשות המשתמש ותשובות ה-AI.';
$string['privacy:metadata:tool_aiagent_message:content'] = 'תוכן ההודעה.';
$string['privacy:metadata:tool_aiagent_message:pagecontext'] = 'עבור הודעה שנשלחה מחלון השיחה הצף או מסרגל הצד של השיחה, הכתובת והשם של העמוד שהמשתמש קרא באותה עת.';
$string['privacy:metadata:tool_aiagent_message:role'] = 'מי שלח את ההודעה: המשתמש, העוזר, המערכת או פונקציה.';
$string['privacy:metadata:tool_aiagent_message:timecreated'] = 'המועד שבו ההודעה נוצרה.';
$string['privacy:metadata:tool_aiagent_run'] = 'רישום של כל פעם שסוכן ה-AI עבד על הודעה בשיחה, הנשמר יום אחד לאחר הסיום.';
$string['privacy:metadata:tool_aiagent_run:ip'] = 'כתובת ה-IP של המשתמש בעת שליחת ההודעה, הנרשמת יחד עם הפעולות שסוכן ה-AI ביצע עבורו.';
$string['privacy:metadata:tool_aiagent_run:payload'] = 'תוכן הדף שהמשתמש צפה בו, כאשר סוכן ה-AI ביקש לקרוא אותו.';
$string['privacy:metadata:tool_aiagent_run:timecreated'] = 'המועד שבו סוכן ה-AI התחיל לעבוד על ההודעה.';
$string['privacy:metadata:tool_aiagent_run:userid'] = 'המשתמש ששלח את ההודעה.';
$string['privacy:metadata:tool_aiagent_usage'] = 'השימוש בטוקנים הנרשם עבור כל בקשת AI, נשמר למעקב אחר השימוש.';
$string['privacy:metadata:tool_aiagent_usage:completiontokens'] = 'מספר הטוקנים ביציאה שנוצלו.';
$string['privacy:metadata:tool_aiagent_usage:model'] = 'מודל ה-AI שטיפל בבקשה.';
$string['privacy:metadata:tool_aiagent_usage:prompttokens'] = 'מספר הטוקנים בכניסה שנוצלו.';
$string['privacy:metadata:tool_aiagent_usage:provider'] = 'ספק ה-AI שטיפל בבקשה.';
$string['privacy:metadata:tool_aiagent_usage:timecreated'] = 'המועד שבו הבקשה נשלחה.';
$string['providers_heading'] = 'כל ספקי ה-AI';
$string['relevancescore'] = 'ציון התאמה';
$string['relevancescore_help'] = 'ציון ההתאמה מציין עד כמה פונקציה של שירות מקוון מתאימה לסוכן AI, בסולם שבין 1 ל-10.

**ציונים גבוהים (7 עד 10)** ניתנים לפונקציות שימושיות בבירור לעוזר AI, כגון יצירת קורסים, רישום משתמשים, חיפוש תכנים או שליפת ציונים.

**ציונים בינוניים (4 עד 6)** אופייניים לפעולות הרסניות או בלתי הפיכות (כגון מחיקת קורסים או ביטול רישום של משתמשים), שהן שימושיות אך מסוכנות יותר, וכן לפונקציות ייעודיות בעלות שימוש מצומצם.

**ציונים נמוכים (1 עד 3)** ניתנים לפונקציות המיועדות לתקשורת פנימית בין הדפדפן לשרת, לפונקציות שאינן דורשות התחברות, לפונקציות מיושנות, או לפונקציות שקיימות להן חלופות טובות יותר.

**הציון 0** משמעו שהפונקציה טרם נבדקה. מצב זה נפוץ בפונקציות של תוספים חיצוניים.

ציון ההתאמה שימש לקביעת ברירת המחדל הראשונית לשאלה אילו פונקציות מופעלות. הציונים הראשוניים לרכיבי הליבה של מוודל נוצרו על ידי AI וייתכן שיידרש לבדוק אותם ידנית.';
$string['removefilenamed'] = 'הסרת הקובץ: {$a}';
$string['renamechat'] = 'שינוי שם השיחה';
$string['renamechat_label'] = 'שם חדש לשיחה';
$string['responses_endpoints'] = 'כתובות מותאמות ל-Responses API';
$string['responses_endpoints_desc'] = 'דורס את כתובת ה-Responses API כאשר התקנה מתארחת או מתווכת של OpenAI או של Azure OpenAI מספקת אותה בכתובת שאינה סטנדרטית. יש להשאיר ריק כדי להשתמש בברירות המחדל המובנות. אין לכך השפעה כאשר סוג ה-API הוא Chat Completions.<br><br>
לדוגמה, https://your-resource.azure.com/api/responses?api-version=preview. כתובת ה-Files API נגזרת מהחלפת /responses ב-/files תוך שמירת מחרוזת השאילתה, כך שההעלאות נשלחות אל https://your-resource.azure.com/api/files?api-version=preview.<br><br>
בשימוש בכמה מופעים של ספקים, יש להזין כתובת אחת בכל שורה. כל ספק משתמש בשורה שהמארח שלה תואם לכתובת ה-API שלו.';
$string['responses_endpoints_invalidline'] = 'כל שורה חייבת להיות כתובת https מלאה שהנתיב שלה מסתיים ב-/responses; כתובת http מתקבלת עבור localhost בלבד. שורה שגויה: {$a}';
$string['resume_desc'] = 'יש לך שיחה מהזמן האחרון. ניתן להמשיך מהמקום שבו הפסקת, או לפתוח שיחה חדשה.';
$string['resume_lastmessage'] = 'ההודעה האחרונה לפני {$a}';
$string['resume_resume'] = 'המשך השיחה האחרונה';
$string['resume_title'] = 'שמחים לראותך שוב';
$string['sendmessage'] = 'שליחה';
$string['settings'] = 'הגדרות סוכן AI';
$string['showallfiles'] = 'הצגת הכל';
$string['showfunctioncalls'] = 'הצגת הקריאות לפונקציות';
$string['skill_add'] = 'הוספת כישור';
$string['skill_edit'] = 'עריכת הכישור';
$string['skill_save_close'] = 'שמירה וסגירה';
$string['skill_save_preview'] = 'שמירה ותצוגה מקדימה';
$string['skill_saved'] = 'הכישור נשמר.';
$string['skilladd_aitip'] = 'במקום למלא את הטופס ידנית, ניתן לבקש מסוכן AI לבנות את הכישור: הוא ימצא את הפונקציות המתאימות וינסח את ההנחיות. <a href="{$a}">פתיחת סוכן AI</a>.';
$string['skillbundled'] = 'מובנה';
$string['skillbundledchangedinfo'] = 'כישור זה הגיע עם התוסף ושונה במערכת זו.';
$string['skillbundledchangedinfo_help'] = 'אפשר לבקש מסוכן ה-AI להשוות את הכישור הזה לגרסה שהגיעה עם התוסף, ולהחזיר את הגרסה הזו אם השינויים כבר אינם רצויים. כישור ששונה מפסיק לקבל עדכונים.';
$string['skillbundledinfo'] = 'הגיע עם התוסף. אפשר להשבית ולערוך אותו, אך לא למחוק אותו או לשנות את שמו.';
$string['skillbundlednodelete'] = 'לא ניתן למחוק כישור שהגיע עם התוסף. במקום זאת, יש להשבית אותו.';
$string['skillbundlednorename'] = 'לא ניתן לשנות את השם המקוצר של כישור שהגיע עם התוסף.';
$string['skillcapabilities_help'] = 'נגזר מהפונקציות העיקריות של הכישור: משתמש יכול להשתמש בכישור רק אם יש לו לפחות אחת מהיכולות הללו באיזשהו הקשר במערכת. הרשימה מאחדת את היכולות הנדרשות של כל הפונקציות העיקריות.';
$string['skillcapabilities_none'] = 'אין. הכישור זמין לכל המשתמשים.';
$string['skillconfigured'] = 'מוגדרות';
$string['skilldeleted'] = 'הכישור "{$a}" נמחק.';
$string['skilldescription'] = 'תיאור';
$string['skilldescription_help'] = 'למה נועד הכישור, כדי שהעוזר יידע מתי לטעון אותו. יש לתאר את המשימה או את התחום שבו מדובר, ולא את השלבים שהוא מבצע. התיאור מופיע גם ברשימת הכישורים (עבור אנשים) וגם בהנחיית המערכת (עבור העוזר).';
$string['skillexists'] = 'כבר קיים כישור עם השם המקוצר "{$a}".';
$string['skillimport_badloadmode'] = 'השדה "loadmode" חייב להכיל אחד מהערכים הבאים: {$a}.';
$string['skillimport_badmasks'] = 'השדות "mainfunctions" ו-"otherfunctions" חייבים להכיל רשימה של מסכות.';
$string['skillimport_badshortname'] = 'לכל כישור נדרש שם מקוצר תקין (אותיות לועזיות, ספרות, מקף ומקף תחתון).';
$string['skillimport_invalidjson'] = 'הקובץ שהועלה אינו קובץ JSON תקין של כישור.';
$string['skillimport_missingfield'] = 'חסר שדה חובה: {$a}.';
$string['skillimported'] = 'הכישור "{$a}" יובא.';
$string['skillinstructions'] = 'הנחיות';
$string['skillinstructions_help'] = 'הנחיות הנטענות לשיחה יחד עם הכישור. יש לכלול רק הנחיות שאינן מובנות מאליהן: העוזר כבר רואה כל פונקציה שנטענה ואת התיאור שלה, ולכן אין לחזור על מה שפונקציה עושה או להזכיר לו להעביר פרמטרים מובנים מאליהם. יש לתעד את סדר הפעולות, את ההכרעות ואת המכשולים שהתיאורים אינם מכסים, ולפתוח שלבים שרלוונטיים רק לעתים במילה "אם...".';
$string['skillloadedevent'] = 'כישור נטען · {$a}';
$string['skillloadmode'] = 'ניתן להשתמש בו';
$string['skillloadmode_dynamic'] = 'רק בטעינה בעת הצורך במהלך השיחה';
$string['skillloadmode_help'] = 'כאשר שיבוץ משתמש בכישור ככישור התחלתי, ההנחיות של הכישור מתווספות להנחיות המערכת כבר מתחילת השיחה. יש להשתמש באפשרות זו כדי לשנות את האופן שבו סוכן AI עונה.

כישור למשימה מסוימת, כגון הגדרת גיליון הציונים או הוספת הגבלות גישה, ניתן לטעון בעת הצורך, כשהמשתמש מבקש משהו שהכישור מכסה.';
$string['skillloadmode_initial'] = 'רק ככישור התחלתי';
$string['skillloadmode_initial_or_dynamic'] = 'גם ככישור התחלתי וגם בטעינה בעת הצורך';
$string['skillmainfunctions'] = 'פונקציות עיקריות';
$string['skillmainfunctions_help'] = 'קבוצה מצומצמת של מסכות הבוחרת את פונקציות היצירה והעדכון המרכזיות של הכישור. היכולות של פונקציות אלה קובעות למי הכישור מוצע: רק למשתמשים שיכולים לגשת לפחות לאחת מהן. כל מסכה מתאימה לשם של פונקציה או לתבנית של רכיב ושם (התו "*" הוא תו כללי, והקידומת "~" מסירה התאמות). יש להשאיר ריק כדי להציע את הכישור לכולם.';
$string['skillmatched'] = 'התאמות ({$a})';
$string['skillmisconfigured'] = 'כרגע אינו זמין לאיש: אף אחת מהפונקציות העיקריות אינה מובילה לפונקציה מופעלת.';
$string['skillname'] = 'שם';
$string['skillname_help'] = 'שם תצוגה קצר וברור לכישור, המופיע ברשימת הכישורים.';
$string['skillnomatch'] = 'אף פונקציה מופעלת אינה מתאימה לתבניות אלה.';
$string['skillnotfound'] = 'לא נמצא כישור: {$a}.';
$string['skillotherfunctions'] = 'פונקציות נוספות';
$string['skillotherfunctions_help'] = 'מסכות עבור שאר הפונקציות שהכישור מביא עמו: פונקציות קריאה, פונקציות עזר או רכיב שלם. אותה תחביר כמו בפונקציות העיקריות, אך אלה אינן משפיעות על השאלה למי הכישור מוצע. יש להשאיר ריק אם הכישור אינו זקוק לפונקציות נוספות.';
$string['skills_intro'] = '<p>כישור מאגד הנחיות ייעודיות למשימה מסוימת יחד עם רשימת הפונקציות המומלצות עבורה. מומלץ להשתמש בכישורים למשימות נפוצות מרובות שלבים שבהן סוכן AI נוטה להתבלבל או אינו מוצא את הפונקציות המתאימות, או למשימות הייחודיות לארגון שלך.</p><p>ניתן להשתמש בכישור בשתי דרכים, לפי הבחירה בהגדרה "ניתן להשתמש בו" שלו. שיבוץ יכול להגדיר אותו ככישור התחלתי, כך שההנחיות שלו חלות כבר מתחילת השיחה. לחלופין, סוכן AI יכול לטעון אותו בעת הצורך: הוא רואה תמיד את השמות והתיאורים של כישורים אלה, וטוען כישור בכל פעם שהוא מחליט שהכישור מתאים לבקשת המשתמש. כישור זמין רק למשתמשים שיכולים לגשת לפחות לאחת מהפונקציות העיקריות שלו. כך למשל, כישור שנבנה עבור מורים לא יהיה גלוי לתלמידים.</p>';
$string['skillshortname'] = 'שם מקוצר';
$string['skillshortname_help'] = 'שם מזהה יציב, ייחודי בכל המערכת: אותיות לועזיות, ספרות, מקף ומקף תחתון בלבד. אפשר לשנות אותו בהמשך, אלא אם הכישור הגיע עם התוסף.';
$string['skilltags'] = 'תגים';
$string['skilltags_help'] = 'התגים משמשים לסינון בלבד ואינם נשלחים למודל.';
$string['skilltoobroad'] = 'מתאים ל-{$a} פונקציות, וייתכן שזה רחב מדי. מומלץ לצמצם את מסכות הפונקציות.';
$string['skillunavailable'] = 'אינו זמין';
$string['skillupdated'] = 'הכישור "{$a}" עודכן.';
$string['stop'] = 'עצירה';
$string['stoppedafter'] = 'נעצר אחרי {$a}';
$string['stoppedbyuser'] = 'עצרת את הסוכן. יש להקליד הודעה חדשה כדי להמשיך.';
$string['stopping'] = 'בעצירה...';
$string['stoppingafterfunction'] = 'ייעצר כשפונקציה זו תסתיים';
$string['suggestedprompt_edit'] = 'עריכת ההודעה לפני השליחה';
$string['suggestedprompt_send'] = 'שליחת ההודעה';
$string['switchview'] = 'החלפת תצוגה';
$string['systeminstruction'] = 'הנחיות מערכת מותאמות';
$string['systeminstruction_desc'] = 'הנחיות מותאמות הנשלחות למודל ה-AI בכל בקשה, ומגדירות את התנהגותו, את סגנונו ואת יכולותיו. יש להשאיר ריק כדי להשתמש בברירת המחדל המובנית (מוצגת להלן). ניתן להשתמש בתווים {siteurl} (כתובת המערכת), {userid} (המזהה של המשתמש הנוכחי) ו-{date} (תאריך היום בתבנית ISO) כתווים ממלאי מקום; הם מוחלפים בעת ההרצה. הנחיות ברירת המחדל:{$a->default}

תמיד מתווסף להנחיות המערכת (בין אם ברירת המחדל ובין אם מותאמות):{$a->context}';
$string['tab_functions'] = 'פונקציות';
$string['tab_placements'] = 'שיבוצים';
$string['tab_skills'] = 'כישורים';
$string['tagarea_tool_aiagent_functions'] = 'תגים לפונקציות של סוכן AI';
$string['tagarea_tool_aiagent_skill'] = 'תגים לכישורים של סוכן AI';
$string['task_cleanup_chats'] = 'מחיקת שיחות ישנות של סוכן AI';
$string['task_purge_provider_data'] = 'מחיקת נתוני שיחות של סוכן AI אצל ספק ה-AI';
$string['task_revalidate_license'] = 'אימות מחדש של רישיון סוכן AI';
$string['thinking'] = 'סוכן AI חושב...';
$string['timecreated'] = 'מועד יצירה';
$string['timelastactivity'] = 'פעילות אחרונה';
$string['timemodified'] = 'עדכון אחרון';
$string['tryagain'] = 'ניסיון נוסף';
$string['unavailable_envcheck'] = 'פונקציה זו אינה זמינה כי הגדרת מערכת שהיא תלויה בה אינה מופעלת: {$a}.';
$string['unavailable_plugindisabled'] = 'פונקציה זו אינה זמינה כי התוסף {$a} מושבת במערכת זו.';
$string['unavailable_pluginnotinstalled'] = 'לא ניתן להשתמש בפונקציה זו כי התוסף {$a} אינו מותקן במערכת זו.';
$string['usage_completiontokens'] = 'טוקנים ביציאה';
$string['usage_model'] = 'מודל';
$string['usage_prompttokens'] = 'טוקנים בכניסה';
$string['usage_provider'] = 'ספק';
$string['usage_totaltokens'] = 'סך הטוקנים';
$string['viewdetails'] = 'הצגת פרטים';
$string['viewtype_fullscreen'] = 'מסך מלא';
$string['viewtype_overlay'] = 'חלון צף';
$string['viewtype_sidebar'] = 'סרגל צד';
$string['viewtypes'] = 'תצוגות זמינות';
$string['viewtypes_alldisabled_warning'] = 'סוכן AI אינו זמין לאיש מכיוון שכל התצוגות מושבתות ב<a href="{$a}">הגדרות</a>.';
$string['viewtypes_desc'] = 'התצוגות שהמשתמשים יכולים לפתוח: חלון צף קטן בפינת העמוד, סרגל צד לצד תוכן העמוד, ועמוד השיחה במסך מלא. ביטול הסימון של כולן משבית זמנית את סוכן AI עבור כל המשתמשים.';
$string['viewtypes_unavailable'] = 'סוכן AI אינו זמין כרגע.';
$string['welcome_skillsmore'] = '+{$a} נוספים';
$string['welcome_tryasking'] = 'אפשר לשאול, למשל';
$string['welcomedesc'] = 'ניתן לשאול את סוכן AI על המערכת, על הקורסים, על המשתמשים או על התכנים שלך. הוא יכול לקרוא, ובאישורך גם לבצע שינויים.';
$string['welcometitle'] = 'שלום, {$a}';
$string['workedfor'] = 'זמן עבודה: {$a}';
$string['working'] = 'בעבודה';
$string['workingfor'] = 'עובד כבר {$a}';
