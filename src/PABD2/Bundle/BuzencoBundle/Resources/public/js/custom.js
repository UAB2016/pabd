$(window).load(function() {

    var theImage = $('ul li img');
    var theWidth = theImage.width();
	
        $('ul').wrap('<div id="mother" />');
        $('#mother').css({
        width: function() {
            return theWidth;

        },
        height: function() {
            return theImage.height();
        },
        position: 'relative',
        overflow: 'hidden'
    });
   
    var totalWidth = theImage.length * theWidth;
    $('ul').css({
        width: function() {
            return totalWidth;
        }
    });
    $(theImage).each(
            function(intIndex) {
                $(this).nextAll('a')
                        .bind("click", function() {
                    if ($(this).is(".next")) {

                        $(this).parent('li').parent('ul').animate({
                            "margin-left": (-(intIndex + 1) * theWidth)
                        }, 1000)

                    } else if ($(this).is(".previous")) {

                        $(this).parent('li').parent('ul').animate({
                            "margin-left": (-(intIndex - 1) * theWidth)
                        }, 1000)


                    } else if ($(this).is(".startover")) {

                        $(this).parent('li').parent('ul').animate({
                            "margin-left": (0)
                        }, 1000)

                    }
                });									 
            });	 					
});