<?php
ob_start();
error_reporting(0);
error_reporting(1);
$API_KEY = "7028187060:AAEi4WiA-C3iQalccRy6R3DvJHXUGE629Ak";//توكنك#
define("API_KEY",$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$ali = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ali";
$ali = file_get_contents($url);
return json_decode($ali);}
//function//
print ("تم تنصيب المصنع بنجاح");
$update = json_decode(file_get_contents('php://input'));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$message = $update->message;
$admin = 5099564264; // ايديك
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$fn = $message->from->first_name;
$user_id = $message->from->id;
#---------[ @Q_8_T ]--------#
$T4TTTT = 5099564264; //ايديك
$MOHD = file_get_contents("MOHD.txt");
$MOHD0 = file_get_contents("MOHD0.txt");
$MOHD1= file_get_contents("MOHD1.txt");
$MOHD5 = file_get_contents("MOHD2.txt");
$MOHD6 = file_get_contents("MOHD3.txt");
$MOHD20 = json_decode(file_get_contents('php://input'));
$MOHD18 = $update->message;
$MOHD13 = $MOHD18->chat->id;
$MOHD17 = $MOHD18->text;
$MOHD19 = $MOHD20->callback_query->data;
$MOHD12 = $MOHD20->callback_query->message->chat->id;
$MOHD14 =  $MOHD20->callback_query->message->message_id;
$MOHD15 = $MOHD18->from->first_name;
$MOHD16 = $MOHD18->from->username;
$MOHD11 = $MOHD18->from->id;
$MOHD2 = explode("\n",file_get_contents("MOHD4.txt"));
$MOHD3 = count($MOHD2)-1;
if ($MOHD18 && !in_array($MOHD11, $MOHD2)) {
    file_put_contents("MOHD4.txt", $MOHD11."\n",FILE_APPEND);
  }
$MOHD9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MOHD0&user_id=".$MOHD11);
$MOHD10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MOHD1&user_id=".$MOHD11);
if($MOHD18 && (strpos($MOHD9,'"status":"left"') or strpos($MOHD9,'"Bad Request: USER_ID_INVALID"') or strpos($MOHD9,'"status":"kicked"') or strpos($MOHD10,'"status":"left"') or strpos($MOHD10,'"Bad Request: USER_ID_INVALID"') or strpos($MOHD10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MOHD13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MOHD0.'
'.$MOHD1,
]);return false;}
if($MOHD17 == "/start" and $MOHD11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$MOHD13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MOHD"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MOHD0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MOHD"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MOHD2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MOHD4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MOHD"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MOHD5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MOHD6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MOHD7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MOHD"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MOHD9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MOHD10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MOHD"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MOHD11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MOHD12"]],
   ] 
   ])
]);
}
if($MOHD19 == "MOHD" ){
bot('EditMessageText',[
'chat_id'=>$MOHD12,
'message_id'=>$MOHD14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MOHD"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MOHD0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MOHD"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MOHD2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MOHD4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MOHD"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MOHD5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MOHD6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MOHD7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MOHD"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MOHD9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MOHD10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MOHD"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MOHD11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MOHD12"]],
   ] 
   ])
]);
unlink("MOHD.txt");
}
if($MOHD19 == "MOHD0"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@zrrrrrrrrrz',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD.txt","MOHD0");
}
if($MOHD17 and $MOHD == "MOHD0" and $MOHD11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$MOHD13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD0.txt","$MOHD17");
unlink("MOHD.txt");
}
if($MOHD19 == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MOHD'],
['text'=>'• نعم ، ✅','callback_data'=>'MOHD1'],
]    
]])
]);    
}
if($MOHD19 == "MOHD1"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
unlink("MOHD0.txt");
}
if($MOHD19 == "MOHD2"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@cz_n9',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD.txt","MOHD1");
}
if($MOHD17 and $MOHD == "MOHD1" and $MOHD11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$MOHD13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD1.txt","$MOHD17");
unlink("MOHD.txt");
}
if($MOHD19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MOHD'],
['text'=>'• نعم ، ✅','callback_data'=>'MOHD3'],
]    
]])
]);    
}
if($MOHD19 == "MOHD3"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
unlink("MOHD1.txt");
}
if($MOHD19 == "MOHD4"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MOHD0 📢 
- القناة الثانية ،  $MOHD1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
}
if($MOHD19 == "MOHD5"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MOHD3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD.txt","MOHD2");
}
if($MOHD18 and $MOHD == "MOHD2" and $MOHD11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$MOHD13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
for($i=0;$i<count($MOHD2); $i++){
bot('forwardMessage', [
'chat_id'=>$MOHD2[$i],
'from_chat_id'=>$MOHD11,
'message_id'=>$MOHD18->message_id
]);
unlink("MOHD.txt");
}
}
if($MOHD19 == "MOHD6"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MOHD3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD.txt","MOHD3");
}
if($MOHD17 and $MOHD == "MOHD3" and $MOHD11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$MOHD13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
for($i=0;$i<count($MOHD2); $i++){
bot('sendMessage', [
'chat_id'=>$MOHD2[$i],
'text'=>$MOHD17
]);
unlink("MOHD.txt");
}
}
if($MOHD19 == "MOHD7"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>"- عدد مشتركين البوت  [ $MOHD3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
}
if($MOHD19 == "MOHD9"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD2.txt","MOHD");
}
if($MOHD17 == "/start" and $MOHD5 == "MOHD" and $MOHD11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MOHD15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MOHD16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MOHD11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MOHD3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($MOHD19 == "MOHD10"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
unlink("MOHD2.txt");
}
if($MOHD19 == "MOHD11"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
file_put_contents("MOHD3.txt","MOHD");
}
if($MOHD18 and $MOHD6 == "MOHD" and $MOHD11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$MOHD11,
'message_id'=>$MOHD18->message_id
]);
}
if($MOHD18 and $MOHD6 == "MOHD" and $MOHD11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$MOHD18->reply_to_message->forward_from->id,
    'text'=>$MOHD17,
    ]);
}
if($MOHD19 == "MOHD12"){
bot('EditMessageText',[
    'chat_id'=>$MOHD12,
    'message_id'=>$MOHD14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MOHD"]],
]])
]);
unlink("MOHD.txt");
unlink("MOHD3.txt");
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$name2 = $update->callback_query->from->first_name;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $message->from->id;
$from_id2 = $update->callback_query->message->from->id;
$username = $update->message->from->username;
$filename = "ali.txt";
$filename = "ali.txt";
if (!file_exists($filename)) {
$file = fopen($filename, 'w');
fwrite($file, "ali");
fclose($file);
}

