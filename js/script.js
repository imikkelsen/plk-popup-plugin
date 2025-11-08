jQuery(document).ready(function ($) {
  console.log("KG popup JS loaded");

  // Vis popup efter 2 sekunder
  setTimeout(function () {
    $("#kg-popup-container").removeClass("kg-hidden");
  }, 1000);

  // Luk popup når man klikker på X (virker også i Elementor)
  $(document).on("click", "#kg-popup-close", function () {
    $("#kg-popup-container").addClass("kg-hidden");
  });

  // Luk popup når man klikker udenfor boksen
  $(document).on("click", "#kg-popup-container", function (e) {
    if (e.target.id === "kg-popup-container") {
      $("#kg-popup-container").addClass("kg-hidden");
    }
  });

  // Luk popup med ESC
  $(document).on("keydown", function (e) {
    if (e.key === "Escape") {
      $("#kg-popup-container").addClass("kg-hidden");
    }
  });
});