<?php
$ale_background = ale_get_option('background');

$ale_font_one = ale_get_option('font_one');
$ale_font_two = ale_get_option('font_two');
$ale_font_three = ale_get_option('font_three');
$ale_font_four = ale_get_option('font_four');
$ale_font_five = ale_get_option('font_five');

$ale_font_one_ex = ale_get_option('font_one_ex');
$ale_font_two_ex = ale_get_option('font_two_ex');
$ale_font_three_ex = ale_get_option('font_three_ex');
$ale_font_four_ex = ale_get_option('font_four_ex');
$ale_font_five_ex = ale_get_option('font_five_ex');

$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php
    // if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex =""; }
    // if(ale_get_option('mainfontex')){ $mainfontex = ":".ale_get_option('mainfontex'); } else {$mainfontex = "";}
    // if(ale_get_option('headerfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."|".ale_get_option('mainfont').$mainfontex."' rel='stylesheet' type='text/css'>"; }

    if($ale_font_one) {
        if ($ale_font_one_ex) {
            $ale_font_one_ex = ":" . $ale_font_one_ex;
        } else {
            $ale_font_one_ex = '';
        }
        echo "<link href='https://fonts.googleapis.com/css?family=" . $ale_font_one . $ale_font_one_ex . "' rel='stylesheet'>";
    }

    if($ale_font_two) {
        if ($ale_font_two_ex) {
            $ale_font_two_ex = ":" . $ale_font_two_ex;
        } else {
            $ale_font_two_ex = '';
        }
        echo "<link href='https://fonts.googleapis.com/css?family=" . $ale_font_two . $ale_font_two_ex . "' rel='stylesheet'>";
    }

    if($ale_font_three) {
        if ($ale_font_three_ex) {
            $ale_font_three_ex = ":" . $ale_font_three_ex;
        } else {
            $ale_font_three_ex = '';
        }
        echo "<link href='https://fonts.googleapis.com/css?family=" . $ale_font_three . $ale_font_three_ex . "' rel='stylesheet'>";
    }

    if($ale_font_four) {
        if ($ale_font_four_ex) {
            $ale_font_four_ex = ":" . $ale_font_four_ex;
        } else {
            $ale_font_four_ex = '';
        }
        echo "<link href='https://fonts.googleapis.com/css?family=" . $ale_font_four . $ale_font_four_ex . "' rel='stylesheet'>";
    }

    if($ale_font_five) {
        if ($ale_font_five_ex) {
            $ale_font_five_ex = ":" . $ale_font_five_ex;
        } else {
            $ale_font_five_ex = '';
        }
        echo "<link href='https://fonts.googleapis.com/css?family=" . $ale_font_five . $ale_font_five_ex . "' rel='stylesheet'>";
    }                       
?>

