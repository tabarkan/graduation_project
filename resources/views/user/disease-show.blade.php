@include('user.layouts')
@yield('header')

<style>
 body{
    background-color: #f4f7f6;
    margin-top:20px;
}
.card {
    background: #fff;
    transition: .5s;
    border: 0;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
.card .body {
    color: #444;
    padding: 20px;
    font-weight: 400;
}
.card .header {
    color: #444;
    padding: 20px;
    position: relative;
    box-shadow: none;
}
.single_post {
    -webkit-transition: all .4s ease;
    transition: all .4s ease
}

.single_post .body {
    padding: 30px
}

.single_post .img-post {
    position: relative;
    overflow: hidden;
    max-height: 500px;
    margin-bottom: 30px
}

.single_post .img-post>img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1;
    -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
    transition: transform .4s ease, opacity .4s ease;
    max-width: 100%;
    filter: none;
    -webkit-filter: grayscale(0);
    -webkit-transform: scale(1.01)
}

.single_post .img-post:hover img {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
    opacity: .7;
    filter: gray;
    -webkit-filter: grayscale(1);
    -webkit-transition: all .8s ease-in-out
}

.single_post .img-post:hover .social_share {
    display: block
}

.single_post .footer {
    padding: 0 30px 30px 30px
}

.single_post .footer .actions {
    display: inline-block
}

.single_post .footer .stats {
    cursor: default;
    list-style: none;
    padding: 0;
    display: inline-block;
    float: right;
    margin: 0;
    line-height: 35px
}

.single_post .footer .stats li {
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    display: inline-block;
    font-weight: 400;
    letter-spacing: 0.25em;
    line-height: 1;
    margin: 0 0 0 2em;
    padding: 0 0 0 2em;
    text-transform: uppercase;
    font-size: 13px
}

.single_post .footer .stats li a {
    color: #777
}

.single_post .footer .stats li:first-child {
    border-left: 0;
    margin-left: 0;
    padding-left: 0
}

.single_post h3 {
    font-size: 20px;
    text-transform: uppercase
}

.single_post h3 a {
    color: #242424;
    text-decoration: none
}

.single_post p {
    font-size: 16px;
    line-height: 26px;
    font-weight: 300;
    margin: 0
}

.single_post .blockquote p {
    margin-top: 0 !important
}

.single_post .meta {
    list-style: none;
    padding: 0;
    margin: 0
}

.single_post .meta li {
    display: inline-block;
    margin-right: 15px
}

.single_post .meta li a {
    font-style: italic;
    color: #959595;
    text-decoration: none;
    font-size: 12px
}

.single_post .meta li a i {
    margin-right: 6px;
    font-size: 12px
}

.single_post2 {
    overflow: hidden
}

.single_post2 .content {
    margin-top: 15px;
    margin-bottom: 15px;
    padding-left: 80px;
    position: relative
}

.single_post2 .content .actions_sidebar {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 60px
}

.single_post2 .content .actions_sidebar a {
    display: inline-block;
    width: 100%;
    height: 60px;
    line-height: 60px;
    margin-right: 0;
    text-align: center;
    border-right: 1px solid #e4eaec
}

.single_post2 .content .title {
    font-weight: 100
}

.single_post2 .content .text {
    font-size: 15px
}


.comment-reply li {
    margin-bottom: 15px
}

.comment-reply li:last-child {
    margin-bottom: none
}

.comment-reply li h5 {
    font-size: 18px
}

.comment-reply li p {
    margin-bottom: 0px;
    font-size: 15px;
    color: #777
}

.comment-reply .list-inline li {
    display: inline-block;
    margin: 0;
    padding-right: 20px
}

.comment-reply .list-inline li a {
    font-size: 13px
}

@media (max-width: 640px) {
    .blog-page .left-box .single-comment-box>ul>li {
        padding: 25px 0
    }
    .blog-page .left-box .single-comment-box ul li .icon-box {
        display: inline-block
    }
    .blog-page .left-box .single-comment-box ul li .text-box {
        display: block;
        padding-left: 0;
        margin-top: 10px
    }
    .blog-page .single_post .footer .stats {
        float: none;
        margin-top: 10px
    }
    .blog-page .single_post .body,
    .blog-page .single_post .footer {
        padding: 30px
    }
}
</style>


<div id="main-content" class="blog-page  m-4">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 left-box">
                <div class="card single_post">
                    <div class="body text-right">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="{{asset('diseasesImages/'.$disease->image_path)}}" alt="First slide">
                        </div>
                                 
                    <div>
                        
                    </div>
                        @if ($isLiked == false)
                        <form action="{{route('disease.like', $disease->id)}}" method="POST">
                            @csrf
                            <button class="border-0 outline-0 bg-white" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill='#808080'><path d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/></svg>
                            </button>                        
                        </form>
                        @else
                        <form action="{{route('disease.like.delete', $disease->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="border-0 outline-0 bg-white" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill='#00D9A5'><path d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/></svg>
                            </button>                       
                        </form>
                         @endif
                         <p>{{$likes->count()}}</p>
                        <h3> {{$disease->name}} : اسم المرض</h3>
                        <p>{{$disease->type}} : النوع</p>
                        <p>{{$disease->treatment}} : العلاج</p>
                        <p>{{$disease->Protection from disease}} : الحماية من المرض </p>
                       
                    </div>                        
                </div>
                <div class="card">
                        <div class="header">
                            <h5>التعليقات</h5>
                        </div>
                        <div class="body">
                            <ul class="comment-reply list-unstyled">
                                @foreach ($comments as $comment)
                                    <li class="row clearfix">
                                        <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="{{asset('images/'.$comment->user->image_path)}}" alt="Awesome Image"></div>
                                        <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                            <h5 class="m-b-0">{{$comment->user->first_name}} {{$comment->user->last_name}}</h5>
                                            <p>{{$comment->comment}}</p>
                                            <ul class="list-inline">
                                                <li><a href="javascript:void(0);">{{$comment->created_at}}</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                               
                       
                            </ul>                                        
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="comment-form">
                                <form class="row clearfix" method="POST" action="{{route('disease.comment' , $disease->id)}}">
                                    <div class="col-sm-12">
                                            @csrf
                                            <textarea name="comment" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                            <button type="submit" class="btn btn-block btn-primary">اضافة تعليق</button>
                                    </div>                                
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>


@yield('footer')