// Get the button element by its ID
const accountButton = document.getElementById("accountButton");

// Add a click event listener to the button
accountButton.addEventListener("click", function () {
  // Redirect the user to the login page when the button is clicked
  window.location.href = "signin.html";
});
$(document).ready(function () {
  $(".selected-option").click(function () {
    $(".options").slideToggle();
  });

  $(".option").hover(
    function () {
      $(this).css("background-color", "blue").css("color", "white");
    },
    function () {
      $(this).css("background-color", "").css("color", "");
    }
  );

  $(".option").click(function () {
    var value = $(this).attr("data-value");
    $(".selected-option").text($(this).text());
    $(".options").slideUp();
    // Do something with the selected value (e.g., send it to the server)
  });
});

