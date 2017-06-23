
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex">


<style class="cp-pen-styles">html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
}

.slider {
  margin: 0 auto;
  max-width: 940px;
}

.slide_viewer {
  height: 340px;
  overflow: hidden;
  position: relative;
}

.slide_group {
  height: 100%;
  position: relative;
  width: 100%;
}

.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}

.slide:first-child {
  display: block;
}


.slide_buttons {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a.slide_btn {
  color: #474544;
  font-size: 42px;
  margin: 0 0.175em;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.slide_btn.active, .slide_btn:hover {
  color: #428CC6;
  cursor: pointer;
}

.directional_nav {
  height: 340px;
  margin: 0 auto;
  max-width: 940px;
  position: relative;
  top: -340px;
}

 </style></head><body>
<div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->

<div class="slide_buttons">
</div>

<!-- End // .directional_nav -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>$('.slider').each(function () {
    var $this = $(this);
    var $group = $this.find('.slide_group');
    var $slides = $this.find('.slide');
    var bulletArray = [];
    var currentIndex = 0;
    var timeout;
    function move(newIndex) {
        var animateLeft, slideLeft;
        advance();
        if ($group.is(':animated') || currentIndex === newIndex) {
            return;
        }
        bulletArray[currentIndex].removeClass('active');
        bulletArray[newIndex].addClass('active');
        if (newIndex > currentIndex) {
            slideLeft = '100%';
            animateLeft = '-100%';
        } else {
            slideLeft = '-100%';
            animateLeft = '100%';
        }
        $slides.eq(newIndex).css({
            display: 'block',
            left: slideLeft
        });
        $group.animate({ left: animateLeft }, function () {
            $slides.eq(currentIndex).css({ display: 'none' });
            $slides.eq(newIndex).css({ left: 0 });
            $group.css({ left: 0 });
            currentIndex = newIndex;
        });
    }
    function advance() {
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            if (currentIndex < $slides.length - 1) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        }, 4000);
    }
    $('.next_btn').on('click', function () {
        if (currentIndex < $slides.length - 1) {
            move(currentIndex + 1);
        } else {
            move(0);
        }
    });
    $('.previous_btn').on('click', function () {
        if (currentIndex !== 0) {
            move(currentIndex - 1);
        } else {
            move(3);
        }
    });
    $.each($slides, function (index) {
        var $button = $('<a class="slide_btn">&bull;</a>');
        if (index === currentIndex) {
            $button.addClass('active');
        }
        $button.on('click', function () {
            move(index);
        }).appendTo('.slide_buttons');
        bulletArray.push($button);
    });
    advance();
});
//# sourceURL=pen.js
</script>
</body></html>