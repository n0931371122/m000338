function imgFill() {
    $('.imgFill').imgLiquid();
    $('.imgFill').each(function () {
    let imgUrl;
    const $this = $(this),
            $picture = $this.find('picture'),
            query = $this.data('query');
    const ww = window.innerWidth, wh = window.innerHeight;
    if ($picture.length) {
        const sourceLength = $picture.find('source').length;
        let sourceArry = [];
        $picture.find('source').each(function() {
        const srcset = $(this).attr('srcset');
        const node = $(this).attr('media').replace(/\(|\)| /g, '');
        const minmax = node.split(':')[0];
        const breakpoint = node.split(':')[1];
        sourceArry.push({
            srcset: srcset,
            minmax: minmax,
            breakpoint: breakpoint
        });
        });
        if ( query === 'size' ) {
        sourceArry.forEach(function(img) {
            if ( img.minmax === 'min-width' && ww >= parseFloat(img.breakpoint) ) {
            imgUrl = img.srcset;
            } else if ( img.minmax === 'max-width' && ww <= parseFloat(img.breakpoint) ) {
            imgUrl = img.srcset;
            }
        });
        console.log(imgUrl);
        } else if ( query === 'orientation' ) {
        sourceArry.forEach(function(img) {
            if ( img.breakpoint === 'landscape' && ww/wh > 1 ) {
            imgUrl = img.srcset;
            } else if ( img.breakpoint === 'portrait' && ww/wh <= 1 ) {
            imgUrl = img.srcset;
            }
        });
        }
        $this.css('background-image', 'url("' + imgUrl + '")');
    }
    });
}

function numberElementEvent(){
	$(".number-element").find(".plus").click(function () {
		var $val = parseInt($(this).parents(".number-element").find("input").val());
		$(this).parents(".number-element").find("input[type=number]").val($val + 1);
		$(this).parents(".number-element").find("input[type=number]").blur();
	});
	$(".number-element").find(".minus").click(function () {
		var $val = parseInt($(this).parents(".number-element").find("input").val());
		if ($val > 0) {
			$(this).parents(".number-element").find("input[type=number]").val($val - 1)
		}

	});
}
function likeToggle(ele){
    console.log(ele);
    $(ele).toggleClass("active");

}
function ajaxStronghold(){
    //ajax
}
function activeArea(e){
    $(".area").removeClass("active");
    $(e.target).next().addClass("active");
    ajaxStronghold();
}
function uniformHeight($el) {
    if ($el.length !== 0) {
        var $h_array = [];
        $el.each(function (index) {
            $(this).height("auto");
            $h_array[index] = $(this).height();
        });
        $max = Math.max.apply(null, $h_array);
        $el.each(function (index) {
            $(this).height($max);
        });
    }
}