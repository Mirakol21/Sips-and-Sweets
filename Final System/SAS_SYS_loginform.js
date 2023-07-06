function myFunction() {
  
    var list = document.getElementById("dropdown-list").value;
    
    switch (list) {
      
      case "1":
        document.getElementById("action_page").action = "SAS_SYS_home.html";
        break;
      case "2":
        document.getElementById("action_page").action = "SAS_SYS_aboutus.html";
        break;
      case "3":
        document.getElementById("action_page").action = "SAS_SYS_FAQs.html";
        break;
      case "4":
        document.getElementById("action_page").action = "SAS_SYS_home.html";
        break;
      case "5":
        document.getElementById("action_page").action = "SAS_SYS_aboutus.html";
        break;
      case "6":
        document.getElementById("action_page").action = "SAS_SYS_FAQs.html";
        break;
      default:
        document.getElementById("action_page").action = "SAS_SYS_home.html";
        break;
    }

  }