<style type='text/css'>
    body {
        <?php
        if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
        if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
        if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
        if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };

        if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; }
        if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; }
        if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; }
        if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; }
        if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; }
        ?>
    }
    h1 {
        <?php
        if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
        if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
        if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
        if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
        ?>
    }
    h2 {
        <?php
        if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
        if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
        if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
        if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
        ?>
    }
    h3 {
        <?php
        if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
        if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
        if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
        if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
        ?>
    }
    h4 {
        <?php
        if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
        if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
        if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
        if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
        ?>
    }
    h5 {
        <?php
        if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
        if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
        if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
        if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
        ?>
    }
    h6 {
        <?php
        if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
        if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
        if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
        if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
        ?>
    }

    <?php if($ale_font_one) {?>
        .font_questrial,
        .call-us .selected,
        .call-us .selected ul li,
        .call-us .number,
        nav.main ul.first,
        footer .content .col-4:nth-child(2) .call h3,
        body.contact .inner .col-6.left .phone
        {
            <?php  if($ale_font_one){ 
                $font_one = str_replace('+',' ', $ale_font_one); 
                echo "font-family: " . "'". $font_one . "';"; }; ?>
        }
    <?php } ?>      

    <?php if($ale_font_two) {?>
        .font_pacifico, 
        nav.main .mobile-button, 
        body.all section.content > h2,
        body.home header .left h2,
        body.home header .right h2,
        body.home section.our-services h2,
        body.home section.how-it-works h2,
        body.home section.suggestions .right h2,
        body.home section.our-cars h2,
        body.home section.newsspecials .caption h3,
        body.services section.content h2,
        body.contact .inner .col-6.left h2,
        body.contact .inner .col-6.left h2 span,
        body.contact .inner .col-6.right h3,
        .about .team h3
        {
            <?php  if($ale_font_two){ 
                $font_two = str_replace('+',' ', $ale_font_two); 
                echo "font-family: " . "'". $font_two . "'"; }; ?>            
        }
    <?php } ?>

    <?php if($ale_font_three) {?>
        .font_playfair_display,

        .call-us p, 
        nav.main .search input[type='text'],
        body.home header .left p,
        body.home header .right #submit,
        body.home section.our-services .columns .item .title,
        body.home .mobile .col-6:first-of-type h3,
        body.home .mobile .col-6:last-of-type h3,
        body.home section.how-it-works .list h3,
        body.home section.suggestions .left form input[type='submit'],
        body.home section.newsspecials .caption a,
        body.home section.newsspecials .news article .left h3,
        body.home section.newsspecials .news article .left span,
        body.home section.newsspecials .news article .right h2,
        footer .content .col-4:nth-child(2) .call span,
        body.services section.content .text p,
        body.services section.content .tiles > .col-6 .txt h3,
        body.services section.content .tiles > .col-6 .txt p,
        body.booking #book-nav li,
        body.booking #book-content form #submit,
        body.contact .inner .col-6.left span, 
        body.contact .inner .col-6.left p,
        body.contact .inner .col-6.right .form form input[type='submit'],
        body.blog article .left h3,
        body.blog article .left span,
        body.blog article .right .inner .text a,
        body.blog article .right .inner .by span,
        body.blog article .right .inner .read,
        body.blog .pagination .col-10 a,
        body.blog-inside section.content h1,
        body.blog-inside section.content .info .by span,
        body.blog-inside section.content .info .category,
        body.blog-inside section.content .info .date,
        body.blog-inside section.content .quote,
        body.blog-inside section.content h2,
        body.blog-inside .comments .top h2,
        body.blog-inside .comments .top span,
        body.blog-inside .comments .comment .info .name,
        body.blog-inside .comments .comment .info a.reply,
        body.blog-inside .leave-a-comment h2,
        body.blog-inside .leave-a-comment input[type='submit'],
        .about section.content .col-6 p,
        .about .team .founder .name,
        .about .team .founder .info span,
        .about .team .founder .team-slider .slides > li h4,
        .about .team .founder .team-slider .slides > li span,
        .about .certificate .col-7 .text h3,
        .about .certificate .col-7 .text p
        {
            <?php  if($ale_font_three){ 
                $font_three = str_replace('+',' ', $ale_font_three); 
                echo "font-family: " . "'". $font_three . "';"; }; ?>
        }
    <?php } ?>

    <?php if($ale_font_four) {?>
        .font_rufina,
        body.all section.content .breadcrumb a,
        body.home .mobile .col-6:first-of-type p,
        body.home .mobile .col-6:last-of-type p,
        body.home section.how-it-works p,
        body.home section.suggestions .left form label,
        body.home section.suggestions .right p,
        body.home section.our-cars p,
        body.home section.our-cars .gallery #slider li h4,
        body.contact .inner .col-6.right .form form label
        {
            <?php  if($ale_font_four){ 
                $font_four = str_replace('+',' ', $ale_font_four); 
                echo "font-family: " . "'". $font_four . "';"; }; ?>
        }
    <?php } ?>

    <?php if($ale_font_five) {?>
        .font_dancing_script,
        .font-Dancing,
        body.home section.newsspecials .specials .content .container:last-of-type .offer

        {
            <?php  if($ale_font_five){ 
                $font_five = str_replace('+',' ', $ale_font_five); 
                echo "font-family: " . "'". $font_five . "';"; }; ?>
        }
    <?php } ?>                        

    

</style>