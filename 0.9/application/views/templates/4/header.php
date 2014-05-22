<?php

$page = $this->uri->segment(1, null);

reset($_GET); //reset the array pointer
$subpage = key($_GET); //gets the first element from the array
$is_logged = isLogged();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=lang('main_title')?></title>
    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="author" content="gifteng.com"> 
    <meta name="copyright" content="(c) 2012, gifteng.com">
    <meta name="description" content="On Gifteng you can give and receive Gifts, Freebies and many more. Find what you want by browsing through great free stuff. They are all Gifts." />
    <meta name="keywords" content="free stuff, free stuff online, freebies, gifts" />
    <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" /> 
    <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" /> 
    <meta name="DC.title" xml:lang="EN" content="Gifteng" />
    <meta name="DC.title" lang="en" content="Gifteng" /> 
    <meta name="DC.creator" content="gifteng.com" /> 
    <meta name="DC.subject" lang="en" content="Gifts | Freebies | Free Stuff - Gifteng" /> 
    <meta name="DC.description" lang="en" content="An invitation-only social community where you can give and receive things you love for free." /> 
    <meta name="DC.publisher" content="Gifteng" />
    <meta name="DC.format" content="text/html" />  
    <meta name="DC.identifier" scheme="DCTERMS.URI" content="http://www.gifteng.com" /> 
    <meta name="DC.language" scheme="DCTERMS.URI" content="en" /> 
    <meta name="DC.relation" scheme="DCTERMS.URI" content="free gifts" /> 
    <meta name="DC.coverage" scheme="DCTERMS.URI" content="New York, NY, USA" />
    
    <meta property="og:site_name" content="Gifteng"/>
    <meta property="og:url" content="http://www.gifteng.com"/>
    <meta property="og:title" content="Gifts | Freebies | Free Stuff - Gifteng"/>
    <meta property="og:description" content="Give. Receive. Inspire."/>
    <meta property="og:image" content="<?=BASE_PATH?>images/logo.png"/>
    <meta property="og:type" content="website"/>
    
    <meta name="google-site-verification" content="zW7qDZZCQYPFLciEL7ySIjCfccgznWjY5MHr1vkKiN8" />
    <meta name="p:domain_verify" content="592c562546fda58a9ba3de536deafeca"/>
    <meta property="fb:admins" content="100006621787064" />
    <meta property="fb:page_id" content="240475762731626" />
    
    <link rel="shortcut icon" href="<?=BASE_PATH?>images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=BASE_PATH?>images/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?=BASE_PATH?>images/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?=BASE_PATH?>images/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?=BASE_PATH?>images/apple-icon-144x144.png" />
    
    <link rel='stylesheet' type='text/css' media='all' href="<?=CSS_PATH?>bootstrap.css" />
    <link rel='stylesheet' type='text/css' media='all' href="<?=CSS_PATH?>bootstrap-responsive.css" />
    <link rel='stylesheet' type='text/css' media='all' href="<?=CSS_PATH?>flat-ui.css">
    <link rel='stylesheet' type='text/css' media='all' href="<?=BASE_PATH?>gifteng.css" />
    <link rel='stylesheet' type='text/css' media='all' href="<?=BASE_PATH?>snap.css" />
    <link rel='stylesheet' type='text/css' media='all' href="<?=BASE_PATH?>gifteng-addon.css" />
    
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.ie.css" />
    <![endif]-->
    
    
    <script src="<?=JS_PATH?>jquery-1.8.3.min.js"></script>
    <script src="<?=JS_PATH?>jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?=JS_PATH?>jquery.ui.touch-punch.min.js"></script>
    <script src="<?=JS_PATH?>bootstrap.min.js"></script>
    <script src="<?=JS_PATH?>bootstrap-select.js"></script>
    <script src="<?=JS_PATH?>bootstrap-switch.js"></script>
    <script src="<?=JS_PATH?>flatui-checkbox.js"></script>
    <script src="<?=JS_PATH?>flatui-radio.js"></script>
    <script src="<?=JS_PATH?>jquery.tagsinput.js"></script>
    <script src="<?=JS_PATH?>jquery.placeholder.js"></script>
    <script src="<?=JS_PATH?>jquery.stacktable.js"></script>
    <script src="<?=JS_PATH?>application.js"></script>
    <script src="<?=JS_PATH?>snap_krasi.js"></script>
    <!--<script src="<?=JS_PATH?>jquery.vgrid.min.js"></script>-->
    
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script src="<?=JS_PATH?>leaflet-providers.js"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?=JS_PATH?>html5shiv.js"></script>
    <![endif]-->
    
    <? /** ?>
    <!--MASONRY -->
    <link rel='stylesheet' type='text/css' media='all' href="<?=CSS_PATH?>masonry.css" />
    <script type="text/javascript" src="<?=JS_PATH?>jquery.masonry.min.js"></script>
    <!--<script type="text/javascript" src="<?=JS_PATH?>jquery.infinitescroll.min.js"></script>-->
    <? /**/ ?>
    <script type="text/javascript" src="<?=JS_PATH?>modernizr-transitions.js"></script>
    
    
    <script type="text/javascript" src="<?=JS_PATH?>common.js"></script>
    
    <script language="javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments);},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-40348949-1', 'gifteng.com');
        ga('send', 'pageview');
    </script>
    
    <script language="javascript">
        window.onerror = function(m, u, l) {
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>ajax/log_error',
                dataType: 'json',
                cache: false,
                data: {
                    msg: m,
                    url: u,
                    line: l,
                    window: window.location.href
                }
            }).done(function(response) {
            }).fail(function(data) {
            });
            return true;
        };
    </script>
    
    <script language="javascript">
        if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.snap-slide').hide();
            $('.snap-drawers').hide();

            window.addEventListener("load", function() {
                /mobi/i.test(navigator.userAgent) && !location.hash && setTimeout(function() {
                    window.scrollTo(0, 1);
                }, 1000);
                
                $('.snap-slide').show();
                $('.snap-drawers').show();
            });
            
            $("input, textarea").live("focus", function(e) {
                $('.snap-content').css('-webkit-overflow-scrolling','auto');
            });
            $("input, textarea").live("blur", function(e) {
                $('.snap-content').css('-webkit-overflow-scrolling','touch');
            });
        }
    </script>
