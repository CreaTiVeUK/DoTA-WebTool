<?php
    //it 's recommender that place encoding type in header than in body
    header("Content-Type: text/html; charset=UTF-8",true,200);
    // write or no <meta http-equiv="Refresh" 
    $AUTO_DOWNLOAD=false;
    //direction & lang
    $DIR="ltr";
    $LANG="en";
    //path menu
    $HOME_LINK="https://www.eclipse.org/";
    $DOWNLOAD_HOME_LINK="http://www.eclipse.org/downloads";
    //paypal e-mail 
    $COMPANY_E_MAIL="donate@eclipse.org ";
    //company name
    $COMPANY_NAME="Eclipse";
    //product to download
    $PRODUCT_NAME="Eclipse";
    //page title
    $TITLE="Thank You for Downloading $PRODUCT_NAME";
    //meta key words
    $KEY_WORDS="eclipse,download,downloads,mirror,project,plug-ins,plugins,java,ide,swt,refactoring,\
                free java ide,tools,platform,open source,development environment,development,ide";
    //meta author
    $AUTHOR="Christopher Guindon";
    //Open graph protocol part
    //og image
    $OG_IMAGE="https://www.eclipse.org/eclipse.org-common/themes/Nova/images/eclipse.png";
    //og description
    $OG_DESCRIPTION="Eclipse is probably best known as a Java IDE, \
                    but it is more: it is an IDE framework, a tools framework,\
                    an open source project, a community, an eco-system, and a foundation.";
    //og title= page title
    $OG_TITLE=$TITLE;
    //fav icon
    $FAV_ICON="https://www.eclipse.org/eclipse.org-common/themes/solstice/public/images/favicon.ico";
    //other code....
    ?>
<?php /*html code will change dynamicly, focus on php varibles up*/  ?>
<!doctype html>
<html dir="<?php echo $DIR; ?>" lang="<?php echo $LANG; ?>" >
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="<?php echo $AUTHOR; ?>" />
        <meta name="keywords" content="<?php echo $KEY_WORDS; ?>" />
        <title><?php echo $TITLE; ?></title>
        <meta property="og:title" content="<?php echo $OG_TITLE; ?>" />
        <meta property="og:description" content="<?php echo $OG_DESCRIPTION; ?>" />
        <meta property="og:image" content="<?php echo $OG_IMAGE; ?>" />
        <link rel="shortcut icon" href="<?php echo $FAV_ICON; ?>" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,100" />
        <link rel="stylesheet" href="https://www.eclipse.org/eclipse.org-common/themes/solstice/public/stylesheets/styles.min.css" />
        <link rel="stylesheet" href="https://www.eclipse.org/downloads/assets/public/stylesheets/thankyou.min.css" />
        <link rel="stylesheet" href="style.css" />
        <?php
            if($AUTO_DOWNLOAD==true){
            ?>
        <meta http-equiv="Refresh" 
            content="0;URL=<?php echo $PRODUCT_LINK; ?>" />
        <?php
            }
            ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section id="breadcrumb" class="defaut-breadcrumbs hidden-print">
            <div class="container">
                <div class="col-xs-24">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo $HOME_LINK; ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo $DOWNLOAD_HOME_LINK; ?>">Downloads</a>
                        </li>
                        <li class="active">Thank You for Downloading <?php echo $PRODUCT_NAME; ?>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <main role="main" class=" no-promo">
            <div class="container" id="novaContent">
                <div id="container-donation">
                    <div class="container-slider">
                        <h1 class="text-shadow">Thank you for downloading <?php echo $PRODUCT_NAME; ?> </h1>
                        <p class="download-link-msg">If the download doesn't start in a few seconds, please 
                            <a href="<?php echo $PRODUCT_LINK;?>">
                            click here
                            </a>
                            to start the download.
                        </p>
                        <div class="info-bubble rounded inner-shadow text-shadow">
                            <p id="standard_msg">
                                Participate in our success and together let's make <?php echo $PRODUCT_NAME; ?> even better.
                            </p>
                            <p id="custom_msg" style="display: block;">
                                A 
                                <span class="donation_amt">
                                <sup>$</sup>
                                35
                                </span>
                                donation lets you enjoy the benefits of being a Friend of <?php echo $COMPANY_NAME; ?>.
                            </p>
                            <div id="info-over" style="left: 243px;"></div>
                        </div>
                    </div>
                    <div id="slider-wrapper">
                        <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                            <a id="slider-button" class="ui-slider-handle ui-state-default ui-corner-all" href="#" 
                                style="left: 33.3333333333333%; display: inline; margin: 13px -10px;">
                            </a>
                        </div>
                    </div>
                    <div class="container-slider text-shadow">
                        <form id="form-donation" name="form-donation" method="POST" action="https://www.paypal.com/cgi-bin/webscr">
                            <input type="hidden" value="<?php echo $COMPANY_E_MAIL;?>" name="business">
                            <input type="hidden" value="Donation" name="item_name">
                            <input type="hidden" value="1" name="no_shipping">
                            <input type="hidden" value="US" name="lc">
                            <input type="hidden" value="_xclick" name="cmd">
                            <input type="hidden" value="USD" name="currency_code">
                            <input type="hidden" value="0" name="item_number">
                            <input type="submit" value="Donate" id="submit" class="button grad-yellow rounded inner-shadow">
                            <input id="amount" type="text" name="amount" value="35">
                        </form>
                        <p id="donate-info">Psst, you can enter any amount you want.</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- /#main-content-container-row -->
        <p id="back-to-top">
            <a class="visible-xs" href="#top">Back to the top</a>
        </p>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="Styles/dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Styles/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
