/* Isotope Gallery */

// init isotope
var $gallery = $(".p-gallery").isotope({
  itemSelector: ".p-gallery-item",
  layoutMode: "fitRows"
});
// layout Isotope after each image loads
$gallery.imagesLoaded().progress(function() {
  $gallery.isotope("layout");
});

$(".filters-button-group").on("click", "a", function() {
  var filterValue = $(this).attr("data-filter");
  $gallery.isotope({ filter: filterValue });
  console.log("Filter value: " + filterValue);
});

/* Tabs */
$(".tabgroup > div").hide();
$(".tabgroup > div:first-of-type").show();
$(".tabs a").click(function(e) {
  e.preventDefault();
  var $this = $(this),
    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
    others = $this
      .closest("li")
      .siblings()
      .children("a"),
    target = $this.attr("href");
  others.removeClass("active");
  $this.addClass("active");

  // Scroll to tab content (for mobile)
  if ($(window).width() < 992) {
    $("html, body").animate(
      {
        scrollTop: $("#pGallery").offset().top
      },
      200
    );
  }
});
