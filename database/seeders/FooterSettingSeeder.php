<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('mysql_settings')->table('footers')->insert([
            "created_at" => new \DateTime ,
            "updated_at" => new \DateTime ,
            "upLabel" => "برگشت به بالا",
            "wigetLabel_1" => "راهنمای خرید از دیجی‌استور",
            "wigetLabel_2" => "خدمات مشتریان",
            "wigetLabel_3" => "با دیجی استور",
            "rssLabel" => "از تخفیف‌ها و جدیدترین‌های دیجی‌استور باخبر شوید:",
            "socialLabel" => "دیجی‌استور را در شبکه‌های اجتماعی دنبال کنید:",
            "supportLabel" => "هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم",
            "phoneLabel" => "شماره تماس",
            "addressLabel" => "آدرس",
            "emailLabel" => "آدرس ایمیل",
            "aboutheadLabel" => "فروشگاه اینترنتی دیجی‌استور بررسی، انتخاب و خرید آنلاین",
            "aboutbodyLabel" => "دیجی‌استور به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌استور با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.",
            "copyright" => "استفاده از مطالب فروشگاه اینترنتی دیجی‌استور فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌استور) می‌باشد.",
            "Text_social_1" => "fa fa-instagram",
            "Text_social_2" => "fa fa-twitter",
            "Text_social_3" => "fa fa-facebook",
            "Text_social_4" => "fa fa-linkedin-square",
            "Link_social_1" => "#",
            "Link_social_2" => "#",
            "Link_social_3" => "#",
            "Link_social_4" => "#",
            "Text_phone" => "09399654560",
            "Text_email" => "test@gmail.com",
            "Text_address" => "مرکزی , اراک",
        ]);
    }
}