</head>

<body>


<div id="fb-root"></div>
<script language="javascript">
    
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '285994388213208',
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
	
        <? if ($page=='invitation' && isset($isFb)) : ?>
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                showFriends();
            } else if (response.status === 'not_authorized') {
                window.location = '<?=base_url()?>';
            } else {
                window.location = '<?=base_url()?>';
            }
        });
        <? endif; ?>
    };
    
    // Load the SDK asynchronously
    (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js";
            fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    function doFBLogin() {
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                window.location = '<?=base_url()?>invitation/facebook';
            } else if (response.status === 'not_authorized') {
                // not_authorized
                loginFB();
            } else {
                // not_logged_in
                loginFB();
            }
        });
    }

    function loginFB() {
        FB.login(function(response) {
            if (response.authResponse) {
                window.location = '<?=base_url()?>invitation/facebook';
            }
        });
    }

    function doLogout() {
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                FB.logout(function(response) {
                    window.location = '<?=base_url()?>authentication/logout';
                });
            } else if (response.status === 'not_authorized') {
                window.location = '<?=base_url()?>authentication/logout';
            } else {
                window.location = '<?=base_url()?>authentication/logout';
            }
        }, true);
    }
</script>


<script language="javascript">
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0];
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src="//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document,"script","twitter-wjs");
</script>


<script type="text/javascript">
    (function(d){
        var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
        p.type = 'text/javascript';
        p.async = true;
        p.src = '//assets.pinterest.com/js/pinit.js';
        f.parentNode.insertBefore(p, f);
    }(document));
</script>

    

<?= isset($modal) ? $modal : '' ?>


<? if( $is_logged ): ?>
    
    <? $this->load->view('javascript/post'); ?>
    <? $this->load->view('modal/post'); ?>
    
<? endif; ?>



<? if( $is_logged ): ?>