if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*مرحباً بك في صانع بوتات الحماية*
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"قائمة بوتاتي 🗑","callback_data"=>"delete"],["text"=>"انشاء بوت ⚙","callback_data"=>"make"]], 
]])
]);
}
if($data =="home"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('SendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"
*مرحباً بك في صانع بوتات الحماية*
", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[ 
[["text"=>"قائمة بوتاتي 🗑","callback_data"=>"delete"],["text"=>"انشاء بوت ⚙","callback_data"=>"make"]], 
]])
]);
unlink("do/$chat_id2.txt");
}

if($data == "make" and !file_exists("bots/$chat_id2/up.php")){
mkdir("do");
file_put_contents("do/$chat_id2.txt","true");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"لإنشاء بوت جديد ، يجب اتباع هاتين الخطوتين:

1. اذهب الى @BotFather وإنشئ بوت جديد.
2. ستحصل على توكن مميز  (على سبيل المثال ، 12345: 6789ABCDEF) - فقط أرسله أو انسخه الى هنا.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع","callback_data"=>"home"]],
]])
]);
}
$status_bot = json_decode(file_get_contents("https://api.telegram.org/bot".$text."/getMe"));
$do = file_get_contents("do/$chat_id.txt");
$file = file_get_contents("damkom.txt");
$host2 = $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
$host1 = str_replace("mark.php","",$host2);
$host = $host1."bots/$chat_id/up.php";
if($text && $do == "true" && $status_bot->ok == true){
mkdir("bots");
mkdir("bots/$chat_id");
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$host."");
$file2 = str_replace("TOKEN-ID","$text",$file);
$file3 = str_replace("USER-NAME","$username",$file2);
$file4 = str_replace("ADMIN-ID","$chat_id",$file3);
file_put_contents("bots/$chat_id/up.php",$file4);
unlink("do/$chat_id.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم صنع البوت بنجاح",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"دخول الى البوت",'url'=>"t.me/".$status_bot->result->username]],
[["text"=>"رجوع","callback_data"=>"home"]],
]])
]);
}elseif($text && $do == "true" && $status_bot->ok != true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"♕ ⁞ عذرا عزيزي التوكن خطا ❌",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"رجوع","callback_data"=>"home"]],
]])
]);
}
$ggett = explode("\n",file_get_contents("bots/$chat_id2/up.php"));
$hep = $ggett[7];
$mattch = str_replace('define("API_KEY","',"",$hep);
$mattch2 = str_replace('");',"",$mattch);
$get_bot = json_decode(file_get_contents("https://api.telegram.org/bot".$mattch2."/getme"));
$get_bot1 = $get_bot->result->first_name;
$get_bot2 = $get_bot->result->username;
if($data == "delete" && file_exists("bots/$chat_id2/up.php")){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"
♕ ⁞ هل انته متاكد من حذف البوت 🌼
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"$get_bot1",'url'=>"t.me/$get_bot2"],["text"=>"♕ ⁞ حذف البوت 🌱","callback_data"=>"delbot"]],
[["text"=>"رجوع","callback_data"=>"home"]],
]])
]);
}
if($data == "delbot"){
unlink("bots/$chat_id2/up.php");
rmdir("bots/$chat_id2");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"تم حذف البوت بنجاح",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"♕ ⁞ رجوع 🧡","callback_data"=>"home"]],
]])
]);
}