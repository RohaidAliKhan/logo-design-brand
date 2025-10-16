$(document).ready(function () {
  var package_name = localStorage.getItem("package_name");
  if (package_name == undefined) {
    window.location.href = "/";
  }
  var package_price_html = localStorage.getItem("package_price_html");
  var package_description = localStorage.getItem("package_description");
  var package_category = localStorage.getItem("package_category");
  var crm_email = localStorage.getItem("crm_email");
  var crm_name = localStorage.getItem("crm_name");
  var crm_phone = localStorage.getItem("crm_phone");
  if (crm_email != null) {
    $("#txtEmailAddress").val(crm_email);
  }
  if (crm_name != null) {
    $("#txtName").val(crm_name);
  }
  if (crm_phone != null) {
    $("#txtPhoneNumber").val(crm_phone);
  }
  $("#package_name").text(package_name);
  $("#pname").val(package_name.replace(/\s+/g, " ").trim());
  $("#pprice").val(package_price_html.replace(/\s/g, "").replace("USD", ""));
  $(".packageName").text(package_name);
  $(".packagePrice").text(package_price_html.replace(/\s/g, "").replace("USD", ""));
  $(".packageDescription").html(package_description);
  if (package_category == 1) {
    $("#logo-brief").removeClass("hide");
  }
});

var logoField = "";
var categ = Array();
var i = 0;
$(".bordr").click(function () {
  var selct = $(this).attr("selected");
  var trys = 0;
  for (var j = 0; j < categ.length; j++) {
    if ($(this).attr("src") == categ[j]) {
      var abc = $($(this).parents("li")).find("p").html();
      logoField = logoField.replace(abc, "");
      $(this).css("border", "3px solid #777");
      categ[j] = "";
      trys = 1;
    }
  }
  if (trys == 0) {
    var abc = $(this).parent().parent().find("p").text();
    logoField += " " + abc;
    $(this).css("border", "3px solid #97C03E");
    categ[i] = $(this).attr("src");
    i++;
  }
  newAr = Array();
  var l = 0;
  for (var k = 0; k < categ.length; k++) {
    if (categ[k] != "") {
      newAr[l] = categ[k];
      l++;
    }
  }
  $("#logoSelect").val(logoField);
});
