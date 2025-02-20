//fadein 
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll('#subscription .card');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  });

  cards.forEach(card => {
    observer.observe(card);
  });
});

//category see more/less
document.addEventListener("DOMContentLoaded", function () {
  console.log("Script loaded and running!");

  let seeMoreBtn = document.getElementById("seeMoreBtn");
  let moreCategories = document.getElementById("moreCategories");

  if (!seeMoreBtn || !moreCategories) {
    console.error("Button or moreCategories section not found!");
    return;
  }

  seeMoreBtn.addEventListener("click", function () {
    console.log("Button clicked!");

    if (moreCategories.classList.contains("d-none")) {
      moreCategories.classList.remove("d-none");
      this.textContent = "See Less";
    } else {
      moreCategories.classList.add("d-none");
      this.textContent = "See More";
    }
  });
});



AOS.init();

//for selecting books categories active button
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    // Remove active class from all tabs
    tabs.forEach(tab => tab.classList.remove('active'))
    // Add active class to clicked tab
    tab.classList.add('active')

    // Hide all tab contents
    tabContents.forEach(content => content.classList.remove('active'))
    // Show selected tab content
    const target = document.querySelector(tab.dataset.tabTarget)
    target.classList.add('active')
  })
})

//header active button for navbar 
document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('#navbar .nav-link');
  const currentPath = window.location.pathname;

  navLinks.forEach(link => {
    const linkPath = link.getAttribute('href')?.replace(/^.*\/\/[^\/]+/, '');

    if (currentPath === linkPath) {
      link.classList.add('active');
    }

    link.addEventListener('click', () => {
      navLinks.forEach(navLink => navLink.classList.remove('active'));
      link.classList.add('active');
    });
  });
});




