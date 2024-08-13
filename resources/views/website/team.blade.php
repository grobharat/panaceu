@extends('layoutsweb.default')

@section('content')
<div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                <section id="content-section-1">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0" style="background-image: url('upload/about-title-bg.jpg'); padding-top: 260px; padding-bottom: 140px; ">
                            <div class="container">
                                <div class="greennature-title-item">
                                    <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-extra-large ">
                                        <div class="greennature-item-title-container container">
                                            <div class="greennature-item-title-head">
                                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">Meet Our Team</h3>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
               
                    <section id="content-section-4">
                        <div class="greennature-color-wrapper   " style="background-color: #ffffff; ">
                            <div class="container">
                                <div class="greennature-title-item" style="margin-bottom: 40px;">
                                    <div class="greennature-item-title-wrapper greennature-item  greennature-left-divider greennature-medium ">
                                        <div class="greennature-item-title-container container">
                                            <div class="greennature-item-title-head">
                                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">Meet The Team</h3>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="greennature-personnel-item-wrapper">
                                    <div class="clear"></div>
                                    @foreach($datas as $member)
                                    <div class="four columns">
                                        <div class="greennature-item greennature-personnel-item greennature-left plain-style">
                                            <div class="greennature-ux greennature-personnel-ux">
                                                <div class="personnel-item">
                                                    <div class="personnel-author-image greennature-skin-border">
                                                    <!-- @isset($member['image']) -->
                                                    <img src="upload/<?php echo isset($member['image'])?$member['image']:""; ?>" alt="" style="border-radius:50%" width="100" />
                                                    <!-- @endisset -->
                                                        
                                                    </div>
                                                    <div class="personnel-info">
                                                        <div class="personnel-author greennature-skin-title"><?php echo isset($member['name'])?$member['name']:""; ?></div>
                                                        <div class="personnel-position greennature-skin-info"><?php echo isset($member['role'])?$member['role']:""; ?></div>
                                                    </div>
                                                    <div class="personnel-content greennature-skin-content">
                                                        <p><?php echo isset($member['description'])?$member['description']:""; ?></p>
                                                    </div>
                                                    <div class="personnel-social">
                                                    <a href="<?php echo isset($member['facebook'])?$member['facebook']:"#"; ?>" target="_blank"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle; color: #999999; font-size: 19px; " ></i></a>
                                                    <a href="<?php echo isset($member['twitter'])?$member['twitter']:"#"; ?>" target="_blank"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle; color: #999999; font-size: 19px; " ></i></a>
                                                     <a href="<?php echo isset($member['linkedin'])?$member['linkedin']:"#"; ?>" target="_blank"><i class="greennature-icon fa fa-linkedin" style="vertical-align: middle; color: #999999; font-size: 19px; " ></i></a> 
                                                     <a href="<?php echo isset($member['vimeo'])?$member['vimeo']:"#"; ?>" target="_blank"><i class="greennature-icon fa fa-vimeo" style="vertical-align: middle; color: #999999; font-size: 19px; " ></i></a> 
                                                     <a href="<?php echo isset($member['pinterest'])?$member['pinterest']:"#"; ?>" target="_blank"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle; color: #999999; font-size: 19px; " ></i></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   
                                   
                                   
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    
                                
                    
                </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->
@endsection


        



        