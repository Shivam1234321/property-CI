<script src="<?= UJS;?>jquery-v3.4.1.js"></script>
  <script src="<?= UJS;?>greensock.js"></script>
  <script src="<?= UJS;?>layerslider.transitions.js"></script>
  <script src="<?= UJS;?>layerslider.kreaturamedia.jquery.js"></script>
  <script src="<?= UJS;?>popper.min.js"></script>
  <script src="<?= UJS;?>bootstrap.min.js"></script>
  <script src="<?= UJS;?>owl.carousel.min.js"></script>
  <script src="<?= UJS;?>tmpl.js"></script>
  <script src="<?= UJS;?>jquery.dependClass-0.1.js"></script>
  <script src="<?= UJS;?>draggable-0.1.js"></script>  
  <script src="<?= UJS;?>jquery.slider.js"></script>
  <script src="<?= UJS;?>jquery.fancybox.min.js"></script>
  <script src="<?= UJS;?>wow.js"></script>
  <script src="<?= UJS;?>jquery.cookie.js"></script>
  <script src="<?= UJS;?>color-settings.js"></script>
  <script src="<?= UJS;?>custom.js"></script>
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlVVUxeZqpBLv-jrgsQO1XQ7wvBS9mlRo"></script>-->
  <!--<script src="<?= UJS;?>map.scripts.js"></script>-->
  
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e6d2135470839001284a244&product=inline-share-buttons&cms=sop' async='async'></script>
<script src="<?= SA;?>sweetalert2.min.js"></script>
<script src="<?= SA;?>notify.js"></script>
<script src="<?= AJS;?>jquery.validate.js"></script>
<script src="<?= UJS;?>language/Multilanguage.js"></script>
  <script>
	jQuery(function ($) {

    "use strict";
    // Dots View animation View 
	//------------------------------------
	function dotCanvas(){
	    var $blocks = $('[data-dots]');
	    $blocks.each(function() {
	        var $block = $(this);
	        var block = $block[0];
	        var $canvas = $("<canvas/>").appendTo($block);
	        var canvas = $canvas[0];
	        var width = $block.width();
	        var height = $block.height();
	        var ctx = canvas.getContext('2d');
	        ctx.width = width;
	        ctx.height = height;
	        var devicePixelRatio = window.devicePixelRatio || 1,
	            backingStoreRatio = ctx.webkitBackingStorePixelRatio || ctx.mozBackingStorePixelRatio || ctx.msBackingStorePixelRatio || ctx.oBackingStorePixelRatio || ctx.backingStorePixelRatio || 1;
	        var ratio = devicePixelRatio / backingStoreRatio;
	        canvas.width = width * ratio;
	        canvas.height = height * ratio;
	        ctx.scale(ratio, ratio);
	        var mouseX = undefined;
	        var mouseY = undefined;

	        function Circle(x, y) {
	            this.x = x;
	            this.y = y;
	            this.distance = 7;
	            this.radians = 0;
	            this.draw = function() {
	                ctx.beginPath();
	                ctx.strokeStyle = 'rgba(0, 0, 0, .28)';
	                ctx.moveTo(this.x + 3, this.y);
	                ctx.lineTo(this.x + 3, this.y + 6);
	                ctx.moveTo(this.x, this.y + 3);
	                ctx.lineTo(this.x + 6, this.y + 3);
	                ctx.stroke();
	            };
	            this.update = function() {
	                if (mouseX > -1) {
	                    var k1 = mouseY - y;
	                    var k2 = mouseX - x;
	                    var tan = k1 / k2;
	                    var yrad = Math.atan(tan);
	                    if (mouseX < x) {
	                        yrad = Math.PI - Math.atan(-tan);
	                    }
	                    this.x = x + Math.cos(yrad) * this.distance;
	                    this.y = y + Math.sin(yrad) * this.distance;
	                }
	                this.draw();
	            };
	        };
	        var circlesArray = [];
	        var gutter = 35;
	        var countW = Math.floor(width / gutter);
	        var countH = Math.floor(height / gutter);
	        var len = countW * countH;
	        for (var i = 0; i < countH; i++) {
	            for (var t = 0; t < countW; t++) {
	                var x = gutter * t;
	                var y = gutter * i;
	                circlesArray.push(new Circle(x, y));
	            }
	        }
	        var loop = function() {
	            ctx.clearRect(0, 0, ctx.width, ctx.height);
	            for (var i = 0; i < circlesArray.length; i++) {
	                circlesArray[i].update();
	            }
	        };
	        document.addEventListener('mousemove', function(e) {
	            var parentOffset = $(canvas).parent().offset();
	            var relX = e.pageX - parentOffset.left;
	            var relY = e.pageY - parentOffset.top;
	            mouseX = relX;
	            mouseY = relY;
	            ctx.clearRect(0, 0, ctx.width, ctx.height);
	            for (var i = 0; i < circlesArray.length; i++) {
	                circlesArray[i].update();
	            }
	            loop();
	        });
	        loop();
	    });
	}
    if ($(window).width() > 991) {
        dotCanvas();
    }
	});
  $("li.page-item  a").addClass("page-link");
</script>

<!-- Lazy Loader -->
<script>
  !function(window){
    var $q = function(q, res){
      if (document.querySelectorAll) {
        res = document.querySelectorAll(q);
      } else {
        var d=document
        , a=d.styleSheets[0] || d.createStyleSheet();
        a.addRule(q,'f:b');
        for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
        l[b].currentStyle.f && c.push(l[b]);

        a.removeRule(0);
        res = c;
      }
      return res;
      }
    , addEventListener = function(evt, fn){
      window.addEventListener
        ? this.addEventListener(evt, fn, false)
        : (window.attachEvent)
        ? this.attachEvent('on' + evt, fn)
        : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
      return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

    function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
      el.parent.replaceChild(img, el)
      else
      el.src = src;

      fn? fn() : null;
    }
    img.src = src;
    }

    function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
    }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
        for (var i = 0; i < images.length; i++) {
        if (elementInViewport(images[i])) {
          loadImage(images[i], function () {
          images.splice(i, i);
          });
        }
        };
      }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

  }(this);
</script>

<script>
		// document.onkeydown = function(e) {
		// 	if(e.keyCode == 123) {
		// 	 return false;
		// 	}
		// 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
		// 	 return false;
		// 	}
		// 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
		// 	 return false;
		// 	}
		// 	if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
		// 	 return false;
		// 	}

		// 	if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
		// 	 return false;
		// 	}      
		// }
  </script>

  <!-- Logout Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="logoutModal" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-sign-out"></i> Logout?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure for logout?</p>

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <a href="<?= BASE_URL;?>userlogout" class="btn btn-danger text-white" type="button">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- modal -->




  <script type="text/javascript">
	  //var current = window.location.pathname
	  var current =  window.location.href;

	    $(".account-menu >li a").filter(function() {

	        var link = $(this).attr("href");
	        if(link){ 
	            if (current.indexOf(link) != -1) {
	            	$(this).closest('li').addClass('active');
	                return false;
	            }
	        }
	    });
	</script>