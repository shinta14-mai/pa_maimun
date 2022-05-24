<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $table = 'infos';

    public function getPreviewUrlAttribute()
    {
        $urls = collect([
            'image' => [
                'mimes' => [
                    'image/gif',
                    'image/avif',
                    'image/apng',
                    'image/png',
                    'image/svg+xml',
                    'image/webp',
                    'image/jpeg'
                ],
                'preview_url' => url("storage/media/{$this->created_at->format('Y/m/d')}/{$this->id}/{$this->file_name}")
            ],
            'document' => [
                'mimes' => [
                    'application/docx',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'application/pdf'
                ],
                'preview_url' => asset('images/google-docs.png'),
            ],
            'archive' => [
                'mimes' => [
                    'application/zip',
                    'application/x-7z-compressed',
                    'application/gzip',
                    'application/vnd.rar',
                ],
                'preview_url' => asset('images/file-type-archive.svg'),
            ],
        ]);

        $fileType = $urls->first(function ($item) {
            return in_array($this->mime_type, $item['mimes']);
        });

        return $fileType['preview_url'] ?? asset("images/file.png");
    }
}
