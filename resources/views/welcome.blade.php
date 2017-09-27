<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css" />
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>
        <div class="row blog-header">
            <div class="col-sm-12 hidden-xs header-title">
                <h1 ><span style="color:#F44336;">M1racle's</span> Blog</h1>
                <h4>php初心者</h4>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs-inline" href="/"><span style="color:#F44336;">M1racle's</span> Blog</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</a></li>
                        <li><a href="#">关于我</a></li>
                        <li><a href="#">我的书单</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <article class="articles">
                        <h3><a>文章标题</a></h3>
                        <div class="article-info">
                            发布于: 2017-09-27&nbsp;&nbsp;&nbsp;
                            分类: <a>php</a>&nbsp;&nbsp;&nbsp;
                            标签: <a>标签1</a> <a>标签2</a> <a>标签3</a>
                        </div>
                        <div class="text-muted article-content">
                            <p><img src="https://odhlp7vrw.qnssl.com/o_1bqfo30q09k41oqe1cbu1r4c18907.jpeg" alt="图片alt" /></p>

                            <p>最近在公司比较忙，以前有空闲的时候没有发现的东西，反而再忙的时候会加深体会。所以就动了心思准备写一个 php 细节补全的系列，不知道能写多少，慢慢来吧，这个就是第一篇了。</p>

                            <p>其实，平时我个人觉得再使用<code>引用</code>的时候机会并没有那么多，但是呢，<code>引用</code>这个东西是绝对不可以忽略的。</p>

                            <p>引用平时就我个人来说使用的场景有如下几个：</p>

                            <ul>
                                <li>有批量处理数组数据的时候会使用引用，这样再方法里面就不用在单独返回了，比较省事</li>
                                <li>再有递归调用的时候也会使用，但是使用的时候需要注意小心踩坑</li>
                            </ul>

                            <p>剩下的貌似就不是很多了，但是这两天看过几个面试题，让我平时没注意的一些东西或者说没有深入考虑的东西，有了更深入的理解。</p>

                            <p>先看下面这个题：</p>
                        </div>
                        <div class="read-more">
                            <a type="button">
                                继续阅读
                            </a>
                        </div>
                    </article>
                    <article class="articles">
                        <h3><a>文章标题</a></h3>
                        <div class="article-info">
                            发布于: 2017-09-27&nbsp;&nbsp;&nbsp;
                            分类: <a>php</a>&nbsp;&nbsp;&nbsp;
                            标签: <a>标签1</a> <a>标签2</a> <a>标签3</a>
                        </div>
                        <div class="text-muted article-content">
                            <p><img src="https://odhlp7vrw.qnssl.com/o_1bpblg8cm26n1gq9rrv1igt1sqj7.jpeg" alt="图片alt" /></p>

                            <p>最近几个月经历了不少事情啊，生病了吃药吃了一个多月，各种抽血，胃镜什么也都做了，万幸没啥大事，修养修养也就好了，不过重要的事情是减肥。然后回哈尔滨以后房子也买了，瞬间背上了百万的债，慢慢还把，努力工作早日还清。婚期也定下来了，一切都朝着好的方向进行着。</p>

                            <p>媳妇公司还要去天津，我俩也纠结了好一阵，最终还是决定留在北京。然后经历了一次半正式的面试吧。对方开了一个比现在要高的工资，但是呢，我对于目前的公司还是很满意的，而且我也很喜欢这个产品，所以哪怕高一些，也没有什么更多的好处，而且也好要去天津，所以最后还是坚定了留在了北京。</p>

                            <p>最后，感觉最近有些浮躁了，看书效率也不高了，所以还是要沉下心来学习一些东西。所以最近还是要看一些书的，php 相关尤其是反射，正则，redis 就是这些吧。</p>

                            <p>好了，一切都朝着好的方向发展着，加油吧。会更好的。</p>
                        </div>
                        <div class="read-more">
                            <a type="button">
                                继续阅读
                            </a>
                        </div>
                    </article>
                    <article class="articles">
                        <h3><a>文章标题</a></h3>
                        <div class="article-info">
                            发布于: 2017-09-27&nbsp;&nbsp;&nbsp;
                            分类: <a>php</a>&nbsp;&nbsp;&nbsp;
                            标签: <a>标签1</a> <a>标签2</a> <a>标签3</a>
                        </div>
                        <div class="text-muted article-content">
                            内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域
                        </div>
                        <div class="read-more">
                            <a type="button">
                                继续阅读
                            </a>
                        </div>
                    </article>
                    <article class="articles">
                        <h3><a>文章标题</a></h3>
                        <div class="article-info">
                            发布于: 2017-09-27&nbsp;&nbsp;&nbsp;
                            分类: <a>php</a>&nbsp;&nbsp;&nbsp;
                            标签: <a>标签1</a> <a>标签2</a> <a>标签3</a>
                        </div>
                        <div class="text-muted article-content">
                            内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域内容区域
                        </div>
                        <div class="read-more">
                            <a type="button">
                                继续阅读
                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs">
                    <section class="side-bar">
                        <div class="side-bar-header h4">
                            最新文章
                        </div>
                        <div class="side-bar-body">
                            <ul>
                                <li><a>文章标题文章标题文章标题文章标题文章标题文章标题文章标题</a></li>
                                <li><a>文章标题</a></li>
                                <li><a>文章标题1</a></li>
                                <li><a>文章标题文章标题文章标题文章标题文章标题1</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="side-bar">
                        <div class="side-bar-header h4">
                            分类
                        </div>
                        <div class="side-bar-body">
                            <ul>
                                <li><a>分类1(123)</a></li>
                                <li><a>分类2(123)</a></li>
                                <li><a>分类3(123)</a></li>
                                <li><a>分类4(123)</a></li>
                            </ul>
                        </div>
                    </section>
                    <section class="side-bar">
                        <div class="side-bar-header h4">
                            标签
                        </div>
                        <div class="side-bar-body">
                            <a>标签1</a> <a>标签2</a> <a>标签3</a> <a>标签2</a> <a>标签3</a> <a>标签4</a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer class="blog-footer">
            <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            {{--<p>--}}
                {{--<a href="#">回到</a>--}}
            {{--</p>--}}
        </footer>
    </body>
</html>
