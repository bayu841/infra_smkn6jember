<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'ip_address',
        'user_agent',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Boot method untuk auto-sanitization
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Sanitize data sebelum menyimpan
            $model->name = self::sanitizeName($model->name);
            $model->email = self::sanitizeEmail($model->email);
            $model->phone = self::sanitizePhone($model->phone);
            $model->message = self::sanitizeMessage($model->message);
        });
    }

    /**
     * Sanitize nama
     */
    private static function sanitizeName($name)
    {
        return htmlspecialchars(trim($name), ENT_QUOTES, 'UTF-8');
    }

    /**
     * Sanitize email
     */
    private static function sanitizeEmail($email)
    {
        return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    }

    /**
     * Sanitize nomor telepon
     */
    private static function sanitizePhone($phone)
    {
        // Hanya izinkan angka, plus, spasi, dash, dan kurung
        return preg_replace('/[^0-9+\-\s()]/', '', $phone);
    }

    /**
     * Sanitize pesan
     */
    private static function sanitizeMessage($message)
    {
        return htmlspecialchars(trim($message), ENT_QUOTES, 'UTF-8');
    }

    /**
     * Scope untuk pesan yang belum dibaca
     */
    public function scopeUnread($query)
    {
        return $query->where('status', 'unread');
    }

    /**
     * Scope untuk pesan yang sudah dibaca
     */
    public function scopeRead($query)
    {
        return $query->where('status', 'read');
    }

    /**
     * Scope untuk pesan spam
     */
    public function scopeSpam($query)
    {
        return $query->where('status', 'spam');
    }

    /**
     * Scope untuk pesan dalam rentang waktu
     */
    public function scopeRecent($query, $days = 7)
    {
        return $query->where('created_at', '>=', now()->subDays($days));
    }

    /**
     * Cek apakah pesan dari IP yang sama dalam waktu tertentu
     */
    public static function getRecentMessagesCount($ipAddress, $minutes = 10)
    {
        return self::where('ip_address', $ipAddress)
            ->where('created_at', '>=', now()->subMinutes($minutes))
            ->count();
    }

    /**
     * Cek duplikat pesan
     */
    public static function isDuplicate($email, $message, $minutes = 10)
    {
        return self::where('email', $email)
            ->where('message', $message)
            ->where('created_at', '>=', now()->subMinutes($minutes))
            ->exists();
    }

    /**
     * Accessor untuk nama - memastikan output aman
     */
    public function getNameAttribute($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Accessor untuk email - memastikan output aman
     */
    public function getEmailAttribute($value)
    {
        return filter_var($value, FILTER_SANITIZE_EMAIL);
    }

    /**
     * Accessor untuk pesan - memastikan output aman
     */
    public function getMessageAttribute($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Mark message as read
     */
    public function markAsRead()
    {
        $this->update(['status' => 'read']);
        return $this;
    }

    /**
     * Mark message as spam
     */
    public function markAsSpam()
    {
        $this->update(['status' => 'spam']);
        return $this;
    }

    /**
     * Mark message as replied
     */
    public function markAsReplied()
    {
        $this->update(['status' => 'replied']);
        return $this;
    }
}
