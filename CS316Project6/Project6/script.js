  // Wait for document to load
  window.addEventListener("load", function() {
    var themeButton = document.getElementById("themeButton");

    // When button gets clicked
    themeButton.onclick = changeTheme;

    var dropDown = document.querySelector("select[name = 'type']");
    var dropDown2 = document.querySelector("select[name = 'emptySelect']");
    dropDown2.disabled = true;
    dropDown.addEventListener('change', function(e) {
        var choice = e.target.value;
        dropDown2.removeAttribute("disabled");
        dropDown2.innerHTML = "";
        addOption(dropDown2, "Concert Alerts", "Concert Alerts");
        addOption(dropDown2, "Fun Facts about Maestro Nardolillo! :3", "Fun Facts about Maestro Nardolillo! :3");
    }
    );

    $(function() {
        $(".popup").hide();
        $(".thumbnail").on("mouseenter", function() {
            $(".popup").fadeIn();
        });
        $(".thumbnail").on("mouseleave", function() {
            $(".popup").fadeOut();
        });
        $(".popup2").hide();
        $(".thumbnail2").on("mouseenter", function() {
            $(".popup2").fadeIn();
        });
        $(".thumbnail2").on("mouseleave", function() {
            $(".popup2").fadeOut();
        });
    });

  });

  function addOption(select, optionText, optionValue) {
    var opt = document.createElement('option');
    opt.appendChild(document.createTextNode(optionText));
    opt.value = optionValue;
    select.appendChild(opt);
  }

  function changeTheme() {
      var body = document.body;
      var menu = document.getElementsByClassName("menu")[0];
      var caption = document.getElementsByClassName("popup")[0];
      var caption2 = document.getElementsByClassName("popup2")[0];
      var h2 = document.getElementsByTagName("h2")[0];
      var table = document.getElementsByTagName("table")[0];
      var td = document.getElementsByTagName("td");
      
     if (body.id == "dark") {
        body.id = "light";
        body.style.backgroundColor = "white";
        body.style.color = "black";
        menu.style.backgroundColor = "white";
        menu.style.border = "1px solid black";
        caption.style.backgroundColor = "white";
        caption2.style.backgroundColor = "white";
        caption.style.border = "10px solid black";
        caption2.style.border = "10px solid black";
        h2.style.border = "10px solid black";
        table.style.border = "15px solid black";
        for (i = 0; i < td.length; i++) {
            td[i].style.border = "1px solid black";
        }
        
     }
     else {
        body.id = "dark";
        body.style.backgroundColor = "black";
        body.style.color = "white";
        menu.style.backgroundColor = "black";
        menu.style.border = "1px solid white";
        caption.style.backgroundColor = "black";
        caption2.style.backgroundColor = "black";
        caption.style.border = "10px solid white";
        caption2.style.border = "10px solid white";
        h2.style.border = "10px solid white";
        table.style.border = "15px solid white";
        for (i = 0; i < td.length; i++) {
            td[i].style.border = "1px solid white";
        }
     }
  }



