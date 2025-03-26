import requests

# ضع هنا API Token الذي حصلت عليه من BotFather
TOKEN = '7510053793:AAGxi3Opwk_iaMR32xLxte8g81LfEm8pgSw'

# ضع هنا chat_id الخاص بك
YOUR_CHAT_ID = '149430046'  # استبدل هذا بالـ chat_id الخاص بك (كما حصلت عليه)

# URL لإرسال الرسالة عبر Telegram API
url = f'https://api.telegram.org/bot{TOKEN}/sendMessage'

# دالة لإرسال رسالة إلى `YOUR_CHAT_ID` عندما يتلقى البوت رسالة جديدة
def send_message_to_admin(message):
    data = {
        'chat_id': YOUR_CHAT_ID,
        'text': message
    }
    response = requests.post(url, data=data)
    if response.status_code == 200:
        print("تم إرسال الإشعار بنجاح!")
    else:
        print("حدث خطأ أثناء إرسال الإشعار.")

# محاكاة تلقي الرسالة من المستخدم
def simulate_received_message(user_message):
    # إرسال إشعار عندما تصل رسالة جديدة
    send_message_to_admin(f"تلقيت رسالة جديدة: {user_message}")

# اختبار الرسالة
simulate_received_message("مرحبًا! أحتاج إلى المساعدة في التسجيل.")
