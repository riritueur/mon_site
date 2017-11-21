  <script type="text/javascript">
    function fond() {
      var fond1 = document.getElementById("hom");
      var logo = document.getElementById("logo");


      if (fond1.className == "home") {
        fond1.className = "home2";
        logo.src = "/ressource/icon/laptop.svg";
      } else {
        fond1.className = "home";
        logo.src = "/ressource/icon/code.svg";
      }
    }

  </script>