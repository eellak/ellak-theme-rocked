<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
	.morecontent span {
	display: none;
	}
	.morelink {
		display: inline-block;
	}
	.clear::before, [class*="content"]::before {
    content: "";
    display: table-caption;
	}
	.tbl-cont {
			background: #EFEFEF;
			padding: 20px 15px;
			margin: 10px 0;
			border: 1px solid #3A3A3A;
			border-radius: 3px;
	}
	.inside-article {
			text-align: justify;
	}
	</style>
	<script>
	$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 500;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "περισσότερα";
    var lesstext = "λιγότερα";


    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
	</script>
<?php

/*

Template Name: Lawers Submissions Template

*/
	get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-subs-page', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

