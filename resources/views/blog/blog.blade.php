@extends('layoutsweb.default')

@section('content')
<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Blogs</h1>
                <span class="greennature-page-caption">Compressed Biogas (CBG)</span>
            </div>
        </div>
<div class="content-wrapper">
    <div class="greennature-content">

        <!-- Above Sidebar Section-->

        <!-- Sidebar With Content Section-->
        <div class="with-sidebar-wrapper">
            <div class="with-sidebar-container container">
                <div class="with-sidebar-left eight columns">
                    <div class="with-sidebar-content twelve columns">
                        <section id="content-section-1">
                            <div class="section-container container">
                                <div class="blog-item-wrapper">
                                    <div class="blog-item-holder">
                                    @foreach ($datas as $data )
                                    <div class="greennature-item greennature-blog-full">
                                            <div class="greennature-ux greennature-blog-full-ux">
                                                <article id="post-2211"
                                                    class="post-2211 post type-post status-publish format-gallery has-post-thumbnail hentry category-blog category-life-style tag-blog tag-life-style post_format-post-format-gallery">
                                                    <div class="greennature-standard-style">
                                                        <div class="greennature-blog-thumbnail greennature-gallery">
                                                            <div class="flexslider" data-pausetime="7000"
                                                                data-slidespeed="600" data-effect="fade">
                                                                <ul class="slides">
                                                                    <?php $images=explode(",",$data['images'])?>
                                                                    @foreach ($images  as $key=>$image)
                                                                    
                                                                   
                                                                    <li>
                                                                        <a href="upload/{{$image}}"
                                                                            data-fancybox-group="greennature-gal-1"
                                                                            data-rel="fancybox"><img
                                                                                src="upload/{{$image}}"
                                                                                alt="" width="750" height="330" /></a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="greennature-blog-date-wrapper">
                                                            <div class="greennature-blog-day">{{ \Carbon\Carbon::parse($data['created_at'])->format('d')}}</div>
                                                            <div class="greennature-blog-month">{{ \Carbon\Carbon::parse($data['created_at'])->format('M')}}</div>
                                                        </div>

                                                        <div class="blog-content-wrapper">
                                                            <header class="post-header">
                                                                <h3 class="greennature-blog-title"><a href="#">{{$data['title']}}</a></h3>

                                                                <div class="greennature-blog-info">
                                                                    <div
                                                                        class="blog-info blog-author greennature-skin-info">
                                                                        <i class="fa fa-pencil"></i><a href="#"
                                                                            title="Posts by {{$data['author']}}"
                                                                            rel="author">{{$data['author']}}</a></div>
                                                                    <div
                                                                        class="blog-info blog-category greennature-skin-info">
                                                                        <i class="fa fa-folder-open-o"></i><a href="#"
                                                                            rel="tag">Blog</a><span class="sep">,</span>
                                                                        <a href="#" rel="tag">{{$data['slug']}}</a></div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </header>
                                                            <!-- entry-header -->

                                                            <div class="greennature-blog-content">
                                                            {{$data['body']}}
                                                               
                                                                <div class="clear"></div><a href="#"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div>
                                                        </div>
                                                        <!-- blog content wrapper -->
                                                        <div class="clear"></div>
                                                    </div>
                                                </article>
                                                <!-- #post -->
                                            </div>
                                        </div>
                                       
                                        @endforeach
                                                                               
                                      
                                    </div>
                                    <!-- <div class="greennature-pagination"><span aria-current='page'
                                            class='page-numbers current'>1</span>
                                        <a class='page-numbers' href='page/2/index.html'>2</a>
                                        <a class='page-numbers' href='page/3/index.html'>3</a>
                                        <a class="next page-numbers" href="page/2/index.html">Next &rsaquo;</a>
                                    </div> -->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </section>
                    </div>

                    <div class="clear"></div>
                    
                </div>
                <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item">
                                <div id="search-3" class="widget widget_search greennature-item greennature-widget">
                                    <div class="gdl-search-form">
                                        <form  id="searchform" >
                                            <div class="search-text" id="search-text">
                                                <input type="text" name="s" id="s" autocomplete="off" data-default="Type keywords..." />
                                            </div>
                                            <input type="submit" id="searchsubmit" value="" />
                                            <div class="clear"></div>
                                        </form>
                                    </div>
                                </div>
                                <div id="text-2" class="widget widget_text greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Compressed Biogas</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">CBG can be produced from waste, including municipal solid waste, sludge from wastewater treatment plants, market residues, agricultural residues, cattle dung, sugarcane press mud, sago waste, etc. To know more read the articles of this page...</div>
                                </div>
                                <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Recent Works</h3>
                                    <div class="clear"></div>
                                    <div class="greennature-recent-port-widget">
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="#"><img src="upload/shutterstock_161515241-150x150.jpg" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="#">Wind Energy</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">04 Dec 2024</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="#"><img src="upload/shutterstock_133689230-150x150.jpg" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="#">Elephant Sanctuary</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">04 Dec 2024</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="recent-post-widget">
                                            <div class="recent-post-widget-thumbnail">
                                                <a href="#"><img src="upload/shutterstock_53600221-150x150.jpg" alt="" width="150" height="150" /></a>
                                            </div>
                                            <div class="recent-post-widget-content">
                                                <div class="recent-post-widget-title"><a href="#">Conservation Volunteer</a></div>
                                                <div class="recent-post-widget-info">
                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">04 Dec 2024</a></div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div id="recent-comments-3" class="widget widget_recent_comments greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Recent News</h3>
                                    <div class="clear"></div>
                                    <ul id="recentcomments">
                                        @foreach ($news as $ndata)
                                        
                                       
                                        <li class="recentcomments"><span class="comment-author-link">{{$ndata['author']}}</span> on <a href="#">{{$ndata['title']}}</a></li>
                                        @endforeach
                                                                          </ul>
                                </div>
                                <div id="tag_cloud-2" class="widget widget_tag_cloud greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Tags</h3>
                                    <div class="clear"></div>
                                    <div class="tagcloud">
                                        <a href="#" class="tag-cloud-link tag-link-11 tag-link-position-1" style="font-size: 8pt;" aria-label="Animal (1 item)">Environment</a>
                                        <a href="#" class="tag-cloud-link tag-link-12 tag-link-position-2" style="font-size: 8pt;" aria-label="Aside (1 item)">Energy</a>
                                        <a href="#" class="tag-cloud-link tag-link-13 tag-link-position-3" style="font-size: 11.230769230769pt;" aria-label="Audio (2 items)">CBG</a>
                                        <a href="#" class="tag-cloud-link tag-link-14 tag-link-position-4" style="font-size: 20.564102564103pt;" aria-label="Blog (9 items)">Blog</a>
                                        <a href="#" class="tag-cloud-link tag-link-15 tag-link-position-5" style="font-size: 15.179487179487pt;" aria-label="Business (4 items)">News</a>
                                        <a href="#" class="tag-cloud-link tag-link-17 tag-link-position-6" style="font-size: 13.384615384615pt;" aria-label="identity (3 items)">Articles</a>
                                        <a href="#" class="tag-cloud-link tag-link-74 tag-link-position-7" style="font-size: 8pt;" aria-label="Life Stlyle (1 item)">Solid Waste Management</a>
                                        <a href="#" class="tag-cloud-link tag-link-18 tag-link-position-8" style="font-size: 22pt;" aria-label="Life Style (11 items)">Hydrogen Energy</a>
                                        <a href="#" class="tag-cloud-link tag-link-19 tag-link-position-9" style="font-size: 11.230769230769pt;" aria-label="Link (2 items)">Solar Power</a>
                                        <a href="#" class="tag-cloud-link tag-link-20 tag-link-position-10" style="font-size: 15.179487179487pt;" aria-label="News (4 items)">Audio</a>
                                        <a href="#" class="tag-cloud-link tag-link-21 tag-link-position-11" style="font-size: 15.179487179487pt;" aria-label="Post format (4 items)">Govt Schemes</a>
                                        <a href="#" class="tag-cloud-link tag-link-22 tag-link-position-12" style="font-size: 8pt;" aria-label="Quote (1 item)">Quote</a>
                                        <a href="#" class="tag-cloud-link tag-link-23 tag-link-position-13" style="font-size: 8pt;" aria-label="Safari (1 item)">Renewable Energy</a>
                                        <a href="#" class="tag-cloud-link tag-link-24 tag-link-position-14" style="font-size: 8pt;" aria-label="Travel (1 item)">Projects</a>
                                        <a href="#" class="tag-cloud-link tag-link-25 tag-link-position-15" style="font-size: 8pt;" aria-label="Video (1 item)">Video</a></div>
                                </div>
                            </div>
                        </div>

              </div>
        </div>

        <!-- Below Sidebar Section-->

    </div>
    <!-- greennature-content -->
    <div class="clear"></div>
</div>
@endsection