<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $password
 * @property string $email
 * @property bool $gender
 * @property Carbon|null $birthday
 * @property string|null $avatar
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $district
 * @property string|null $commune
 * @property Carbon|null $email_verified_at
 * @property bool $status
 * @property string|null $remember_token
 * @property string|null $active_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Album[] $albums
 * @property Collection|Comment[] $comments
 * @property Collection|CommentsProfile[] $comments_profiles
 * @property Collection|Follow[] $follows
 * @property Collection|HistoriesPosition[] $histories_positions
 * @property Collection|Like[] $likes
 * @property Collection|LikesComment[] $likes_comments
 * @property Collection|LikesCommentsProfile[] $likes_comments_profiles
 * @property Collection|Picture[] $pictures
 * @property Collection|Product[] $products
 * @property Collection|RecentView[] $recent_views
 * @property Collection|ReportsComment[] $reports_comments
 * @property Collection|ReportsCommentsProfile[] $reports_comments_profiles
 * @property Collection|ReportsPicture[] $reports_pictures
 * @property Collection|ReportsProduct[] $reports_products
 * @property Collection|Review[] $reviews
 * @property Collection|SearchHistory[] $search_histories
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    protected $casts = [
        'gender' => 'bool',
        'birthday' => 'datetime',
        'email_verified_at' => 'datetime',
        'status' => 'bool'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'password',
        'email',
        'gender',
        'birthday',
        'avatar',
        'phone',
        'address',
        'city',
        'district',
        'commune',
        'email_verified_at',
        'status',
        'remember_token',
        'active_code'
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function comments_profiles()
    {
        return $this->hasMany(CommentsProfile::class);
    }

    public function follows()
    {
        return $this->hasMany(Follow::class, 'to_user_id');
    }

    public function histories_positions()
    {
        return $this->hasMany(HistoriesPosition::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likes_comments()
    {
        return $this->hasMany(LikesComment::class);
    }

    public function likes_comments_profiles()
    {
        return $this->hasMany(LikesCommentsProfile::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function recent_views()
    {
        return $this->hasMany(RecentView::class);
    }

    public function reports_comments()
    {
        return $this->hasMany(ReportsComment::class);
    }

    public function reports_comments_profiles()
    {
        return $this->hasMany(ReportsCommentsProfile::class);
    }

    public function reports_pictures()
    {
        return $this->hasMany(ReportsPicture::class);
    }

    public function reports_products()
    {
        return $this->hasMany(ReportsProduct::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function search_histories()
    {
        return $this->hasMany(SearchHistory::class);
    }
}
