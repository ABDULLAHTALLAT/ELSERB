<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationMail;
use Illuminate\Support\Facades\Http;

class QuotationController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'services' => 'required|array', // التأكد من أن المدخلات هي مصفوفة
            'message' => 'required|string',
        ]);
        dd('abdullah');
        // حفظ البيانات في قاعدة البيانات
        $quotation = Quotation::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'service_id' => $request->services[0], // في حالة كانت الخدمات مصفوفة، نأخذ أول خدمة
            'message' => $request->message,
        ]);

        // 1️⃣ إرسال البريد الإلكتروني
        Mail::to('tallata363@gmail.com')->send(new QuotationMail($quotation));

        // 2️⃣ إرسال رسالة واتساب عبر Twilio أو WhatsApp API
        $this->sendWhatsAppMessage($quotation);

        return redirect()->back()->with('success', 'Your quotation request has been sent successfully via Email and WhatsApp!');
    }

    private function sendWhatsAppMessage($quotation)
    {
        $whatsappNumber = 'whatsapp:+201200829644'; // رقم الواتساب المستلم بصيغة دولية
        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_WHATSAPP_NUMBER'); // رقم واتساب Twilio

        $message = "New Quotation Request:\n"
                 . "Name: {$quotation->full_name}\n"
                 . "Email: {$quotation->email}\n"
                 . "Phone: {$quotation->phone}\n"
                 . "Company: {$quotation->company}\n"
                 . "Services: {$quotation->service->name}\n" // إذا كانت الخدمة مرتبطة بشكل صحيح
                 . "Message: {$quotation->message}";

        // إرسال الطلب عبر API Twilio
        $response = Http::withBasicAuth($twilioSid, $twilioToken)->post("https://api.twilio.com/2010-04-01/Accounts/{$twilioSid}/Messages.json", [
            'From' => "whatsapp:{$twilioNumber}",
            'To' => $whatsappNumber,
            'Body' => $message,
        ]);

        // إذا فشل الطلب، قم بتخزين الرسالة في session
        if ($response->failed()) {
            session()->flash('error', 'WhatsApp message failed: ' . $response->body());
        }
    }
}
