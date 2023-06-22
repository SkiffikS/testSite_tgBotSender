document.addEventListener('DOMContentLoaded', (event) => {
  const dropdownToggle = document.getElementById('h-my-dropdown-1');
  const dropdownMenu = document.getElementById('h-dropdown-menu-1');

  dropdownToggle.addEventListener('click', function (event) {
    event.preventDefault();
    dropdownMenu.style.top = dropdownMenu.style.top === '-100%' ? '64px' : '-100%';
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var menuItems = document.querySelectorAll('#menu1 a');
  var offcanvas = document.querySelector('#offcanvas1');
  var subCloseButtons = document.querySelectorAll('.sub-menu-close');
  var subMenus = document.querySelectorAll('[id^="sub-"]');
  var offcanvasHeader = document.querySelector(".offcanvas-header");
  var offcanvasFooter = document.querySelector(".offcanvas-footer");
  var menu = document.getElementById("menu1");

  if (window.matchMedia("(max-width: 768px)").matches) {
    offcanvas.style.width = '90%';
  } else {
    offcanvas.style.width = '40%';
  }

  menuItems.forEach(function (menuItem) {
    menuItem.addEventListener('click', function (e) {
      e.preventDefault();

      var target = e.target.dataset.target;
      var targetElement = document.querySelector(target);

      if (targetElement) {
        subMenus.forEach(function (subMenu) {
          subMenu.style.display = 'none';
        });

        targetElement.style.display = 'block';

        if (window.matchMedia("(max-width: 768px)").matches) {
          offcanvas.style.width = '90%';
          offcanvas.style.background = '#dbdbdb';
          menu.style.display = 'none';
          offcanvasHeader.style.display = 'none';
          offcanvasFooter.style.display = 'none';
        } else {
          offcanvas.style.width = '80%';
          offcanvas.style.background = "linear-gradient(90deg, white 50%, #eeeeee 50%)";
          offcanvasHeader.style.display = 'flex';
          offcanvasFooter.style.display = 'flex';
        }

      } else {
        console.error('Element ' + target + ' not found.');
      }
    });
  });

  subCloseButtons.forEach(function (button) {
    button.addEventListener('click', function (e) {
      e.preventDefault();

      var parentUL = e.target.closest('[id^="sub-"]');
      if (parentUL) {
        parentUL.style.display = 'none';

        if (window.matchMedia("(max-width: 768px)").matches) {
          offcanvas.style.width = '90%';
          offcanvas.style.background = 'white';
          menu.style.display = 'block';
          offcanvasHeader.style.display = 'flex';
          offcanvasFooter.style.display = 'flex';
        } else {
          offcanvas.style.width = '40%';
          offcanvas.style.background = 'white';
          offcanvasHeader.style.display = 'flex';
          offcanvasFooter.style.display = 'flex';
        }
      }
    });
  });
});

var breakpoints = [576, 768, 992, 1200, 1400];

var initialMatches = breakpoints.map(function (bp) {
  return window.matchMedia(`(max-width: ${bp}px)`).matches;
});

window.addEventListener('resize', function () {
  breakpoints.forEach(function (bp, index) {
    var matches = window.matchMedia(`(max-width: ${bp}px)`).matches;
    if (matches !== initialMatches[index]) {
      location.reload();
    }
    initialMatches[index] = matches;
  });
});


let dropdownToggles = document.querySelectorAll('.my-dropdown');
let timeoutId;

dropdownToggles.forEach((dropdownToggle) => {
  dropdownToggle.addEventListener('mouseover', function () {
    let menuId = this.id + '-menu';
    document.getElementById(menuId).style.display = 'block';
    clearTimeout(timeoutId);
  });

  dropdownToggle.addEventListener('mouseout', function () {
    let menuId = this.id + '-menu';
    timeoutId = setTimeout(() => {
      document.getElementById(menuId).style.display = 'none';
    }, 500);
  });
});

let dropdownMenus = document.querySelectorAll('.dropdown-menu');

dropdownMenus.forEach((dropdownMenu) => {
  dropdownMenu.addEventListener('mouseover', function () {
    this.style.display = 'block';
    clearTimeout(timeoutId);
  });

  dropdownMenu.addEventListener('mouseout', function () {
    timeoutId = setTimeout(() => {
      this.style.display = 'none';
    }, 500);
  });
});

// send form
const form = document.getElementById("sendTGform");
if (form) {
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    sendMessage(form);
  });
}

async function sendMessage(form) {
  const formData = new FormData(form);
  if (formData) {
    const url = "functions/send.php";
    const response = await fetch(url, {
      method: "POST",
      body: formData
    });
    if (response.ok) {
      form.reset();
      alert("Form semnd");
    } else {
      alert("Error!");
    }
  }
}

document.addEventListener('DOMContentLoaded', (event) => {
  var path = window.location.pathname;
  var page = path.split("/").pop();

  var newHref;

  switch (page) {
    case 'index.php':
      newHref = 'page2.php';
      break;
    case 'page2.php':
      newHref = 'page3.php';
      break;
    case 'page3.php':
      newHref = 'index.php';
      break;
    default:
      newHref = 'index.php';
  }

  var links = document.getElementsByTagName("a");
  for (var i = 0; i < links.length; i++) {
    links[i].href = newHref;
  }
});

window.addEventListener('DOMContentLoaded', (event) => {
  if (window.innerWidth < 768) {
    let dropdownHeaders = document.querySelectorAll('#adaptive-footer-drowdown');
    dropdownHeaders.forEach((header) => {
      let siblingList = header.nextElementSibling;
      siblingList.style.display = 'none';

      header.addEventListener('click', function () {
        if (siblingList.style.display === 'none') {
          siblingList.style.display = 'block';
        } else {
          siblingList.style.display = 'none';
        }
      });
    });
  }
});