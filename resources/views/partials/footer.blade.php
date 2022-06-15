

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"

    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"

    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="

    crossorigin="anonymous"></script>



    

<script type="text/javascript">


jQuery(document).ready(function ($) {
  "use strict";

  var navclone = function () {
    $(".js-clone-nav").each(function () {
      var $this = $(this);
      $this.clone().attr("class", "clone-view").appendTo(".mobile-view-body");
    });

    $("body").on("click", ".js-toggle", function (e) {
      var $this = $(this);
      e.preventDefault();

      if ($("body").hasClass("off-view")) {
        $("body").removeClass("off-view");
      } else {
        $("body").addClass("off-view");
      }
    });

    $(document).mouseup(function (e) {
      var container = $(".mobile-view");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("off-view")) {
          $("body").removeClass("off-view");
        }
      }
    });

    $(window).resize(function () {
      var $this = $(this),
        w = $this.width();
      if (w > 768) {
        if ($("body").hasClass("off-view")) {
          $("body").removeClass("off-view");
        }
      }
    });
  };
  navclone();
});

</script>

<script>

//$('.modal').modal('show');

var selector = '#navbar a';



$(selector).on('click', function() {

    $(selector).removeClass('active');

    $(this).addClass('active');

});

</script>

@stack('scripts')

</body>

</html>