<script type="text/javascript" src="//assets.zendesk.com/external/zenbox/v2.6/zenbox.js"></script>
<style type="text/css" media="screen, projection">
    @import url(//assets.zendesk.com/external/zenbox/v2.6/zenbox.css);
</style>
<script type="text/javascript">
    if (typeof(Zenbox) !== "undefined") {
        Zenbox.init({
            dropboxID:   "20202172",
            url:         "https://gifteng.zendesk.com",
            tabTooltip:  "Feedback",
            tabImageURL: "https://assets.zendesk.com/external/zenbox/images/tab_feedback_right.png",
            tabColor:    "#00bebe",
            tabPosition: "Right"
        });
    }
</script>


<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
        <div>
            <ul>
            	<li class="text-center">
                    <form id="browse_form" action="<?=base_url()?>browse" method="get">
                        <input type="text" name="q" placeholder="Find friends and gifts" value="<?= key_exists('q', $_GET) ? $_GET['q'] : '' ?>" />
                    </form>
                </li>
                <li>
                    <div class="row-fluid ge-user">
                        <?
                        $currentUser = $this->usermanagement_service->loadUser();
                        if ( isset($currentUser) && $currentUser != null ) {
                            $this->load->view('element/user', array('user' => $currentUser, 'canEdit' => false, 'small' => true, 'size' => LIST_USER_IMAGE_SIZE));
                        }
                        ?>
                    </div>
                </li>
                <li<?=($page == "browse" ? ' class="active"' : '')?>><a href="<?=base_url()?>browse"><i class="fui-eye"></i> Browse</a></li>
                <li<?=($page == "invitation" ? ' class="active hidden-phone"' : ' class="hidden-phone"')?>><a href="#" onclick="doFBLogin();"><i class="fui-user"></i> Invite Friends <span class="label label-small label-important">NEW</span></a></li>
                <li<?=($page == "profile" && $subpage == "giving" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?giving"><i class="ge-icon-giftbox"></i> Giving</a></li>
                <li<?=($page == "profile" && $subpage == "receiving" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?receiving"><i class="ge-icon-giftbox"></i> Receiving</a></li>
                <li<?=($page == "profile" && $subpage == "favorite" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?favorite"><i class="fui-star-2"></i> Favorites</a></li>
                <li<?=($page == "profile" && $subpage == "following" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?following"><i class="fui-heart"></i> Connections</a></li>
                <li<?=($page == "stat" ? ' class="active"' : '')?>><a href="<?=base_url()?>stat"><i class="fui-star"></i> Top Giftengers <span class="label label-small label-important">NEW</span></a></li>
                <li<?=($page == "profile" && $subpage == "message" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?message"><i class="fui-mail"></i> Messages</a></li>
                <li<?=($page == "profile" && $subpage == "notification" ? ' class="active"' : '')?>><a href="<?=base_url()?>profile?notification"><i class="fui-alert"></i> Notifications</a></li>
                <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AHCR7BYEB68UC" target="_blank"><i class="ge-icon-clover"></i> Donate</a></li>
                <li><a href="#" onclick="doLogout()"><i class="fui-power"></i> Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<? endif; ?>



<div class="navbar navbar-fixed-top ge-navbar snap-slide">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse">
                
                <? if( $is_logged ): ?>
                <span class="nav">
                    <a id="open-left" class="link"><span class="fui-list"></span></a>
                </span>
                <? endif; ?>
                
                <span class="nav">
                    <a href="<?=base_url()?>index"><i class="ge-icon-gifteng"><sup>Beta</sup></i></a>
                </span>
                <span class="nav hidden-phone">
                    <div style="padding:16px 0 0 16px;">
                        <div style="float:left;margin-right: 6px;">
                            <div style='width:46px;overflow:hidden;'>
                                <div class="fb-like" data-href="http://www.gifteng.com/" data-width="90" data-height="50" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="false" data-send="false"></div>
                            </div>
                        </div>
                        <div style="float:left;margin-right: 6px;">
                            <a href="https://twitter.com/gifteng" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @gifteng</a>
                        </div>
                        <div style="float:left;margin-right: 6px;">
                            <div class="g-plusone" data-size="medium" data-annotation="none" data-href="http://www.gifteng.com/"></div>
                        </div>
                    </div>
                </span>

                <? if( $is_logged ): ?>

                    <ul class="nav pull-right">
                        <li>
                            <a href="http://gifteng.zendesk.com/home" target="_blank"><i class="ge-icon-help text-inverted"></i></a>
                        </li>
                        <li class="hidden-phone">
                            <a href="#" onclick="startPostModal();"><i class="ge-icon-giftbox text-inverted" style="font-size: 1.25em;"></i></a>
                        </li>
                        <li class="visible-phone">
                            <a href="<?=base_url()?>post/member"><i class="ge-icon-giftbox text-inverted" style="font-size: 1.25em;"></i></a>
                        </li>
                    </ul>

                <? else: ?>

                    <ul class="nav pull-right">
                        <li class="hidden-phone">
                            <a href="<?=base_url()?>authentication/login" style="color:#ffffff !important;">Log In</a>
                        </li>
                        <li>
                            <a href="http://gifteng.zendesk.com/home" target="_blank"><i class="ge-icon-help text-inverted"></i></a>
                        </li>
                        <? /** ?>
                        <li class="dropdown hidden-phone">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fui-user text-inverted" style="font-size: 1.25em;"></i></a>

                            <div class="dropdown-menu login-drop" style="padding: 15px; padding-bottom: 10px;">
                                <?=form_open('/authentication/login')?>
                                    <input name="login_email" style="width: 142px; margin-bottom: 15px;" type="text" size="30" placeholder="Email address" />
                                    <input name="login_password" style="width: 142px; margin-bottom: 15px;" type="password" size="30" placeholder="Password" />
                                    <input name="login_remember_me" id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" value="1" />
                                    <label class="string optional" for="user_remember_me" style="color: #ffffff; text-shadow: none;">Remember me</label>
                                    <input class="btn btn-ge" style="clear: left; width: 100%; height: 32px; font-size: 16px; font-weight: 400; padding-bottom: 30px;" type="submit" value="Sign In" />
                                <?=form_close()?>
                            </div>
                        </li>
                        <? /**/ ?>
                    </ul>

                <? endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="ge-container snap-content snap-slide">
    <div class="<?= $is_logged ? 'container' : '' ?> ge-topspace">